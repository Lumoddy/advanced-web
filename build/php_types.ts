
export type PHPTypeLexerToken =
    | { type: "word", value: string }
    | { type: "literal", value: string }
    | { type: "?", value: "?" }
    | { type: "\\", value: "\\" }
    | { type: "[", value: "[" }
    | { type: "]", value: "]" }
    | { type: "{", value: "{" }
    | { type: "}", value: "}" }
    | { type: "<", value: "<" }
    | { type: ">", value: ">" }
    | { type: "|", value: "|" }
    | { type: ":", value: ":" }
    | { type: ",", value: "," };

export function* phpTypeLexer(code: string): Generator<PHPTypeLexerToken, undefined>
{
    let index = 0;

    const whitespacePattern = /\s+/gys;
    const symbolPattern = /[\\?\[\]{}<>|:,]/gys;
    const literalPattern = /"(?:[^"\\]|\\.)*"|'(?:[^"\\]|\\.)*'|`(?:[^"\\]|\\.)*`|-?\s*\d|true|false|null/gys;
    const wordPattern = /[^\W\d]\w*/gys;

    while (true)
    {
        const start = index;

        whitespacePattern.lastIndex = index;
        if (whitespacePattern.test(code))
        {
            index = whitespacePattern.lastIndex;
            continue;
        }

        symbolPattern.lastIndex = index;
        if (symbolPattern.test(code))
        {
            index = symbolPattern.lastIndex;
            const type = code.substring(start, index) as any;
            yield { type, value: type };
            continue;
        }

        literalPattern.lastIndex = index;
        if (literalPattern.test(code))
        {
            index = literalPattern.lastIndex;
            yield { type: "literal", value: code.substring(start, index) as any };
            continue;
        }

        wordPattern.lastIndex = index;
        if (wordPattern.test(code))
        {
            index = wordPattern.lastIndex;
            yield { type: "word", value: code.substring(start, index) as any };
            continue;
        }

        return;
    }
}

export function parsePrefixPHPType(phpType: string | Iterable<PHPTypeLexerToken>): string | null
{
    if (typeof phpType === "string")
        phpType = phpTypeLexer(phpType);

    const iterator = phpType[Symbol.iterator]();

    let next, type, value;
    next = iterator.next();
    if (next.done)
        return null;

    ({type, value} = next.value);

    const result = new Set<string>();

    if (type === "?")
    {
        next = iterator.next();
        if (next.done)
            return null;

        ({type, value} = next.value);

        result.add("null");
    }

    let current: string;

    function finalize(result: Set<string>): string
    {
        let buffer = null;
        for (const entry of result)
        {
            if (buffer === null)
                buffer = entry;
            else
            {
                buffer += " | ";
                buffer += entry;
            }
        }

        return buffer ?? "never";
    }

    while (true)
    {
        if (type === "\\")
        {
            while (true)
            {
                next = iterator.next();
                if (next.done)
                    return finalize(result);

                ({type, value} = next.value);

                if (type !== "word")
                    break;

                next = iterator.next();
                if (next.done)
                    return finalize(result);

                ({type, value} = next.value);

                if (type !== "\\")
                    break;
            }

            current = "unknown";
        }
        else if (type === "literal")
        {
            current = value;

            next = iterator.next();
            if (next.done)
                return finalize(result);

            ({type, value} = next.value);
        }
        else if (type === "word")
        {
            if (value === "int" || value === "float")
            {
                current = "number";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);
            }
            else if (value === "string")
            {
                current = "string";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);
            }
            else if (value === "bool")
            {
                current = "boolean";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);
            }
            else if (value === "DateTime")
            {
                current = "true";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);
            }
            else if (value === "array")
            {
                current = "object";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);

                if (type === "{")
                {
                    const fields = new Map<string, string>();

                    next = iterator.next();
                    if (next.done)
                        return null;

                    ({type, value} = next.value);

                    while (true)
                    {
                        if (type !== "word")
                            break;

                        const fieldKey = String(value);

                        next = iterator.next();
                        if (next.done)
                            return null;

                        ({type, value} = next.value);

                        if (type === "}")
                        {
                            fields.set(fieldKey, "unknown");
                            break;
                        }
                        else if (type !== ":")
                            return null;

                        const fieldType = parsePrefixPHPType(
                        {
                            [Symbol.iterator]: () => (
                            {
                                next()
                                {
                                    next = iterator.next();
                                    if (!next.done)
                                        ({type, value} = next.value);

                                    return next;
                                }
                            }),
                        });

                        fields.set(fieldKey, fields.has(fieldKey) ? "unknown" : String(fieldType));

                        if (type as any !== ",")
                            break;

                        next = iterator.next();
                        if (next.done)
                            return finalize(result.add(current));

                        ({type, value} = next.value);
                    }

                    if (type !== "}")
                        return null;

                    if (fields.size === 0)
                    {
                        current = "[]";
                    }
                    else
                    {
                        current = "{ ";

                        let firstField = true;
                        for (const [key, value] of fields)
                        {
                            if (firstField)
                                firstField = false;
                            else
                                current += ", ";

                            current += JSON.stringify(key);
                            current += ": ";
                            current += value;
                        }

                        current += " }";
                    }

                    next = iterator.next();
                    if (next.done)
                        return finalize(result.add(current));

                    ({type, value} = next.value);
                }
                else if (type === "<")
                {
                    const fieldKey = parsePrefixPHPType(
                    {
                        [Symbol.iterator]: () => (
                        {
                            next()
                            {
                                next = iterator.next();
                                if (!next.done)
                                    ({type, value} = next.value);

                                return next;
                            }
                        }),
                    });

                    if (type as any !== ",")
                        return null;

                    const fieldType = parsePrefixPHPType(
                    {
                        [Symbol.iterator]: () => (
                        {
                            next()
                            {
                                next = iterator.next();
                                if (!next.done)
                                    ({type, value} = next.value);

                                return next;
                            }
                        }),
                    });

                    if (type as any !== ">")
                        return null;

                    current = "Record<";
                    current += fieldKey;
                    current += ", ";
                    current += fieldType;
                    current += ">";

                    next = iterator.next();
                    if (next.done)
                        return finalize(result.add(current));

                    ({type, value} = next.value);
                }
            }
            else
                return null;
        }
        else
            return null;

        if (type === "[")
        {
            while (true)
            {
                next = iterator.next();
                if (next.done)
                    return null;

                ({type, value} = next.value);

                if (type !== "]")
                    return null;

                current += "[]";

                next = iterator.next();
                if (next.done)
                    return finalize(result.add(current));

                ({type, value} = next.value);

                if (type !== "[")
                    break;
            }
        }

        result.add(current);

        if (type !== "|")
            return finalize(result);

        next = iterator.next();
        if (next.done)
            return null;

        ({type, value} = next.value);

        continue;
    }
}