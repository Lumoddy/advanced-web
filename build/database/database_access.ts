import type { DatabaseStructure, DatabaseTable, DatabaseView } from "./preprocess.ts";

export function phpFileFrom(structure: DatabaseStructure): string
{
    const tables = structure.tables;
    const views = structure.views;

    let php = `
    declare(strict_types=1);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class auto_database_access
    {
        public readonly mysqli $connection;

        public function __construct(mysqli $connection)
        {
            $this->connection = $connection;
        }

        public function close()
        {
            $this->connection->close();
        }
`;

    for (const [tableName, isView, table] of (function*(): Generator<
        | [string, false, DatabaseTable] 
        | [string, true, DatabaseView]>
        {
            for (const [name, table] of tables)
                yield [name, false, table];

            for (const [name, table] of views)
                yield [name, true, table];
        })())
    {
        const columns = table.columns;
        const constraints = isView ? table.keys : table.constraints;

        if (!isView && !table.readOnly)
        {
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

            try
            {
                $params = [];

                foreach ($rows as $row)
                {
`;

            for (const [, column] of columns)
            {
                php += `                    array_push($params, `;
                php += column.phpToSQL.replaceAll("$0", `$row["${column.snakeShortenedSingle}"]`);
                php += `);
`;
            }

            php += `                }

                $stmt->bind_param(str_repeat("`;

            for (const [, column] of columns)
                php += column.phpSqlType;

            php += `", $count), ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
`;

            for (const [, column] of columns)
            {
                php += `         * param $`;
                php += column.snakeShortenedSingle;
                php += ` `;

                if (column.nullable)
                    php += `?`;

                php += column.phpType;
                php += `
`;
            }

            php += `         * @throws mysqli_sql_exception
         */
        function insert_`;

            php += table.snakeSingle;

            firstColumn = true;
            for (const [, column] of columns)
            {
                php += `_`;

                if (firstColumn)
                    firstColumn = false;
                else
                    php += `and_`;

                php += column.snakeShortenedSingle;
            }

            php += `(
`;

            firstColumn = true;
            for (const [, column] of columns)
            {
                if (firstColumn)
                    firstColumn = false;
                else
                    php += `,
`;

                    php += `            `;

                if (column.nullable)
                    php += `?`;

                php += column.phpType;
                php += ` $`;
                php += column.snakeShortenedSingle;
            }

            php += `): void
        {
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

            php += `)");

            try
            {
                $params =
                [
`;

            for (const [, column] of columns)
            {
                php += `                    `;
                php += column.phpFromSQL.replaceAll("$0", `$${column.snakeShortenedSingle}`);
                php += `,
`;
            }

            php += `                ];

                $stmt->bind_param("`;

            for (const [, column] of columns)
                php += column.phpSqlType;

            php += `", ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }
`;
        }

        php += `
        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{`;

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

        php += `}[]
         * @throws mysqli_sql_exception
         */
        function select_`;

        php += table.snakePlural;
        php += `(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "`;

        if (isView)
        {
            php += `WITH \``;
            php += tableName;
            php += `\` AS (`;
            php += table.query.replaceAll(/\s+/g, " ");
            php += `)`;
        }

        php += `SELECT `;

        firstColumn = true;
        for (const [columnName] of columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                php += `, `;

            php += `\``;
            php += tableName;
            php += `\`.\``;
            php += columnName;
            php += `\``;
        }

        php += ` FROM \``;
        php += tableName;
        php += `\` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

            php += `                    $result_`;
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

        for (const [, column] of columns)
        {
            php += `                            "`;
            php += column.snakeShortenedSingle;
            php += `" => `;

            if (column.nullable)
            {
                php += `$result_`;
                php += column.snakeShortenedSingle;
                php += ` === null ? null : `;
            }

            php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
            php += `,
`;
        }

        php += `                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
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
        function select_`;

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
                "`;

                    if (isView)
                    {
                        php += `WITH \``;
                        php += tableName;
                        php += `\` AS (`;
                        php += table.query.replaceAll(/\s+/g, " ");
                        php += `)`;
                    }

                    php += `SELECT `;

                    firstColumn = true;
                    for (const [columnName] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += `\``;
                        php += tableName;
                        php += `\`.\``;
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
                        php += tableName;
                        php += `\`.\``;
                        php += columnName;
                        php += `\` = ?`;
                    }

                    php += `");

            try
            {
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

                        php += `                    $`;
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

                        php += `                    $result_`;
                        php += column.snakeShortenedSingle;
                    }

                    php += `);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
`;

                    for (const [columnName, column] of table.columns)
                    {
                        php += `                        "`;
                        php += column.snakeShortenedSingle;
                        php += `" => `;

                        if (column.nullable)
                        {
                            php += `$result_`;
                            php += column.snakeShortenedSingle;
                            php += ` === null ? null : `;
                        }

                        php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
                        php += `,
`;
                    }

                    php += `                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
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
                "`;

                    if (isView)
                    {
                        php += `WITH \``;
                        php += tableName;
                        php += `\` AS (`;
                        php += table.query.replaceAll(/\s+/g, " ");
                        php += `)`;
                    }

                    php += `SELECT `;

                    firstColumn = true;
                    for (const [columnName] of columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            php += `, `;

                        php += `\``;
                        php += tableName;
                        php += `\`.\``;
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
                        php += tableName;
                        php += `\`.\``;
                        php += columnName;
                        php += `\` = ?`;
                    }

                    php += `");

            try
            {
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

                        php += `                    $`;
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

                        php += `                    $result_`;
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
                        php += `                            "`;
                        php += column.snakeShortenedSingle;
                        php += `" => `;

                        if (column.nullable)
                        {
                            php += `$result_`;
                            php += column.snakeShortenedSingle;
                            php += ` === null ? null : `;
                        }

                        php += column.phpFromSQL.replaceAll("$0", `$result_${column.snakeShortenedSingle}`);
                        php += `,
`;
                    }

                    php += `                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }
`;

                    break;
                }
            }
        }

        if (!isView && !table.readOnly)
        {
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

                        php += `         * @return bool \`true\` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_`;

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

                        php += `): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM \``;

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
                            php += tableName;
                            php += `\`.\``;
                            php += columnName;
                            php += `\` = ?`;
                        }

                        php += `");

            try
            {
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

                            php += `                    $`;
                            php += column.snakeShortenedSingle;
                        }

                        php += `);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
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

                        php += `         * @return int The amount of deleted rows.
         * @throws mysqli_sql_exception
         */
        function delete_`;

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

                        php += `): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM \``;

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
                            php += tableName;
                            php += `\`.\``;
                            php += columnName;
                            php += `\` = ?`;
                        }

                        php += `");

            try
            {
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

                            php += `                    $`;
                            php += column.snakeShortenedSingle;
                        }

                        php += `);

                $stmt->execute();

                return (int)$stmt->affected_rows;
            }
            finally { $stmt->close(); }
        }
`;

                        break;
                    }
                }
            }
        }
    }

    php += `    }
`;

    return php;
}