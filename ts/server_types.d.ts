
// This file was auto-generated based on the code under ./include/op/.

export type ServerErrorMap =
{
    [`/json/login.php`]: "internal" | "syntax/missing-param" | "login/confirm-password-not-matching" | "login/email/too-long" | "login/email/invalid" | "login/username/too-long" | "login/username/invalid" | "login/duplicate" | "login/identifier/too-long" | "login/not-found",
    [`/json/search.php`]: "internal",
    [`/json/logout.php`]: "internal",
};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];

export type ServerJSONShapeMap =
{
    [`/json/login.php`]:
        | { "id": number, "username": string, "email": string }
        | { "error": ServerErrorMap[`/json/login.php`], "message": string },
    [`/json/search.php`]:
        | { "id": number, "title": string, "description": string, "cover_image_id": number }
        | { "error": ServerErrorMap[`/json/search.php`], "message": string },
    [`/json/logout.php`]:
        | {}
        | { "error": ServerErrorMap[`/json/logout.php`], "message": string },
};
