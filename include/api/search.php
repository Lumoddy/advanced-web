<?php
    declare(strict_types=1);
    require_once __DIR__."/accounts.php";
    require_once __DIR__."/common.php";
    require_once __DIR__."/../database.php";

    /**
     * Public API
     * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime, minutes: int, rating: ?float, rating_count: int, review_count: int}[]
     * @throws api_error
     */
    function api_search_media(): array
    {
        $posted_search_name = request_param("name");
        $posted_search_with_person = request_param_int("with_person");
        $posted_search_through = request_param("through");
        $posted_only_fav = request_param_bool("only-fav");
        $posted_limit = request_param_int("limit");

        if (!is_int($posted_limit))
            $posted_limit = 50;
        if ($posted_limit < 0)
            $posted_limit = 0;
        if ($posted_limit > 50)
            $posted_limit = 50;

        $connection = new database_access();

        try
        {
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
                array_push(
                    $conditions,
                    "`movies_view`.`movie_title` LIKE CONCAT(\"%\", ?, \"%\")");
                $bind_types .= "s";
                array_push($bind, $posted_search_name);
            }

            if (is_int($posted_search_with_person))
            {
                if (is_string($posted_search_through))
                {
                    array_push(
                        $conditions,
                        "EXISTS(SELECT NULL FROM `people_in_media` INNER JOIN `person_in_media_jobs` ON `person_in_media_jobs`.`person_in_media_job_id` = `people_in_media`.`person_in_media_job` AND `person_in_media_jobs`.`person_in_media_job` = ? WHERE `people_in_media`.`media_id` = `movies_view`.`movie_id` AND `people_in_media`.`person_id` = ?)");
                    $bind_types .= "si";
                    array_push($bind, $posted_search_through, $posted_search_with_person);
                }
                else
                {
                    array_push(
                        $conditions,
                        "EXISTS(SELECT NULL FROM `people_in_media` WHERE `people_in_media`.`media_id` = `movies_view`.`movie_id` AND `people_in_media`.`person_id` = ?)");
                    $bind_types .= "i";
                    array_push($bind, $posted_search_with_person);
                }
            }

            if (!$no_genres)
            {
                $condition = "EXISTS(SELECT NULL FROM `genres_of_media` WHERE `genres_of_media`.`media_id` = `movies_view`.`movie_id` AND `genres_of_media`.`genre` IN (";

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

            if ($posted_only_fav ?? false)
            {
                $account = api_account_info();

                if ($account["is_logged_in"])
                {
                    array_push(
                        $conditions,
                        "EXISTS(SELECT NULL FROM `favorites_of_media` WHERE `favorites_of_media`.`media_id` = `movies_view`.`movie_id` AND `favorites_of_media`.`account_id` = ?)");
                    $bind_types .= "i";
                    array_push($bind, $account["id"]);
                }
                else
                    return [];
            }

            if (is_string($posted_search_name))
            {
                array_push(
                    $order_bys,
                    "LOCATE(?, `movies_view`.`movie_title`)");
                $bind_types .= "s";
                array_push($bind, $posted_search_name);
            }

            $bind_types .= "i";
            array_push($bind, $posted_limit);

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

            return $connection->select_view_movies($sql, $bind_types, ...$bind);
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return array{media: array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime, minutes: int, rating: ?float, rating_count: int, review_count: int}, genres: array{media_id: int, name: string}[], people: array{person_id: int, full_name: string, description: string, media_id: int, job: string}[], reviews: array{account_id: int, account_username: string, media_id: int, rating: int, review: string}[]}
     * @throws api_error
     */
    function api_media_info(): array
    {
        $posted_id = request_param_int("id");

        if (!is_int($posted_id))
            throw new api_error(
                "syntax/missing-param",
                "Missing field 'id'.");

        $connection = new database_access();

        try
        {
            // I would improve this if it weren't actually intended api.
            //
            // PHP has the single worst api for a database I have ever seen.
            // I hate PHP so much.

            $media = $connection->select_view_movie_with_id($posted_id);

            if (is_null($media))
                throw new api_error(
                    "media/not-found",
                    "No media with the given ID exists.");

            $genres = $connection->select_view_genres_of_media_with_media_id($posted_id);
            $people = $connection->select_view_people_in_media_with_media_id($posted_id);
            $reviews = $connection->select_view_reviews_with_media_id($posted_id);

            return
            [
                "media" => $media,
                "genres" => $genres,
                "people" => $people,
                "reviews" => $reviews,
            ];
        }
        finally { $connection->close(); }
    }

    /**
     * Public API
     * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime, minutes: int, rating: ?float, rating_count: int, review_count: int}[]
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
            return $connection->select_view_movies(
                "ORDER BY RAND() LIMIT ?",
                "i",
                $posted_limit);
        }
        finally { $connection->close(); }
    }
?>