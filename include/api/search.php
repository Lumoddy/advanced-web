<?php
    declare(strict_types=1);
    require_once __DIR__."/common.php";
    require_once __DIR__."/../database.php";

    /**
     * Public API
     * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}[]
     * @throws api_error
     */
    function api_search_media(): array
    {
        $posted_search = request_param("q") ?? "";

        $posted_limit = request_param_int("limit");
        if ($posted_limit === null || $posted_limit === false)
            $posted_limit = 25;

        $posted_limit = (int)max((int)min($posted_limit, 0), 100);

        $connection = new database_access();

        try
        {
            return $connection->select_media(
                "WHERE `media_title` LIKE CONCAT(\"%\", ?, \"%\") ORDER BY LOCATE(?, `media_title`) DESC LIMIT ?",
                "ssi",
                $posted_search,
                $posted_search,
                $posted_limit);
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return ?array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}
     * @throws api_error
     */
    function api_media_info(): ?array
    {
        $posted_id = request_param_int("id");

        if ($posted_id === null || $posted_id === false)
            return null;

        $connection = new database_access();

        try { return $connection->select_media_with_id($posted_id); }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}[]
     * @throws api_error
     */
    function api_random_media(): array
    {
        $posted_limit = request_param_int("limit");
        if ($posted_limit === null || $posted_limit === false)
            $posted_limit = 25;

        $posted_limit = (int)max((int)min($posted_limit, 0), 100);

        $connection = new database_access();

        try
        {
            return $connection->select_media(
                "ORDER BY RAND() LIMIT ?",
                "i",
                $posted_limit);
        }
        finally { $connection->close(); }
    }
?>