import type { DatabaseStructure } from "./preprocess.ts";

export function sqlFileFrom(structure: DatabaseStructure): string
{
    const tables = structure.tables;

    let sql = `
START TRANSACTION;
`;

    for (const [tableName, table] of tables)
    {
        sql += `
CREATE TABLE \``;

        sql += tableName;
        sql += `\` (
`;

        let firstColumn = true;
        for (const [columnName, column] of table.columns)
        {
            if (firstColumn)
                firstColumn = false;
            else
                sql += `,
`;

            sql += `    \``;
            sql += columnName;
            sql += `\` `;
            sql += column.type;

            if (column.size !== undefined)
            {
                sql += `(`;
                sql += column.size;
                sql += `)`;
            }

            if (!column.signed)
                sql += ` UNSIGNED`;

            if (!column.nullable)
                sql += ` NOT`;

            sql += ` NULL`;
        }

        sql += `);
`;
    }

    for (const [tableName, table] of tables)
    {
        let uniqueCounter = 0;
        let foreignCounter = 0;
        let keyCounter = 0;
        let firstConstraint = true;
        for (const constraint of table.constraints)
        {
            switch (constraint.type)
            {
                case "primary":
                {
                    if (firstConstraint)
                    {
                        sql += `
ALTER TABLE \``;

                        sql += tableName;
                        sql += `\`
`;

                        firstConstraint = false;
                    }
                    else
                        sql += `,
`;

                    sql += `    ADD PRIMARY KEY (`;

                    let firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)`;

                    break;
                }
                case "unique":
                {
                    if (firstConstraint)
                    {
                        sql += `
ALTER TABLE \``;

                        sql += tableName;
                        sql += `\`
`;

                        firstConstraint = false;
                    }
                    else
                        sql += `,
`;

                    sql += `    ADD UNIQUE KEY \`unique_`;
                    sql += tableName;
                    sql += `_`;

                    uniqueCounter += 1;
                    sql += uniqueCounter;

                    sql += `\` (`;

                    let firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)`;

                    break;
                }
                case "key":
                {
                    if (firstConstraint)
                    {
                        sql += `
ALTER TABLE \``;

                        sql += tableName;
                        sql += `\`
`;

                        firstConstraint = false;
                    }
                    else
                        sql += `,
`;

                    sql += `    ADD KEY \`key_`;
                    sql += tableName;
                    sql += `_`;

                    keyCounter += 1;
                    sql += keyCounter;

                    sql += `\` (`;

                    let firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)`;

                    break;
                }
                case "foreign":
                {
                    if (firstConstraint)
                    {
                        sql += `
ALTER TABLE \``;

                        sql += tableName;
                        sql += `\`
`;

                        firstConstraint = false;
                    }
                    else
                        sql += `,
`;

                    sql += `    ADD KEY \`from_fk_`;
                    sql += tableName;
                    sql += `_`;

                    foreignCounter += 1;
                    sql += foreignCounter;

                    sql += `\` (`;

                    let firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)`;

                    break;
                }
            }
        }

        if (!firstConstraint)
        {
            sql += `;
`;
        }
    }

    for (const [tableName, table] of tables)
    {
        let foreignCounter = 0;
        let firstConstraint = true;
        for (const constraint of table.constraints)
        {
            switch (constraint.type)
            {
                case "foreign":
                {
                    if (firstConstraint)
                    {
                        sql += `
ALTER TABLE \``;

                        sql += tableName;
                        sql += `\`
`;

                        firstConstraint = false;
                    }
                    else
                        sql += `,
`;

                    sql += `    ADD CONSTRAINT \`fk_`;
                    sql += tableName;
                    sql += `_`;

                    foreignCounter += 1;
                    sql += foreignCounter;

                    sql += `\`
        FOREIGN KEY (`;

                    let firstColumn = true;
                    for (const [columnName] of constraint.columns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)
        REFERENCES \``;

                    sql += constraint.other;
                    sql += `\` (`;

                    firstColumn = true;
                    for (const [columnName] of constraint.otherColumns)
                    {
                        if (firstColumn)
                            firstColumn = false;
                        else
                            sql += `, `;

                        sql += `\``;
                        sql += columnName;
                        sql += `\``;
                    }

                    sql += `)`;

                    break;
                }
            }
        }

        if (!firstConstraint)
        {
            sql += `;
`;
        }
    }

    sql += `
COMMIT;
`;

    return sql;
}