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
        $posted_search_name = request_param("name");
        $posted_search_with_person = request_param_int("with_person");
        $posted_search_through = request_param("through");
        $posted_limit = request_param_int("limit");

        if (!is_int($posted_limit))
            $posted_limit = 50;
        if ($posted_limit < 0)
            $posted_limit = 0;
        if ($posted_limit > 50)
            $posted_limit = 50;

        $connection = new database_access();

        $genres = $connection->select_genres();

        $no_genres = true;
        foreach ($genres as $genre)
        {
            if (request_param_bool($genre["name"]) === null)
                continue;

            $no_genres = false;
            break;
        }

        if (!$no_genres)
        {
            $no_genres = true;
            foreach ($genres as $genre)
            {
                if (request_param_bool($genre["name"]) === true)
                    continue;

                $no_genres = false;
                break;
            }
        }

        $conditions = [];
        $order_bys = [];
        $bind_types = "";
        $bind = [];

        if (is_string($posted_search_name))
        {
            array_push($conditions, "`media`.`media_title` LIKE CONCAT(\"%\", ?, \"%\")");
            $bind_types .= "s";
            array_push($bind, $posted_search_name);
        }

        if (is_int($posted_search_with_person))
        {
            if (is_string($posted_search_through))
            {
                array_push($conditions, "EXISTS(SELECT NULL FROM `people_in_media` INNER JOIN `person_in_media_jobs` ON `person_in_media_jobs`.`person_in_media_job_id` = `people_in_media`.`person_in_media_job` AND `person_in_media_jobs`.`person_in_media_job` = ? WHERE `people_in_media`.`media_id` = `media`.`media_id` AND `people_in_media`.`person_id` = ?)");
                $bind_types .= "si";
                array_push($bind, $posted_search_through, $posted_search_with_person);
            }
            else
            {
                array_push($conditions, "EXISTS(SELECT NULL FROM `people_in_media` WHERE `people_in_media`.`media_id` = `media`.`media_id` AND `people_in_media`.`person_id` = ?)");
                $bind_types .= "i";
                array_push($bind, $posted_search_with_person);
            }
        }

        if (!$no_genres)
        {
            $condition = "EXISTS(SELECT NULL FROM `genre_of_media` WHERE `genre_of_media`.`media_id` = `media`.`media_id` AND `genre_of_media`.`genre` IN (";

            $first = true;
            foreach ($genres as $genre)
            {
                if (!(request_param_bool($genre["name"]) ?? false))
                    continue;

                if ($first)
                    $first = false;
                else
                    $condition .= ", ";

                $condition .= "?";
                $bind_types .= "i";
                array_push($bind, $genre["id"]);
            }

            $condition .= "))";

            array_push($conditions, $condition);
        }

        if (is_string($posted_search_name))
        {
            array_push($order_bys, "LOCATE(?, `media`.`media_title`)");
            $bind_types .= "s";
            array_push($bind, $posted_search_name);
        }

        $bind_types .= "i";
        array_push($bind, $posted_limit);

        try
        {
            $sql = "";

            $first = true;
            foreach ($conditions as $condition)
            {
                if ($first)
                {
                    $sql .= " WHERE ";
                    $first = false;
                }
                else
                {
                    $sql .= " AND ";
                }

                $sql .= $condition;
            }

            $first = true;
            foreach ($order_bys as $order_by)
            {
                if ($first)
                {
                    $sql .= " ORDER BY ";
                    $first = false;
                }
                else
                {
                    $sql .= " AND ";
                }

                $sql .= $order_by;
            }

            $sql .= " LIMIT ?";

            return $connection->select_media($sql, $bind_types, ...$bind);
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return ?array{media: array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}, genres: array{id: int, name: string}[], cast: array{id: int, full_name: string, description: string}[], directors: array{id: int, full_name: string, description: string}[], writers: array{id: int, full_name: string, description: string}[]}
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

            return
            [
                "media" => $connection->select_media_with_id($posted_id),
                "genres" => $connection->select_genres(
                    "INNER JOIN `genre_of_media` WHERE `genre_of_media`.`media_id` = ? AND `genre_of_media`.`genre` = `genres`.`genre_id`",
                    "i",
                    $posted_id),
                "cast" => $connection->select_people(
                    "INNER JOIN `person_in_media_jobs` ON `person_in_media_jobs`.`person_in_media_job` = \"cast\" INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = `person_in_media_jobs`.`person_in_media_job_id`",
                    "i",
                    $posted_id),
                "directors" => $connection->select_people(
                    "INNER JOIN `person_in_media_jobs` ON `person_in_media_jobs`.`person_in_media_job` = \"director\" INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = `person_in_media_jobs`.`person_in_media_job_id`",
                    "i",
                    $posted_id),
                "writers" => $connection->select_people(
                    "INNER JOIN `person_in_media_jobs` ON `person_in_media_jobs`.`person_in_media_job` = \"writer\" INNER JOIN `people_in_media` ON `people_in_media`.`person_id` = `people`.`person_id` AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = `person_in_media_jobs`.`person_in_media_job_id`",
                    "i",
                    $posted_id),
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