<?php
    // This file was auto-generated based on ./build/database/database_structure.yaml.

    declare(strict_types=1);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class auto_database_access
    {
        protected mysqli $connection;

        public function __construct(mysqli $connection)
        {
            $this->connection = $connection;
        }

        public function close()
        {
            $this->connection->close();
        }

        /**
         * @param array{id: int, description: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_images(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `images` (`image_id`, `image_description`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["description"]);
            }

            $stmt->bind_param(str_repeat("is", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, description: string}[]
         * @throws mysqli_sql_exception
         */
        function select_images(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `images`.`image_id`, `images`.`image_description` FROM `images` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_description);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "description" => (string)$result_description,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, description: string}
         * @throws mysqli_sql_exception
         */
        function select_image_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `images`.`image_id`, `images`.`image_description` FROM `images` WHERE `images`.`image_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_description);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "description" => (string)$result_description,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, username: string, email: string, password_hash: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_accounts(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `accounts` (`account_id`, `account_username`, `account_email`, `account_password_hash`) VALUES (?, ?, ?, ?)".str_repeat(", (?, ?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["username"]);
                array_push($params, $row["email"]);
                array_push($params, $row["password_hash"]);
            }

            $stmt->bind_param(str_repeat("isss", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, username: string, email: string, password_hash: string}[]
         * @throws mysqli_sql_exception
         */
        function select_accounts(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `accounts`.`account_id`, `accounts`.`account_username`, `accounts`.`account_email`, `accounts`.`account_password_hash` FROM `accounts` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_username,
                $result_email,
                $result_password_hash);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "username" => (string)$result_username,
                        "email" => (string)$result_email,
                        "password_hash" => (string)$result_password_hash,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        function select_account_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `accounts`.`account_id`, `accounts`.`account_username`, `accounts`.`account_email`, `accounts`.`account_password_hash` FROM `accounts` WHERE `accounts`.`account_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_username,
                $result_email,
                $result_password_hash);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "username" => (string)$result_username,
                    "email" => (string)$result_email,
                    "password_hash" => (string)$result_password_hash,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param string $email
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        function select_account_with_email(string $email): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `accounts`.`account_id`, `accounts`.`account_username`, `accounts`.`account_email`, `accounts`.`account_password_hash` FROM `accounts` WHERE `accounts`.`account_email` = ?");

            $stmt->bind_param(
                "s",
                $email);

            $stmt->bind_result(
                $result_id,
                $result_username,
                $result_email,
                $result_password_hash);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "username" => (string)$result_username,
                    "email" => (string)$result_email,
                    "password_hash" => (string)$result_password_hash,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `media` (`media_id`, `media_title`, `media_description`, `media_cover_image_id`, `media_release_date`) VALUES (?, ?, ?, ?, ?)".str_repeat(", (?, ?, ?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["title"]);
                array_push($params, $row["description"]);
                array_push($params, $row["cover_image_id"]);
                array_push($params, $row["release_date"]->format("Y-m-d"));
            }

            $stmt->bind_param(str_repeat("issis", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}[]
         * @throws mysqli_sql_exception
         */
        function select_media(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media`.`media_id`, `media`.`media_title`, `media`.`media_description`, `media`.`media_cover_image_id`, `media`.`media_release_date` FROM `media` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_title,
                $result_description,
                $result_cover_image_id,
                $result_release_date);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "title" => (string)$result_title,
                        "description" => (string)$result_description,
                        "cover_image_id" => (int)$result_cover_image_id,
                        "release_date" => DateTime::createFromFormat("Y-m-d", (string)$result_release_date) or throw new LogicException("Failed to parse SQL Date."),
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}
         * @throws mysqli_sql_exception
         */
        function select_media_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media`.`media_id`, `media`.`media_title`, `media`.`media_description`, `media`.`media_cover_image_id`, `media`.`media_release_date` FROM `media` WHERE `media`.`media_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_title,
                $result_description,
                $result_cover_image_id,
                $result_release_date);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "title" => (string)$result_title,
                    "description" => (string)$result_description,
                    "cover_image_id" => (int)$result_cover_image_id,
                    "release_date" => DateTime::createFromFormat("Y-m-d", (string)$result_release_date) or throw new LogicException("Failed to parse SQL Date."),
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, full_name: string, description: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_people(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `people` (`person_id`, `person_full_name`, `person_description`) VALUES (?, ?, ?)".str_repeat(", (?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["full_name"]);
                array_push($params, $row["description"]);
            }

            $stmt->bind_param(str_repeat("iss", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, full_name: string, description: string}[]
         * @throws mysqli_sql_exception
         */
        function select_people(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people`.`person_id`, `people`.`person_full_name`, `people`.`person_description` FROM `people` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_full_name,
                $result_description);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "full_name" => (string)$result_full_name,
                        "description" => (string)$result_description,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, full_name: string, description: string}
         * @throws mysqli_sql_exception
         */
        function select_person_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people`.`person_id`, `people`.`person_full_name`, `people`.`person_description` FROM `people` WHERE `people`.`person_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_full_name,
                $result_description);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "full_name" => (string)$result_full_name,
                    "description" => (string)$result_description,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{account_id: int, media_id: int, rating: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_ratings(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `ratings` (`account_id`, `media_id`, `rating_rating`) VALUES (?, ?, ?)".str_repeat(", (?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["account_id"]);
                array_push($params, $row["media_id"]);
                array_push($params, $row["rating"]);
            }

            $stmt->bind_param(str_repeat("iii", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, media_id: int, rating: int}[]
         * @throws mysqli_sql_exception
         */
        function select_ratings(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `ratings`.`account_id`, `ratings`.`media_id`, `ratings`.`rating_rating` FROM `ratings` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_account_id,
                $result_media_id,
                $result_rating);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "account_id" => (int)$result_account_id,
                        "media_id" => (int)$result_media_id,
                        "rating" => (int)$result_rating,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return ?array{account_id: int, media_id: int, rating: int}
         * @throws mysqli_sql_exception
         */
        function select_rating_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `ratings`.`account_id`, `ratings`.`media_id`, `ratings`.`rating_rating` FROM `ratings` WHERE `ratings`.`account_id` = ? AND `ratings`.`media_id` = ?");

            $stmt->bind_param(
                "ii",
                $account_id,
                $media_id);

            $stmt->bind_result(
                $result_account_id,
                $result_media_id,
                $result_rating);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "account_id" => (int)$result_account_id,
                    "media_id" => (int)$result_media_id,
                    "rating" => (int)$result_rating,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, minutes: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_movies(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `movies` (`media_id`, `movie_length_minutes`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["minutes"]);
            }

            $stmt->bind_param(str_repeat("ii", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, minutes: int}[]
         * @throws mysqli_sql_exception
         */
        function select_movies(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `movies`.`media_id`, `movies`.`movie_length_minutes` FROM `movies` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_minutes);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "minutes" => (int)$result_minutes,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, minutes: int}
         * @throws mysqli_sql_exception
         */
        function select_movie_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `movies`.`media_id`, `movies`.`movie_length_minutes` FROM `movies` WHERE `movies`.`media_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_minutes);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "minutes" => (int)$result_minutes,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{media_id: int, genre: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_genre_of_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `genre_of_media` (`media_id`, `genre`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["media_id"]);
                array_push($params, $row["genre"]);
            }

            $stmt->bind_param(str_repeat("ii", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{media_id: int, genre: int}[]
         * @throws mysqli_sql_exception
         */
        function select_genre_of_media(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genre_of_media`.`media_id`, `genre_of_media`.`genre` FROM `genre_of_media` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_media_id,
                $result_genre);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "media_id" => (int)$result_media_id,
                        "genre" => (int)$result_genre,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $media_id
         * @param int $genre
         * @return ?array{media_id: int, genre: int}
         * @throws mysqli_sql_exception
         */
        function select_genre_of_media_with_media_id_and_genre(int $media_id, int $genre): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genre_of_media`.`media_id`, `genre_of_media`.`genre` FROM `genre_of_media` WHERE `genre_of_media`.`media_id` = ? AND `genre_of_media`.`genre` = ?");

            $stmt->bind_param(
                "ii",
                $media_id,
                $genre);

            $stmt->bind_result(
                $result_media_id,
                $result_genre);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "media_id" => (int)$result_media_id,
                    "genre" => (int)$result_genre,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, name: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_genres(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `genres` (`genre_id`, `genre`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["name"]);
            }

            $stmt->bind_param(str_repeat("is", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_genres(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres`.`genre_id`, `genres`.`genre` FROM `genres` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "name" => (string)$result_name,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, name: string}
         * @throws mysqli_sql_exception
         */
        function select_genre_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres`.`genre_id`, `genres`.`genre` FROM `genres` WHERE `genres`.`genre_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "name" => (string)$result_name,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param string $name
         * @return ?array{id: int, name: string}
         * @throws mysqli_sql_exception
         */
        function select_genre_with_name(string $name): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres`.`genre_id`, `genres`.`genre` FROM `genres` WHERE `genres`.`genre` = ?");

            $stmt->bind_param(
                "s",
                $name);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "name" => (string)$result_name,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{person_id: int, media_id: int, job: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_people_in_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `people_in_media` (`person_id`, `media_id`, `person_in_media_job`) VALUES (?, ?, ?)".str_repeat(", (?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["person_id"]);
                array_push($params, $row["media_id"]);
                array_push($params, $row["job"]);
            }

            $stmt->bind_param(str_repeat("iii", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{person_id: int, media_id: int, job: int}[]
         * @throws mysqli_sql_exception
         */
        function select_people_in_media(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media`.`person_id`, `people_in_media`.`media_id`, `people_in_media`.`person_in_media_job` FROM `people_in_media` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_person_id,
                $result_media_id,
                $result_job);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "person_id" => (int)$result_person_id,
                        "media_id" => (int)$result_media_id,
                        "job" => (int)$result_job,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $person_id
         * @param int $media_id
         * @param int $job
         * @return ?array{person_id: int, media_id: int, job: int}
         * @throws mysqli_sql_exception
         */
        function select_person_in_media_with_person_id_and_media_id_and_job(int $person_id, int $media_id, int $job): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media`.`person_id`, `people_in_media`.`media_id`, `people_in_media`.`person_in_media_job` FROM `people_in_media` WHERE `people_in_media`.`person_id` = ? AND `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = ?");

            $stmt->bind_param(
                "iii",
                $person_id,
                $media_id,
                $job);

            $stmt->bind_result(
                $result_person_id,
                $result_media_id,
                $result_job);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "person_id" => (int)$result_person_id,
                    "media_id" => (int)$result_media_id,
                    "job" => (int)$result_job,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param int $media_id
         * @param int $job
         * @return array{person_id: int, media_id: int, job: int}[]
         * @throws mysqli_sql_exception
         */
        function select_people_in_media_with_media_id_and_job(int $media_id, int $job): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media`.`person_id`, `people_in_media`.`media_id`, `people_in_media`.`person_in_media_job` FROM `people_in_media` WHERE `people_in_media`.`media_id` = ? AND `people_in_media`.`person_in_media_job` = ?");

            $stmt->bind_param(
                "ii",
                $media_id,
                $job);

            $stmt->bind_result(
                $result_person_id,
                $result_media_id,
                $result_job);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "person_id" => (int)$result_person_id,
                        "media_id" => (int)$result_media_id,
                        "person_in_media_job" => (int)$result_job,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param array{id: int, name: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_person_in_media_jobs(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `person_in_media_jobs` (`person_in_media_job_id`, `person_in_media_job`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["name"]);
            }

            $stmt->bind_param(str_repeat("is", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_person_in_media_jobs(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_in_media_jobs`.`person_in_media_job_id`, `person_in_media_jobs`.`person_in_media_job` FROM `person_in_media_jobs` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "id" => (int)$result_id,
                        "name" => (string)$result_name,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, name: string}
         * @throws mysqli_sql_exception
         */
        function select_person_in_media_job_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_in_media_jobs`.`person_in_media_job_id`, `person_in_media_jobs`.`person_in_media_job` FROM `person_in_media_jobs` WHERE `person_in_media_jobs`.`person_in_media_job_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "name" => (string)$result_name,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param string $name
         * @return ?array{id: int, name: string}
         * @throws mysqli_sql_exception
         */
        function select_person_in_media_job_with_name(string $name): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_in_media_jobs`.`person_in_media_job_id`, `person_in_media_jobs`.`person_in_media_job` FROM `person_in_media_jobs` WHERE `person_in_media_jobs`.`person_in_media_job` = ?");

            $stmt->bind_param(
                "s",
                $name);

            $stmt->bind_result(
                $result_id,
                $result_name);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => (int)$result_id,
                    "name" => (string)$result_name,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{account_id: int, media_id: int, content: string} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_reviews(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `reviews` (`account_id`, `media_id`, `review_content`) VALUES (?, ?, ?)".str_repeat(", (?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["account_id"]);
                array_push($params, $row["media_id"]);
                array_push($params, $row["content"]);
            }

            $stmt->bind_param(str_repeat("iis", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, media_id: int, content: string}[]
         * @throws mysqli_sql_exception
         */
        function select_reviews(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews`.`account_id`, `reviews`.`media_id`, `reviews`.`review_content` FROM `reviews` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_account_id,
                $result_media_id,
                $result_content);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "account_id" => (int)$result_account_id,
                        "media_id" => (int)$result_media_id,
                        "content" => (string)$result_content,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return ?array{account_id: int, media_id: int, content: string}
         * @throws mysqli_sql_exception
         */
        function select_review_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews`.`account_id`, `reviews`.`media_id`, `reviews`.`review_content` FROM `reviews` WHERE `reviews`.`account_id` = ? AND `reviews`.`media_id` = ?");

            $stmt->bind_param(
                "ii",
                $account_id,
                $media_id);

            $stmt->bind_result(
                $result_account_id,
                $result_media_id,
                $result_content);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "account_id" => (int)$result_account_id,
                    "media_id" => (int)$result_media_id,
                    "content" => (string)$result_content,
                ]
                : null;

            $stmt->close();

            return $result;
        }
    }
?>