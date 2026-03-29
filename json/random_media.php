<?php
    // This file was auto-generated based on ./include/api/search.php.

    declare(strict_types=1);
    require_once __DIR__."/../include/common.php";
    require_once __DIR__."/../include/api/search.php";

    header("Content-Type: application/json");

    try { echo json_encode(api_random_media()); }
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