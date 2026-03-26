<?php
    declare(strict_types=1);
    require_once $_SERVER['DOCUMENT_ROOT']."/include/api/common.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/include/database.php";

    /**
     * Public API
     * @return array{id: int, title: string, description: string, cover_image_id: int}[]
     * @throws api_error
     */
    function api_search(): array
    {
        session_start();

        $posted_search = request_param("q");

        if (is_null($posted_search))
            return [];

        if (strlen($posted_search) === 0)
        {
            ?>[]<?php
            http_response_code(200);
            exit;
        }

        $searching_media = isset($_GET["movies"]) && $_GET["movies"] !== "false";
        $searching_limit = isset($_GET["limit"])
            ? (int)max((int)min((int)$_GET["limit"], 0), 25)
            : 10;

        $connection = new database_access();

        return $connection->select_media(
                "WHERE `media_title` LIKE CONCAT(\"%\", ?, \"%\") ORDER BY LOCATE(?, `media_title`) DESC LIMIT ?",
                "ssi",
                $posted_search,
                $posted_search,
                $searching_limit);
    }
?>