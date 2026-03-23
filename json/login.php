<?php
    try
    {
        require_once "../include/mysqli_errors.php";
        header("Content-Type", "application/json");

        session_start();

        if (isset($_GET["new"]) && $_GET["new"] !== "false")
        {
            $posted_email = isset($_POST["email"]) ? $_POST["email"] : null;
            $posted_password = isset($_POST["password"]) ? $_POST["password"] : null;
            $posted_username = isset($_POST["username"]) ? $_POST["username"] : null;
            $posted_confirm_password = isset($_POST["confirm-password"]) ? $_POST["confirm-password"] : null;

            if (!is_string($posted_email))
            {
                ?>{<?php
                    ?>"error":"syntax/missing-param",<?php
                    ?>"message":"Missing field 'email'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (!is_string($posted_password))
            {
                ?>{<?php
                    ?>"error":"syntax/missing-param",<?php
                    ?>"message":"Missing field 'password'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (!is_string($posted_username))
            {
                ?>{<?php
                    ?>"error":"syntax/missing-param",<?php
                    ?>"message":"Missing field 'username'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (is_string($posted_confirm_password)
                && $posted_password !== $posted_confirm_password)
            {
                ?>{<?php
                    ?>"error":"login/confirm-password-not-matching",<?php
                    ?>"message":"Missing field 'password'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (strlen($posted_email) > 320)
            {
                ?>{<?php
                    ?>"error":"login/email/too-long",<?php
                    ?>"message":"The provided email is too long."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (!filter_var($posted_email, FILTER_VALIDATE_EMAIL))
            {
                ?>{<?php
                    ?>"error":"login/email/invalid",<?php
                    ?>"message":"The provided email is invalid."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (strlen($posted_username) > 31)
            {
                ?>{<?php
                    ?>"error":"login/username/too-long",<?php
                    ?>"message":"The provided username is too long."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (filter_var($posted_username, FILTER_VALIDATE_EMAIL))
            {
                ?>{<?php
                    ?>"error":"login/username/invalid",<?php
                    ?>"message":"The provided username is invalid."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }

            $connection = new database_access();

            try
            {
                $account = $connection->insert_account_with_login(
                    $posted_email,
                    $posted_password,
                    $posted_username);

                $_SESSION["account-id"] = $account["id"];
                $_SESSION["account-email"] = $account["email"];
                $_SESSION["account-username"] = $account["username"];

                ?>{<?php
                    ?>"id":"<?php echo $account["id"] ?>",<?php
                    ?>"username":"<?php echo $account["username"] ?>",<?php
                    ?>"email":"<?php echo $account["email"] ?>",<?php
                ?>}<?php
                http_response_code(200);
                exit;
            }
            catch (mysqli_sql_exception $e)
            {
                switch ($e->getCode())
                {
                    case mysqli_error_code::ER_DUP_ENTRY;
                    {
                        ?>{<?php
                            ?>"error":"login/duplicate<?php
                            ?>"message":"The provided email has already been used to create an account."<?php
                        ?>}<?php
                        http_response_code(400);
                        exit;
                    }
                    default:
                        throw $e;
                }
            }
        }
        else
        {
            $posted_identifier = $_POST["identifier"] ?? $_POST["email"] ?? $_POST["username"];
            $posted_password = $_POST["password"];

            if (!is_string($posted_identifier))
            {
                ?>{<?php
                    ?>"error":"syntax/missing-param",<?php
                    ?>"message":"Missing field 'identifier'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (!is_string($posted_password))
            {
                ?>{<?php
                    ?>"error":"syntax/missing-param",<?php
                    ?>"message":"Missing field 'password'."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (strlen($posted_email) > 320)
            {
                ?>{<?php
                    ?>"error":"login/email/too-long",<?php
                    ?>"message":"The provided email is too long."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else if (strlen($posted_username) > 31)
            {
                ?>{<?php
                    ?>"error":"login/username/too-long",<?php
                    ?>"message":"The provided username is too long."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }

            $connection = new database_access();
            $account = $connection->get_account_with_login(
                $posted_identifier,
                $posted_password);

            if ($account === null)
            {
                ?>{<?php
                    ?>"error":"login/not-found<?php
                    ?>"message":"No account was found with that email or password."<?php
                ?>}<?php
                http_response_code(400);
                exit;
            }
            else
            {
                $_SESSION["account-id"] = $account["id"];
                $_SESSION["account-email"] = $account["email"];
                $_SESSION["account-username"] = $account["username"];

                ?>{<?php
                    ?>"id":"<?php echo $account["id"] ?>",<?php
                    ?>"username":"<?php echo $account["username"] ?>",<?php
                    ?>"email":"<?php echo $account["email"] ?>",<?php
                ?>}<?php
                http_response_code(200);
                exit;
            }
        }
    }
    catch (Throwable $e)
    {
        ?>{<?php
            ?>"error":"internal",<?php
            ?>"message":"An unknown internal error occurred."<?php
        ?>}<?php
        http_response_code(500);
        exit;
    }
?>