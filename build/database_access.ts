
export function phpAccessFromYaml(yaml: any): string
{
    const tables = yaml.tables;

    let php = `<?php
    /* This file was auto-generated based on \`./database_structure.yaml\` */

    declare(strict_types=1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class auto_database_access
    {
        protected mysqli $connection;

        public function __construct(mysqli $connection)
        {
            $this->connection = $connection;
        }
`;

    for (const name in tables)
    {
        const table = tables[name];
        const columns = table.columns;
        const constraints = table.constraints;

        php += `
        /**
         * @param array{`;

        let firstColumn = true;
        for (const column of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column["name"];
            php += `: `;

            switch (String.prototype.toUpperCase.call(column["type"]))
            {
                case "TINYINT":
                case "SMALLINT":
                case "INT":
                case "BIGINT":
                    php += `int`;
                    break;
                case "VARCHAR":
                case "CHAR":
                case "VARBINARY":
                case "BINARY":
                    php += `string`;
                    break;
                default:
                    php += `mixed`;
                    break;
            }

            if (column["nullable"])
                php += `|null`;
        }

        php += `} ...$rows
         */
        function insert_`;

        php += name;
        php += `(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `;

        php += name;
        php += ` (`;

        firstColumn = true;
        for (const column of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column["name"];
        }

        php += `) VALUES (`;

        firstColumn = true;
        for (const _ of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += `?`;
        }

        php += `)".str_repeat(", (`;

        firstColumn = true;
        for (const _ of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += `?`;
        }

        php += `)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
`;

        for (const column of columns)
        {
            php += `                array_push($params, $row["`;
            php += column["name"];
            php += `"]);
`;
        }

        php += `            }

            $stmt->bind_param(str_repeat("`;

        for (const column of columns)
        {
            switch (String.prototype.toUpperCase.call(column["type"]))
            {
                case "TINYINT":
                case "SMALLINT":
                case "INT":
                case "BIGINT":
                    php += `i`;
                    break;
                default:
                    php += `s`;
                    break;
            }
        }

        php += `", $count), ...$params);

            $stmt->execute();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{`;

        firstColumn = true;
        for (const column of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column["name"];
            php += `: `;

            switch (String.prototype.toUpperCase.call(column["type"]))
            {
                case "TINYINT":
                case "SMALLINT":
                case "INT":
                case "BIGINT":
                    php += `int`;
                    break;
                case "VARCHAR":
                case "CHAR":
                case "VARBINARY":
                case "BINARY":
                    php += `string`;
                    break;
                default:
                    php += `mixed`;
                    break;
            }

            if (column["nullable"])
                php += `|null`;
        }

        php += `}[]
         */
        function select_`;

        php += name;
        php += `(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT (`;

        firstColumn = true;
        for (const column of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column["name"];
        }

        php += `) FROM `;
        php += name;
        php += ` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
`;

        firstColumn = true;
        for (const column of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `,
`;

            php += `                $result_`;
            php += column["name"];
        }

        php += `);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
`;

        for (const column of columns)
        {
            php += `                        "`;
            php += column["name"];
            php += `" => $result_`;
            php += column["name"];
            php += `,
`;
        }

        php += `                    ]);
            }

            return $results;
        }
`;
    }

    php += `    }
?>`;

    return php;
}