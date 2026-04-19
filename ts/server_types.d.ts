
// This file was auto-generated based on the code under ./include/op/.

export type ServerErrorMap =
{
    [`/json/login.php`]: "internal" | "syntax/missing-param" | "login/confirm-password-not-matching" | "login/email/too-long" | "login/email/invalid" | "login/username/too-long" | "login/username/invalid" | "login/duplicate" | "login/identifier/too-long" | "login/not-found",
    [`/json/search_media.php`]: "internal",
    [`/json/account_info.php`]: "internal",
    [`/json/media_info.php`]: "internal" | "syntax/missing-param" | "media/not-found",
    [`/json/logout.php`]: "internal",
    [`/json/random_media.php`]: "internal",
    [`/json/post_review.php`]: "internal" | "login/not-logged-in" | "syntax/missing-param" | "review/rating-out-of-range",
    [`/json/is_favorite.php`]: "internal" | "login/not-logged-in" | "syntax/missing-param",
    [`/json/set_favorite.php`]: "internal" | "login/not-logged-in" | "syntax/missing-param",
};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];

export type ServerJSONShapeMap =
{
    [`/json/login.php`]:
        | { "is_logged_in": true, "id": number, "username": string, "email": string }
        | { "error": ServerErrorMap[`/json/login.php`], "message": string },
    [`/json/search_media.php`]:
        | { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true, "minutes": number, "rating": null | number, "rating_count": number, "review_count": number }[]
        | { "error": ServerErrorMap[`/json/search_media.php`], "message": string },
    [`/json/account_info.php`]:
        | { "is_logged_in": true, "id": number, "username": string, "email": string } | { "is_logged_in": false, "id": null, "username": null, "email": null }
        | { "error": ServerErrorMap[`/json/account_info.php`], "message": string },
    [`/json/media_info.php`]:
        | { "media": { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true, "minutes": number, "rating": null | number, "rating_count": number, "review_count": number }, "genres": { "media_id": number, "name": string }[], "people": { "person_id": number, "full_name": string, "description": string, "media_id": number, "job": string }[], "reviews": { "account_id": number, "account_username": string, "media_id": number, "rating": number, "review": string }[] }
        | { "error": ServerErrorMap[`/json/media_info.php`], "message": string },
    [`/json/logout.php`]:
        | { "is_logged_in": false, "was_logged_in": boolean }
        | { "error": ServerErrorMap[`/json/logout.php`], "message": string },
    [`/json/random_media.php`]:
        | { "id": number, "title": string, "description": string, "cover_image_id": number, "release_date": true, "minutes": number, "rating": null | number, "rating_count": number, "review_count": number }[]
        | { "error": ServerErrorMap[`/json/random_media.php`], "message": string },
    [`/json/post_review.php`]:
        | { "posted": true, "replaced": boolean }
        | { "error": ServerErrorMap[`/json/post_review.php`], "message": string },
    [`/json/is_favorite.php`]:
        | { "is_favorite": boolean }
        | { "error": ServerErrorMap[`/json/is_favorite.php`], "message": string },
    [`/json/set_favorite.php`]:
        | { "is_favorite": boolean, "was_favorite": boolean }
        | { "error": ServerErrorMap[`/json/set_favorite.php`], "message": string },
};
