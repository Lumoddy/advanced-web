<?php
    try
    {
        require_once "../include/mysqli_errors.php";
        header("Content-Type", "application/json");

        session_start();

        unset($_SESSION["account-id"]);
        unset($_SESSION["account-email"]);
        unset($_SESSION["account-username"]);

        ?>{}<?php
        http_response_code(200);
        exit;
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