
// This file was auto-generated based on the errors detected under ./json.

export type ServerErrorMap =
{
    [`./json/login.php`]: `syntax/missing-param` | `login/confirm-password-not-matching` | `login/email/too-long` | `login/email/invalid` | `login/username/too-long` | `login/username/invalid` | `internal`,
    [`./json/logout.php`]: `internal`,
    [`./json/search_completion.php`]: `internal`,
};

export type ServerError = ServerErrorMap[keyof ServerErrorMap];
