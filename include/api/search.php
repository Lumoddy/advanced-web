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
     * @return ?array{
     *     media: array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime},
     *     cast: array{id: int, full_name: string, description: string}[],
     *     directors: array{id: int, full_name: string, description: string}[],
     *     writers: array{id: int, full_name: string, description: string}[]}
     * @throws api_error
     */
    function api_media_info(): ?array
    {
        $posted_id = request_param_int("id");

        if ($posted_id === null || $posted_id === false)
            return null;

        $connection = new database_access();

        try
        {
            /*
             * Since the database is local the delay is minimal though this
             * solution is horrible either way.
             */

            $cast_job = $connection->select_person_in_media_job_with_name("cast")["id"];
            $director_job = $connection->select_person_in_media_job_with_name("director")["id"];
            $writer_job = $connection->select_person_in_media_job_with_name("writer")["id"];

            return
            [
                "media" => $connection->select_media_with_id($posted_id),
                "cast" => $connection->select_people(
                    "INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = ?",
                    "ii",
                    $posted_id,
                    $cast_job),
                "directors" => $connection->select_people(
                    "INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = ?",
                    "ii",
                    $posted_id,
                    $director_job),
                "writers" => $connection->select_people(
                    "INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = ?",
                    "ii",
                    $posted_id,
                    $writer_job),
            ];
        }
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