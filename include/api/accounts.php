<?php
    declare(strict_types=1);
    require_once __DIR__."/common.php";
    require_once __DIR__."/../database.php";

    /**
     * Public API
     * @return array{is_logged_in: true, id: int, username: string, email: string}
     * @throws api_error
     */
    function api_login(): array
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        if (request_param_bool("new") ?? false)
        {
            $posted_email = posted_param("email");
            $posted_password = posted_param("password");
            $posted_username = posted_param("username");
            $posted_confirm_password = posted_param("confirm-password");

            if (is_null($posted_email))
                throw new api_error(
                    "syntax/missing-param",
                    "Missing field 'email'.");
            else if (is_null($posted_password))
                throw new api_error(
                    "syntax/missing-param",
                    "Missing field 'password'.");
            else if (is_null($posted_username))
                throw new api_error(
                    "syntax/missing-param",
                    "Missing field 'username'.");
            else if (!is_null($posted_confirm_password)
                && $posted_password !== $posted_confirm_password)
                throw new api_error(
                    "login/confirm-password-not-matching",
                    "Passwords do not match.");
            else if (strlen($posted_email) > 320)
                throw new api_error(
                    "login/email/too-long",
                    "The provided email is too long.");
            else if (!filter_var($posted_email, FILTER_VALIDATE_EMAIL))
                throw new api_error(
                    "login/email/invalid",
                    "The provided email is invalid.");
            else if (strlen($posted_username) > 31)
                throw new api_error(
                    "login/username/too-long",
                    "The provided username is too long.");
            else if (filter_var($posted_username, FILTER_VALIDATE_EMAIL))
                throw new api_error(
                    "login/username/invalid",
                    "The provided username is invalid.");

            $connection = new database_access();

            try
            {
                try
                {
                    $account_id = $connection->insert_account_with_unique_id(
                        $posted_username,
                        $posted_email,
                        password_hash($posted_password, PASSWORD_DEFAULT));
                }
                catch (mysqli_sql_exception $e)
                {
                    switch ($e->getCode())
                    {
                        case mysqli_error_code::ER_DUP_ENTRY;
                            throw new api_error(
                                "login/duplicate",
                                "The provided email has already been used to create an account.");
                        default:
                            throw $e;
                    }
                }

                $_SESSION["account_id"] = $account_id;
                $_SESSION["account_username"] = $posted_username;
                $_SESSION["account_email"] = $posted_email;

                return
                [
                    "is_logged_in" => true,
                    "id" => $account_id,
                    "username" => $posted_username,
                    "email" => $posted_email,
                ];
            }
            finally { $connection->close(); }
        }
        else
        {
            $posted_identifier = posted_param("identifier")
                ?? posted_param("email")
                ?? posted_param("username");
            $posted_password = posted_param("password");

            if (is_null($posted_identifier))
                throw new api_error(
                    "syntax/missing-param",
                    "Missing field 'identifier'.");
            else if (is_null($posted_password))
                throw new api_error(
                    "syntax/missing-param",
                    "Missing field 'password'.");
            else if (strlen($posted_identifier) > 320)
                throw new api_error(
                    "login/identifier/too-long",
                    "The provided identifier is too long.");

            $connection = new database_access();

            try
            {
                $account = $connection->select_account_with_email($posted_identifier);

                if (!is_null($account)
                    && password_verify($posted_password, $account["password_hash"]))
                {
                    $matching_account = $account;
                }

                if (!isset($matching_account))
                {
                    foreach ($connection->select_accounts_with_username($posted_identifier) as $account)
                    {
                        if (password_verify($posted_password, $account["password_hash"]))
                        {
                            $matching_account = $account;
                            break;
                        }
                    }
                }

                if (!isset($matching_account))
                    throw new api_error(
                        "login/not-found",
                        "No account was found with that email or password.");

                $_SESSION["account_id"] = $matching_account["id"];
                $_SESSION["account_username"] = $matching_account["username"];
                $_SESSION["account_email"] = $matching_account["email"];

                return
                [
                    "is_logged_in" => true,
                    "id" => $matching_account["id"],
                    "username" => $matching_account["username"],
                    "email" => $matching_account["email"],
                ];

                $_SESSION["account_id"] = $account_id;
                $_SESSION["account_username"] = $posted_username;
                $_SESSION["account_email"] = $posted_email;

                return
                [
                    "is_logged_in" => true,
                    "id" => $account_id,
                    "username" => $posted_username,
                    "email" => $posted_email,
                ];
            }
            finally { $connection->close(); }
        }
    }

    /**
     * Public API
     * @return array{is_logged_in: true, id: int, username: string, email: string}|array{is_logged_in: false, id: null, username: null, email: null}
     * @throws api_error
     */
    function api_account_info(): array
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        return isset($_SESSION["account_id"])
            ? [
                "is_logged_in" => true,
                "id" => (int)$_SESSION["account_id"],
                "username" => (string)$_SESSION["account_username"],
                "email" => (string)$_SESSION["account_email"],
            ]
            : [
                "is_logged_in" => false,
                "id" => null,
                "username" => null,
                "email" => null,
            ];
    }

    /**
     * Public API
     * @return array{is_logged_in: false, was_logged_in: bool}
     * @throws api_error
     */
    function api_logout(): array
    {
        session_start();

        $was_logged_in = isset($_SESSION["account_id"]);

        unset($_SESSION["account_id"]);
        unset($_SESSION["account_email"]);
        unset($_SESSION["account_username"]);

        return [ "is_logged_in" => false, "was_logged_in" => $was_logged_in ];
    }

    /**
     * Public API
     * @return array{posted: true, replaced: bool}
     * @throws api_error
     */
    function api_post_review(): array
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        $account_id = isset($_SESSION["account_id"]) ? (int)$_SESSION["account_id"] : null;

        if (!is_int($account_id))
            throw new api_error(
                "login/not-logged-in",
                "You must be logged in before posting a review.");

        $posted_id = request_param_int("id");

        if (!is_int($posted_id))
            throw new api_error(
                "syntax/missing-param",
                "Missing field 'id'.");

        $posted_rating = posted_param_int("rating");

        if (!is_int($posted_rating))
            throw new api_error(
                "syntax/missing-param",
                "Missing field 'rating'.");
        else if ($posted_rating < 1 || $posted_rating > 5)
            throw new api_error(
                "review/rating-out-of-range",
                "Rating must be between 1 and 5.");

        $posted_review = posted_param("review");

        if ($posted_review !== null && strlen($posted_review) === 0)
            $posted_review = null;

        $connection = new database_access();

        try
        {
            $connection->delete_review_with_account_id_and_media_id(
                $account_id,
                $posted_id);

            $replaced = $connection->delete_rating_with_account_id_and_media_id(
                $account_id,
                $posted_id);

            $connection->insert_rating_account_id_and_media_id_and_rating(
                $account_id,
                $posted_id,
                $posted_rating);

            if (is_string($posted_review))
            {
                $connection->insert_review_account_id_and_media_id_and_content(
                    $account_id,
                    $posted_id,
                    $posted_review);
            }

            return [ "posted" => true, "replaced" => $replaced ];
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return array{is_favorite: bool}
     * @throws api_error
     */
    function api_is_favorite(): array
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        $account_id = isset($_SESSION["account_id"]) ? (int)$_SESSION["account_id"] : null;

        if (!is_int($account_id))
            throw new api_error(
                "login/not-logged-in",
                "You must be logged in before posting a review.");

        $posted_id = request_param_int("id");

        if (!is_int($posted_id))
            throw new api_error(
                "syntax/missing-param",
                "Missing field 'id'.");

        $connection = new database_access();

        try
        {
            $is_favorite = !is_null($connection->select_favorite_of_media_with_account_id_and_media_id(
                $account_id,
                $posted_id));

            return [ "is_favorite" => $is_favorite ];
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return array{is_favorite: bool, was_favorite: bool}
     * @throws api_error
     */
    function api_set_favorite(): array
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        $account_id = isset($_SESSION["account_id"]) ? (int)$_SESSION["account_id"] : null;

        if (!is_int($account_id))
            throw new api_error(
                "login/not-logged-in",
                "You must be logged in before posting a review.");

        $posted_id = request_param_int("id");

        if (!is_int($posted_id))
            throw new api_error(
                "syntax/missing-param",
                "Missing field 'id'.");

        $connection = new database_access();

        try
        {
            $was_favorite = !is_null($connection->select_favorite_of_media_with_account_id_and_media_id(
                $account_id,
                $posted_id));

            $is_favorite = request_param_bool("set") ?? true;

            if ($is_favorite !== $was_favorite)
            {
                if ($is_favorite)
                {
                    $connection->insert_favorite_of_media_account_id_and_media_id(
                        $account_id,
                        $posted_id);
                }
                else
                {
                    $connection->delete_favorite_of_media_with_account_id_and_media_id(
                        $account_id,
                        $posted_id);
                }
            }

            return
            [
                "is_favorite" => $is_favorite,
                "was_favorite" => $was_favorite,
            ];
        }
        finally { $connection->close(); }
    }
?>