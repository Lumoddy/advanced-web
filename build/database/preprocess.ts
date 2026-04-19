
export type DatabaseColumn =
    & {
        snakeSingle: string,
        snakeShortenedSingle: string,
        signed: boolean,
        nullable: boolean,
    }
    & (
        | ({ type: "BIGINT", size: undefined } & typeof typenameMap["BIGINT"])
        | ({ type: "INT", size: undefined } & typeof typenameMap["INT"])
        | ({ type: "SMALLINT", size: undefined } & typeof typenameMap["SMALLINT"])
        | ({ type: "TINYINT", size: undefined } & typeof typenameMap["TINYINT"])
        | ({ type: "FLOAT", size: undefined } & typeof typenameMap["FLOAT"])
        | ({ type: "DOUBLE", size: undefined } & typeof typenameMap["DOUBLE"])
        | ({ type: "DATE", size: undefined } & typeof typenameMap["DATE"])
        | ({ type: "TEXT", size: undefined } & typeof typenameMap["TEXT"])
        | ({ type: "VARCHAR", size: number } & typeof typenameMap["VARCHAR"])
        | ({ type: "CHAR", size: number } & typeof typenameMap["CHAR"])
        | ({ type: "VARBINARY", size: number } & typeof typenameMap["VARBINARY"])
        | ({ type: "BINARY", size: number } & typeof typenameMap["BINARY"]));

export type DatabaseConstraint =
    & { columns: Map<string, DatabaseColumn> }
    & (
        | { type: "primary", other: undefined, otherColumns: undefined }
        | { type: "unique", other: undefined, otherColumns: undefined }
        | { type: "key", other: undefined, otherColumns: undefined }
        | { type: "foreign", other: string, otherColumns: Map<string, DatabaseColumn> });

export const typenameMap = Object.freeze(
{
    "BIGINT": Object.freeze({ phpType: "int", phpSqlType: "i", phpFromSQL: "(int)$0", phpToSQL: "$0" }),
    "INT": Object.freeze({ phpType: "int", phpSqlType: "i", phpFromSQL: "(int)$0", phpToSQL: "$0" }),
    "SMALLINT": Object.freeze({ phpType: "int", phpSqlType: "i", phpFromSQL: "(int)$0", phpToSQL: "$0" }),
    "TINYINT": Object.freeze({ phpType: "int", phpSqlType: "i", phpFromSQL: "(int)$0", phpToSQL: "$0" }),
    "FLOAT": Object.freeze({ phpType: "float", phpSqlType: "d", phpFromSQL: "(float)$0", phpToSQL: "$0" }),
    "DOUBLE": Object.freeze({ phpType: "float", phpSqlType: "d", phpFromSQL: "(float)$0", phpToSQL: "$0" }),
    "TEXT": Object.freeze({ phpType: "string", phpSqlType: "s", phpFromSQL: "(string)$0", phpToSQL: "$0" }),
    "DATE": Object.freeze({ phpType: "DateTime", phpSqlType: "s", phpFromSQL: "DateTime::createFromFormat(\"Y-m-d\", (string)$0) or throw new LogicException(\"Failed to parse SQL Date.\")", phpToSQL: "$0->format(\"Y-m-d\")" }),
    "VARCHAR": Object.freeze({ phpType: "string", phpSqlType: "s", phpFromSQL: "(string)$0", phpToSQL: "$0" }),
    "CHAR": Object.freeze({ phpType: "string", phpSqlType: "s", phpFromSQL: "(string)$0", phpToSQL: "$0" }),
    "VARBINARY": Object.freeze({ phpType: "string", phpSqlType: "s", phpFromSQL: "(string)$0", phpToSQL: "$0" }),
    "BINARY": Object.freeze({ phpType: "string", phpSqlType: "s", phpFromSQL: "(string)$0", phpToSQL: "$0" }),
});

export type DatabaseTable =
{
    snakeSingle: string,
    snakePlural: string,
    snakeShortenedSingle: string,
    snakeShortenedPlural: string,
    columns: Map<string, DatabaseColumn>,
    constraints: DatabaseConstraint[],
    readOnly: boolean,
};

export type DatabaseView =
{
    snakeSingle: string,
    snakePlural: string,
    snakeShortenedSingle: string,
    snakeShortenedPlural: string,
    columns: Map<string, DatabaseColumn>,
    keys: DatabaseConstraint[],
    query: string,
};

export type DatabaseStructure =
{
    tables: Map<string, DatabaseTable>,
    views: Map<string, DatabaseView>,
};

export function preprocessObject(source: any): DatabaseStructure
{
    const
    {
        ["replacements"]: { ["column"]: replacementColumns },
        ["tables"]: sourceTables,
        ["views"]: sourceViews,
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

            const type = String(sourceColumn["type"]).toUpperCase();
            const nullable = Boolean(sourceColumn["nullable"] ?? false);
            const signed = Boolean(sourceColumn["signed"] ?? true);
            let size: any;

            switch (type)
            {
                case "BIGINT":
                case "INT":
                case "SMALLINT":
                case "TINYINT":
                case "FLOAT":
                case "DOUBLE":
                case "TEXT":
                case "DATE":
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
                    phpType: typenameMap[type].phpType as any,
                    phpSqlType: typenameMap[type].phpSqlType as any,
                    phpFromSQL: typenameMap[type].phpFromSQL as any,
                    phpToSQL: typenameMap[type].phpToSQL as any,
                    type,
                    size,
                    signed,
                    nullable,
                });
        }

        const sourceConstraints = sourceTable["constraints"];
        const constraints: DatabaseConstraint[] = [];
        const readOnly = Boolean(sourceTable["read_only"]);

        for (const sourceConstraint of sourceConstraints)
        {
            for (const sourceType in sourceConstraint)
            {
                const type = sourceType.toLowerCase();
                switch (type)
                {
                    case "primary_key":
                    {
                        constraints.push(
                        {
                            type: "primary",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceConstraint[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "unique_key":
                    {
                        constraints.push(
                        {
                            type: "unique",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceConstraint[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "key":
                    {
                        constraints.push(
                        {
                            type: "key",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceConstraint[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "foreign_key":
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
                            type: "foreign",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    first[Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other,
                            otherColumns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    second[Symbol.iterator](),
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
                readOnly,
            });
    }

    const views = new Map<string, DatabaseView>();

    for (const name in sourceViews)
    {
        const sourceView = sourceViews[name];

        const snakePlural = String(sourceView["PHP Plural"] ?? name);
        const snakeSingle = String(sourceView["PHP Single"] ?? snakePlural.substring(0, snakePlural.length - 1));
        const snakeShortenedPlural = String(sourceView["PHP Short Plural"] ?? snakePlural);
        const snakeShortenedSingle = String(sourceView["PHP Short Single"] ?? snakeSingle);

        const sourceColumns = sourceView["columns"];
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

            const type = String(sourceColumn["type"]).toUpperCase();
            const nullable = Boolean(sourceColumn["nullable"] ?? false);
            const signed = Boolean(sourceColumn["signed"] ?? true);
            let size: any;

            switch (type)
            {
                case "BIGINT":
                case "INT":
                case "SMALLINT":
                case "TINYINT":
                case "FLOAT":
                case "DOUBLE":
                case "TEXT":
                case "DATE":
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
                    phpType: typenameMap[type].phpType as any,
                    phpSqlType: typenameMap[type].phpSqlType as any,
                    phpFromSQL: typenameMap[type].phpFromSQL as any,
                    phpToSQL: typenameMap[type].phpToSQL as any,
                    type,
                    size,
                    signed,
                    nullable,
                });
        }

        const sourceKeys = sourceView["keys"];
        const keys: DatabaseConstraint[] = [];

        for (const sourceKey of sourceKeys)
        {
            for (const sourceType in sourceKey)
            {
                const type = sourceType.toLowerCase();
                switch (type)
                {
                    case "primary_key":
                    {
                        keys.push(
                        {
                            type: "primary",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceKey[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "unique_key":
                    {
                        keys.push(
                        {
                            type: "unique",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceKey[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "key":
                    {
                        keys.push(
                        {
                            type: "key",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    sourceKey[sourceType][Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other: undefined,
                            otherColumns: undefined,
                        });

                        break;
                    }
                    case "foreign_key":
                    {
                        const [first, secondOuter] = sourceKey[sourceType];

                        let other, second;
                        for (const name in secondOuter)
                        {
                            second = secondOuter[other = name];
                            break;
                        }

                        if (other === undefined)
                            throw new SyntaxError(
                                `Empty constraint`);

                        keys.push(
                        {
                            type: "foreign",
                            columns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    first[Symbol.iterator](),
                                    (x) => [String(x), null as any])),
                            other,
                            otherColumns: new Map(
                                (Iterator.prototype.map<[string, DatabaseColumn]>).call(
                                    second[Symbol.iterator](),
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

        views.set(
            name,
            {
                snakePlural,
                snakeSingle,
                snakeShortenedPlural,
                snakeShortenedSingle,
                columns,
                keys,
                query: String(sourceView["query"]),
            });
    }

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
        for (const constraint of isView ? table.keys : table.constraints)
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
                const table = tables.get(constraint.other);

                if (table === undefined)
                    throw new SyntaxError(
                        `Unknown table: ${constraint.other}`);

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

    return { tables, views };
}