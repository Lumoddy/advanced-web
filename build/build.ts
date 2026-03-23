import * as fs from "node:fs/promises";
import { exec } from "node:child_process";
import { log } from "./logging.ts";
import * as YAML from "yaml";
import { sqlFileFrom } from "./database/database_sql.ts";
import { preprocessObject } from "./database/preprocess.ts";
import { phpFileFrom } from "./database/database_access.ts";

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
--- This file was auto-generated based on ./build/database/database_structure.yaml.
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
        const declaredErrors = new Map<string, Set<string> | null>();

        await Promise.all(
            (await fs.readdir(
                "./json",
                { withFileTypes: true, recursive: true }))
            .map(async (dirent) =>
            {
                if (!dirent.isFile())
                    return;

                const path = `${dirent.parentPath}/${dirent.name}`;
                let errors: Set<string> | null = new Set();

                const [, extension] = /^.*?(?:\.([^\.]*))?$/s
                    .exec(dirent.name) as [string, string?];

                switch (extension?.toLowerCase())
                {
                    case "php":
                    {
                        const file = await fs.readFile(path, "utf-8");

                        const pattern = /\?>"error":"(?<m>(?:[^"\\]|\\.)*)",?<\?php|json_encode\s*\(\s*\[\s*"error" => "(?<m>(?:[^"\\]|\\.)*)|\?>"error":"?<\?php(?<a>)|json_encode(?<a>)"/gs;

                        let match;
                        while ((match = pattern.exec(file)) !== null)
                        {
                            if ((match.groups as any)["a"] === undefined)
                                errors.add((match.groups as any)["m"]);
                            else
                            {
                                errors = null;
                                break;
                            }
                        }

                        declaredErrors.set(path, errors);

                        break;
                    }
                }
            }));

        let auto = `
// This file was auto-generated based on the errors detected under ./json.

export type ServerErrorMap =
{
`;
        for (const [path, errors] of declaredErrors)
        {
            auto += `    [\``;
            auto += path;
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

                    auto += `\``;
                    auto += error;
                    auto += `\``;
                }
            }

            auto += `,
`;
        }

        auto += `};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];
`;

        await fs.writeFile("./ts/server_errors.d.ts", auto, "utf-8");

        log("success", "Converted errors from api files into TypeScript declaration.");

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