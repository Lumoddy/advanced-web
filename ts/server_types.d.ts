
// This file was auto-generated based on the code under ./include/op/.

export type ServerErrorMap =
{
    [`/json/login.php`]: "internal" | "syntax/missing-param" | "login/confirm-password-not-matching" | "login/email/too-long" | "login/email/invalid" | "login/username/too-long" | "login/username/invalid" | "login/duplicate" | "login/identifier/too-long" | "login/not-found",
    [`/json/search_media.php`]: "internal",
    [`/json/account_info.php`]: "internal",
    [`/json/media_info.php`]: "internal",
    [`/json/logout.php`]: "internal",
    [`/json/random_media.php`]: "internal",
};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];

export type ServerJSONShapeMap =
{
    [`/json/login.php`]:
        | { "is_logged_in": true, "id": number, "username": string, "email": string }
        | { "error": ServerErrorMap[`/json/login.php`], "message": string },
    [`/json/search_media.php`]:
        | { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true }[]
        | { "error": ServerErrorMap[`/json/search_media.php`], "message": string },
    [`/json/account_info.php`]:
        | { "is_logged_in": true, "id": number, "username": string, "email": string } | { "is_logged_in": false, "id": null, "username": null, "email": null }
        | { "error": ServerErrorMap[`/json/account_info.php`], "message": string },
    [`/json/media_info.php`]:
        | null | { "media": { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true }, "genres": { "id": number, "name": string }[], "cast": { "id": number, "full_name": string, "description": string }[], "directors": { "id": number, "full_name": string, "description": string }[], "writers": { "id": number, "full_name": string, "description": string }[] }
        | { "error": ServerErrorMap[`/json/media_info.php`], "message": string },
    [`/json/logout.php`]:
        | { "is_logged_in": false, "was_logged_in": boolean }
        | { "error": ServerErrorMap[`/json/logout.php`], "message": string },
    [`/json/random_media.php`]:
        | { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true }[]
        | { "error": ServerErrorMap[`/json/random_media.php`], "message": string },
};
