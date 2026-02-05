<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/i/accounts.php";
    header("Content-Type", "application/json");
    $new = isset($_POST["new"]);
    session_start();

    try
    {
        if ($new)
        {
            if (!is_string($_POST["email"]))
            {
                http_response_code(400);
                die("Email must be a string");
            }
            else if (!is_string($_POST["password"]))
            {
                http_response_code(400);
                die("Password must be a string");
            }
            else if (is_string($_POST["confirm-password"])
                && $_POST["password"] !== $_POST["confirm-password"])
            {
                http_response_code(400);
                die("Passwords do not match");
            }
            else
            {
                try
                {
                    $id = post_new_account(null, $_POST["email"], $_POST["password"]);
                    $json = json_encode(["id" => $id]);
                }
                catch (mysqli_sql_exception $e)
                {
                    $json = json_encode(
                    [
                        "error" => "login/already-exists",
                        "message" => "An account with that email already exists.",
                    ]);
                }
            }
        }
        else
        {
            if (!is_string($_POST["email"]))
            {
                http_response_code(400);
                die("Email must be a string");
            }
            else if (!is_string($_POST["password"]))
            {
                http_response_code(400);
                die("Password must be a string");
            }

            $id = fetch_login_account_id(null, $_POST["email"], $_POST["password"]);
            if ($id === null)
            {
                $json = json_encode(
                [
                    "error" => "login/not-exists",
                    "message" => "No account with that email and password exists.",
                ]);
            }
            else
                $json = json_encode(["id" => $id]);
        }
    }
    catch(Throwable $e)
    {
        http_response_code(500);
        die($e);
    }

    if ($json === false)
    {
        http_response_code(500);
        die("JSON encoding failed");
    }

    echo $json;
?>