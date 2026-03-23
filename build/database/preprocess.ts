
export type DatabaseColumn =
    & {
        snakeSingle: string,
        snakeShortenedSingle: string,
        phpType: typeof typenameMap[keyof typeof typenameMap]["phpType"],
        phpSqlType: typeof typenameMap[keyof typeof typenameMap]["phpSqlType"],
        signed: boolean,
        nullable: boolean,
    }
    & (
        | { type: "BIGINT", size: undefined }
        | { type: "INT", size: undefined }
        | { type: "SMALLINT", size: undefined }
        | { type: "TINYINT", size: undefined }
        | { type: "TIMESTAMP", size: undefined }
        | { type: "VARCHAR", size: number }
        | { type: "CHAR", size: number }
        | { type: "VARBINARY", size: number }
        | { type: "BINARY", size: number });

export type DatabaseConstraint =
    & { columns: Map<string, DatabaseColumn> }
    & (
        | { type: "primary", other: undefined, otherColumns: undefined }
        | { type: "unique", other: undefined, otherColumns: undefined }
        | { type: "foreign", other: string, otherColumns: Map<string, DatabaseColumn> });

export const typenameMap = Object.freeze(
{
    "BIGINT": Object.freeze({ phpType: "int", phpSqlType: "i" }),
    "INT": Object.freeze({ phpType: "int", phpSqlType: "i" }),
    "SMALLINT": Object.freeze({ phpType: "int", phpSqlType: "i" }),
    "TINYINT": Object.freeze({ phpType: "int", phpSqlType: "i" }),
    "TIMESTAMP": Object.freeze({ phpType: "string", phpSqlType: "s" }),
    "VARCHAR": Object.freeze({ phpType: "string", phpSqlType: "s" }),
    "CHAR": Object.freeze({ phpType: "string", phpSqlType: "s" }),
    "VARBINARY": Object.freeze({ phpType: "string", phpSqlType: "s" }),
    "BINARY": Object.freeze({ phpType: "string", phpSqlType: "s" }),
});

export type DatabaseTable =
{
    snakeSingle: string,
    snakePlural: string,
    snakeShortenedSingle: string,
    snakeShortenedPlural: string,
    columns: Map<string, DatabaseColumn>,
    constraints: DatabaseConstraint[],
};

export type DatabaseStructure = { tables: Map<string, DatabaseTable> };

export function preprocessObject(source: any): DatabaseStructure
{
    const
    {
        ["replacements"]: { ["column"]: replacementColumns },
        ["tables"]: sourceTables,
    }
    = source;

    const tables = new Map<string, DatabaseTable>();

    for (const name in sourceTables)
    {
        const sourceTable = sourceTables[name];

        const snakePlural = String(sourceTable["PHP Plural"] ?? name);
        const snakeSingle = String(sourceTable["PHP Single"] ?? snakePlural.substring(0, snakePlural.length - 1));
        const snakeShortenedPlural = String(sourceTable["PHP Short Plural"] ?? snakePlural);
        const snakeShortenedSingle = String(sourceTable["PHP Short Single"] ?? snakeSingle);

        const sourceColumns = sourceTable["columns"];
        const columns = new Map<string, DatabaseColumn>();

        for (const name in sourceColumns)
        {
            let sourceColumn = sourceColumns[name];

            for (const [from, to] of replacementColumns)
            {
                for (const key in from)
                {
                    if (from[key] === sourceColumn[key])
                    {
                        sourceColumn = { ...sourceColumn, ...to };
                        break;
                    }
                }
            }

            const snakeSingle = String(sourceColumn["PHP Single"] ?? name);
            const snakeShortenedSingle = String(sourceColumn["PHP Short Single"] ?? snakeSingle);

            const type = String.prototype.toUpperCase.call(sourceColumn["type"]);
            const nullable = Boolean(sourceColumn["nullable"] ?? false);
            const signed = Boolean(sourceColumn["signed"] ?? true);
            let size: any;

            switch (type)
            {
                case "BIGINT":
                case "INT":
                case "SMALLINT":
                case "TINYINT":
                case "TIMESTAMP":
                {
                    break;
                }
                case "VARCHAR":
                case "CHAR":
                case "VARBINARY":
                case "BINARY":
                {
                    try { size = Math.max(0, eval(sourceColumn["size"]) | 0) }
                    catch { size = undefined }

                    break;
                }
                default:
                {
                    throw new SyntaxError(
                        `Unknown type: ${type}`);
                }
            }

            columns.set(
                name,
                {
                    snakeSingle,
                    snakeShortenedSingle,
                    phpType: typenameMap[type].phpType,
                    phpSqlType: typenameMap[type].phpSqlType,
                    type,
                    size,
                    signed,
                    nullable,
                });
        }

        const sourceConstraints = sourceTable["constraints"];
        const constraints: DatabaseConstraint[] = [];

        for (const sourceConstraint of sourceConstraints)
        {
            for (const sourceType in sourceConstraint)
            {
                const type = sourceType.toLowerCase();
                switch (type)
                {
                    case "primary":
                    case "unique":
                    {
                        constraints.push(
                        {
                            type,
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceConstraint[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "foreign":
                    {
                        const [first, secondOuter] = sourceConstraint[sourceType];

                        let other, second;
                        for (const name in secondOuter)
                        {
                            second = secondOuter[other = name];
                            break;
                        }

                        if (other === undefined)
                            throw new SyntaxError(
                                `Empty constraint`);

                        constraints.push(
                        {
                            type,
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    first[Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other,
                            otherColumns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    first[Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                        });

                        break;
                    }
                    default:
                    {
                        throw new SyntaxError(
                            `Unknown constraint: ${sourceType}`);
                    }
                }
            }
        }

        tables.set(
            name,
            {
                snakePlural,
                snakeSingle,
                snakeShortenedPlural,
                snakeShortenedSingle,
                columns,
                constraints,
            });
    }

    for (const [tableName, table] of tables)
    {
        for (const constraint of table.constraints)
        {
            for (const columnName of constraint.columns.keys())
            {
                const column = table.columns.get(columnName);
                if (column === undefined)
                    throw new SyntaxError(
                        `Unknown column in ${tableName}: ${columnName}`);

                constraint.columns.set(columnName, column);
            }

            if (constraint.otherColumns !== undefined)
            {
                for (const columnName of constraint.otherColumns.keys())
                {
                    const column = table.columns.get(columnName);
                    if (column === undefined)
                        throw new SyntaxError(
                            `Unknown column in ${tableName}: ${columnName}`);

                    constraint.otherColumns.set(columnName, column);
                }
            }
        }
    }

    return { tables };
}