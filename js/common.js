
/**
 * Plays the shine effect animation on an element given than it has the class
 * `manual-shine`.
@param {Animatable} element
@param {number} duration
@returns {Animation}
*/ export function manualShine(element, duration = 500)
{
    return element.animate(
        [{ "--shine": 0 }, { "--shine": 1 }],
        {
            duration,
            iterations: 1,
        });
}

/**
@param {
    | HTMLFormElement
    | { "email": string, "password": string }} data
@returns {
    Promise<
        | { "id": string }
        | {
            "error": "login/not-exists",
            message: string,
        }>
}
*/ export async function fetchLogin(data)
{
    let body;
    if (data instanceof HTMLFormElement)
        body = new FormData(data);
    else
    {
        body = new FormData();
        body.append("email", data.email);
        body.append("password", data.password);
    }

    const response = await fetch("/json/login.php", { body, method: "POST" });

    if (!response.ok)
        throw new Error(await response.text());

    const result = await response.json();

    if (typeof result === "object" && result !== null
        && (
            typeof result.id === "string"
            || (
                result.error === "login/not-exists"
                && typeof result.message === "string")))
        return result;

    throw new SyntaxError(`Malformed fetch response.`);
}

/**
@param {
    | HTMLFormElement
    | { "email": string, "password": string, "confirmPassword"?: string }} data
@returns {
    Promise<
        | { id: string }
        | {
            error: "login/already-exists",
            message: string,
        }>
}
*/ export async function postNewAccount(data)
{
    let body;
    if (data instanceof HTMLFormElement)
        body = new FormData(data);
    else
    {
        body = new FormData();
        body.append("email", data.email);
        body.append("password", data.password);
        if (data.confirmPassword !== undefined)
            body.append("confirm-password", data.confirmPassword);
    }

    const response = await fetch("/json/login.php", { body, method: "POST" });

    if (!response.ok)
        throw new Error(await response.text());

    const result = await response.json();

    if (typeof result === "object" && result !== null
        && (
            typeof result.id === "string"
            || (
                result.error === "login/already-exists"
                && typeof result.message === "string")))
        return result;

    throw new SyntaxError(`Malformed fetch response.`);
}