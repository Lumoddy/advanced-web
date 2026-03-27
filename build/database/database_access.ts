import type { DatabaseColumn, DatabaseStructure } from "./preprocess.ts";

export function phpFileFrom(structure: DatabaseStructure): string
{
    const tables = structure.tables;

    let php = `
    declare(strict_types=1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class auto_database_access
    {
        protected mysqli $connection;

        public function __construct(mysqli $connection)
        {
            $this->connection = $connection;
        }

        public function close()
        {
            $this->connection->close();
        }
`;

    for (const [tableName, table] of tables)
    {
        const columns = table.columns;
        const constraints = table.constraints;

        php += `
        /**
         * @param array{`;

        let firstColumn = true;
        for (const [, column] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column.snakeShortenedSingle;
            php += `: `;

            if (column.nullable)
                php += `?`;

            php += column.phpType;
        }

        php += `} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_`;

        php += table.snakePlural;
        php += `(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO \``;

        php += tableName;
        php += `\` (`;

        firstColumn = true;
        for (const [columnName, ] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += `\``;
            php += columnName;
            php += `\``;
        }

        php += `) VALUES (`;

        firstColumn = true;
        for (const [] of columns)
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

        for (const [, column] of columns)
        {
            php += `                array_push($params, `;
            php += column.phpToSQL.replaceAll("$0", `$row["${column.snakeShortenedSingle}"]`);
            php += `);
`;
        }

        php += `            }

            $stmt->bind_param(str_repeat("`;

        for (const [, column] of columns)
            php += column.phpSqlType;

        php += `", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{`;

        firstColumn = true;
        for (const [, column] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += column.snakeShortenedSingle;
            php += `: `;

            if (column.nullable)
                php += `?`;

            php += column.phpType;
        }

        php += `}[]
         * @throws mysqli_sql_exception
         */
        function select_`;

        php += table.snakePlural;
        php += `(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `;

        firstColumn = true;
        for (const [columnName] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += `\``;
            php += columnName;
            php += `\``;
        }

        php += ` FROM \``;
        php += tableName;
        php += `\` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
`;

        firstColumn = true;
        for (const [, column] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `,
`;

            php += `                $result_`;
            php += column.snakeShortenedSingle;
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

        for (const [columnName, column] of columns)
        {
            php += `                        "`;
            php += columnName;
            php += `" => `;
            php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
            php += `,
`;
        }

        php += `                    ]);
            }

            $stmt->close();

            return $results;
        }
`;

        for (const constraint of constraints)
        {
            switch (constraint.type)
            {
                case "primary":
                case "unique":
                {

            php += `
        /**
`;

                    for (const [, column] of constraint.columns)
                    {
                        php += `         * @param `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;
                        php += ` $`;
                        php += column.snakeShortenedSingle;
                        php += `
`;
                    }

                    php += `         * @return ?array{`;

                    firstColumn = true;
                    for (const [, column] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += column.snakeShortenedSingle;
                        php += `: `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;
                    }

                    php += `}
         * @throws mysqli_sql_exception
         */
        function get_`;

                    php += table.snakeSingle;
                    php += `_with`;

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        php += `_`;

                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `and_`;

                        php += column.snakeShortenedSingle;
                    }

                    php += `(`

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;

                        php += ` $`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `;

                    firstColumn = true;
                    for (const [columnName] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += `\``;
                        php += columnName;
                        php += `\``;
                    }

                    php += ` FROM \``;
                    php += tableName;
                    php += `\` WHERE `;

                    firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += ` AND `;

                        php += `\``;
                        php += columnName;
                        php += `\` = ?`;
                    }

                    php += `");

            $stmt->bind_param(
                "`;

                    for (const [, column] of constraint.columns)
                        php += column.phpSqlType;

                    php += `",
`;

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `,
`;

                        php += `                $`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `);

            $stmt->bind_result(
`;

                    firstColumn = true;
                    for (const [, column] of table.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `,
`;

                        php += `                $result_`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
`;

                    for (const [columnName, column] of table.columns)
                    {
                        php += `                    "`;
                        php += column.snakeShortenedSingle;
                        php += `" => `;
                        php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
                        php += `,
`;
                    }

                    php += `                ]
                : null;

            $stmt->close();

            return $result;
        }
`;

                    break;
                }
                case "key":
                {

            php += `
        /**
`;

                    for (const [, column] of constraint.columns)
                    {
                        php += `         * @param `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;
                        php += ` $`;
                        php += column.snakeShortenedSingle;
                        php += `
`;
                    }

                    php += `         * @return array{`;

                    firstColumn = true;
                    for (const [, column] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += column.snakeShortenedSingle;
                        php += `: `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;
                    }

                    php += `}[]
         * @throws mysqli_sql_exception
         */
        function select_`;

                    php += table.snakePlural;
                    php += `_with`;

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        php += `_`;

                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `and_`;

                        php += column.snakeShortenedSingle;
                    }

                    php += `(`

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        if (column.nullable)
                            php += `?`;

                        php += column.phpType;

                        php += ` $`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `;

                    firstColumn = true;
                    for (const [columnName] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += `\``;
                        php += columnName;
                        php += `\``;
                    }

                    php += ` FROM \``;
                    php += tableName;
                    php += `\` WHERE `;

                    firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += ` AND `;

                        php += `\``;
                        php += columnName;
                        php += `\` = ?`;
                    }

                    php += `");

            $stmt->bind_param(
                "`;

                    for (const [, column] of constraint.columns)
                        php += column.phpSqlType;

                    php += `",
`;

                    firstColumn = true;
                    for (const [, column] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `,
`;

                        php += `                $`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `);

            $stmt->bind_result(
`;

        firstColumn = true;
        for (const [, column] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `,
`;

            php += `                $result_`;
            php += column.snakeShortenedSingle;
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

        for (const [columnName, column] of columns)
        {
            php += `                        "`;
            php += columnName;
            php += `" => `;
            php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
            php += `,
`;
        }

        php += `                    ]);
            }

            $stmt->close();

            return $results;
        }
`;

                    break;
                }
            }
        }
    }

    php += `    }
`;

    return php;
}