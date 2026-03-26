import * as fs from "node:fs/promises";
import { exec } from "node:child_process";
import { log } from "./logging.ts";
import * as YAML from "yaml";
import { sqlFileFrom } from "./database/database_sql.ts";
import { preprocessObject } from "./database/preprocess.ts";
import { phpFileFrom } from "./database/database_access.ts";
import { parsePrefixPHPType } from "./php_types.ts";

// Run this command:
// node ./build/build.ts

log("success", "Build started.");

Promise.all(
[
    (async () =>
    {
        let file;
        try { file = YAML.parse(await fs.readFile("./build/database/database_structure.yaml", "utf-8")) }
        catch (e)
        {
            log("error", e instanceof Error ? e.stack : e);
            return;
        }

        const databaseStructure = preprocessObject(file);

        await Promise.all(
        [
            fs.writeFile(
                "./sql/database_structure.sql",
                `
# This file was auto-generated based on ./build/database/database_structure.yaml.
${sqlFileFrom(databaseStructure)}`,
                "utf-8")
                .then(() => log("success", "Converted database structure to SQL file.")),

            fs.writeFile(
                "./include/auto_database.php",
                `<?php
    // This file was auto-generated based on ./build/database/database_structure.yaml.
${phpFileFrom(databaseStructure)}?>`,
                "utf-8")
                .then(() => log("success", "Converted database structure to PHP access.")),
        ]);
    })(),
    (async () =>
    {
        const declaredShapes = new Map<string, { shape: string, errors: Set<string> | null }>();

        await Promise.all(
            (await fs.readdir(
                "./include/api",
                { withFileTypes: true, recursive: true }))
            .map(async (dirent) =>
            {
                if (!dirent.isFile())
                    return;

                const path = `${dirent.parentPath}/${dirent.name}`;

                const [, extension] = /^.*?(?:\.([^\.]*))?$/s
                    .exec(dirent.name) as [string, string?];

                switch (extension?.toLowerCase())
                {
                    case "php":
                    {
                        const file = await fs.readFile(path, "utf-8");

                        const headerPattern = /\/\*\*+(?:[^*]+?\*+)*?\s*Public\s+API\s*\*+(?:[^*]+?\*+)*?\s*@return\s+([^*]+?)\s*\*+(?:[^*]+?\*+)*?\/\s*function\s+api_(\w+)((?:(?!\/\*\*+(?:[^*]+?\*+)*?\/\s*function\s+api_(\w+)).)*)/gs;

                        let match;
                        while ((match = headerPattern.exec(file)) !== null)
                        {
                            const [, opShape, opName, opContents] = match;

                            const pattern = /throw\s+new\s+api_error\s*\(\s*(?:\"(?<m>(?:[^"]|\\[^])*)\"|(?<a>))/gs;

                            const shape = parsePrefixPHPType(opShape) ?? "unknown";

                            let errors: Set<string> | null = new Set(["internal"]);

                            while ((match = pattern.exec(opContents)) !== null)
                            {
                                if ((match.groups as any)["a"] === undefined)
                                    errors.add((match.groups as any)["m"]);
                                else
                                {
                                    errors = null;
                                    break;
                                }
                            }

                            const opPath = `${dirent.parentPath.replace(/^\.\/include\/api/, "./json")}/${opName}.php`;

                            declaredShapes.set(opPath, { shape, errors });

                            await fs.writeFile(
                                opPath,
                                `<?php
    // This file was auto-generated based on ${path}.

    declare(strict_types=1);
    require_once $_SERVER["DOCUMENT_ROOT"]."/include/common.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."${path.replace(/^\./, "")}";

    header("Content-Type: application/json");

    try { echo json_encode(api_${opName}()); }
    catch (api_error $e)
    {
        echo json_encode($e->as_array());
        http_response_code((int)$e->getCode());
    }
    catch (Throwable $e)
    {
        echo json_encode(
        [
            "error" => "internal",
            "message" => "An unknown internal error occurred.",
        ]);
        http_response_code(500);

        throw $e;
    }
?>`,
                                "utf-8");
                        }

                        break;
                    }
                }
            }));

        let auto = `
// This file was auto-generated based on the code under ./include/op/.

export type ServerErrorMap =
{
`;
        for (const [path, { errors }] of declaredShapes)
        {
            auto += `    [\``;
            auto += path.substring(1);
            auto += `\`]: `;

            if (errors === null)
                auto += `string`;
            else
            {
                let first = true;
                for (const error of errors)
                {
                    if (first)
                        first = false;
                    else
                        auto += ` | `;

                    auto += `"`;
                    auto += error;
                    auto += `"`;
                }
            }

            auto += `,
`;
        }

        auto += `};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];

export type ServerJSONShapeMap =
{
`;
        for (const [path, { shape }] of declaredShapes)
        {
            auto += `    [\``;
            auto += path.substring(1);
            auto += `\`]:
        | `;

            auto += shape;
            auto += `
        | { "error": ServerErrorMap[\``;
            auto += path.substring(1);
            auto += `\`], "message": string },
`;
        }

        auto += `};
`;

        await fs.writeFile("./ts/server_types.d.ts", auto, "utf-8");

        log("success", "Parsed shapes from api files into TypeScript declaration.");

        await new Promise<void>((resolve, reject) => exec("npx tsc", {}, (error) =>
        {
            if (error !== null)
            {
                reject(error);
            }
            else
            {
                log("success", "Transpiled TypeScript.");
                resolve();
            }
        }));
    })(),
])
    .then(
        () => log("success", "Build completed."),
        (e) => log("error", e instanceof Error ? e.stack : e));