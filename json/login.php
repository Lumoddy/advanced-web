<?php
    // This file was auto-generated based on ./include/api/accounts.php.

    declare(strict_types=1);
    require_once $_SERVER["DOCUMENT_ROOT"]."/include/common.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/include/api/accounts.php";

    header("Content-Type: application/json");

    try { echo json_encode(api_login()); }
    catch (api_error $e)
    {
        echo json_encode($e->as_array());
        http_response_code((int)$e->getCode());
    }
    catch (Throwable $e)
    {
        echo json_encode(
        [
            "error" => "internal",
            "message" => "An unknown internal error occurred.",
        ]);
        http_response_code(500);

        throw $e;
    }
?>