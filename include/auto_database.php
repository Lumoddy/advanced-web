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
                "SELECT `image_id`, `image_description` FROM `images` ".$rawCondition);

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
                        "image_id" => $result_id,
                        "image_description" => $result_description,
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
        function get_image_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `image_id`, `image_description` FROM `images` WHERE `image_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_description);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => $result_id,
                    "description" => $result_description,
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
                "SELECT `account_id`, `account_username`, `account_email`, `account_password_hash` FROM `accounts` ".$rawCondition);

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
                        "account_id" => $result_id,
                        "account_username" => $result_username,
                        "account_email" => $result_email,
                        "account_password_hash" => $result_password_hash,
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
        function get_account_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `account_id`, `account_username`, `account_email`, `account_password_hash` FROM `accounts` WHERE `account_id` = ?");

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
                    "id" => $result_id,
                    "username" => $result_username,
                    "email" => $result_email,
                    "password_hash" => $result_password_hash,
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
        function get_account_with_email(string $email): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `account_id`, `account_username`, `account_email`, `account_password_hash` FROM `accounts` WHERE `account_email` = ?");

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
                    "id" => $result_id,
                    "username" => $result_username,
                    "email" => $result_email,
                    "password_hash" => $result_password_hash,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{id: int, title: string, description: string, cover_image_id: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `media` (`media_id`, `media_title`, `media_description`, `media_cover_image_id`) VALUES (?, ?, ?, ?)".str_repeat(", (?, ?, ?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["id"]);
                array_push($params, $row["title"]);
                array_push($params, $row["description"]);
                array_push($params, $row["cover_image_id"]);
            }

            $stmt->bind_param(str_repeat("issi", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, title: string, description: string, cover_image_id: int}[]
         * @throws mysqli_sql_exception
         */
        function select_media(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media_id`, `media_title`, `media_description`, `media_cover_image_id` FROM `media` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_id,
                $result_title,
                $result_description,
                $result_cover_image_id);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "media_id" => $result_id,
                        "media_title" => $result_title,
                        "media_description" => $result_description,
                        "media_cover_image_id" => $result_cover_image_id,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $id
         * @return ?array{id: int, title: string, description: string, cover_image_id: int}
         * @throws mysqli_sql_exception
         */
        function get_media_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media_id`, `media_title`, `media_description`, `media_cover_image_id` FROM `media` WHERE `media_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_title,
                $result_description,
                $result_cover_image_id);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => $result_id,
                    "title" => $result_title,
                    "description" => $result_description,
                    "cover_image_id" => $result_cover_image_id,
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
                "SELECT `person_id`, `person_full_name`, `person_description` FROM `people` ".$rawCondition);

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
                        "person_id" => $result_id,
                        "person_full_name" => $result_full_name,
                        "person_description" => $result_description,
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
        function get_person_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_id`, `person_full_name`, `person_description` FROM `people` WHERE `person_id` = ?");

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
                    "id" => $result_id,
                    "full_name" => $result_full_name,
                    "description" => $result_description,
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
                "SELECT `account_id`, `media_id`, `rating_rating` FROM `ratings` ".$rawCondition);

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
                        "account_id" => $result_account_id,
                        "media_id" => $result_media_id,
                        "rating_rating" => $result_rating,
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
        function get_rating_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `account_id`, `media_id`, `rating_rating` FROM `ratings` WHERE `account_id` = ? AND `media_id` = ?");

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
                    "account_id" => $result_account_id,
                    "media_id" => $result_media_id,
                    "rating" => $result_rating,
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
                "SELECT `media_id`, `movie_length_minutes` FROM `movies` ".$rawCondition);

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
                        "media_id" => $result_id,
                        "movie_length_minutes" => $result_minutes,
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
        function get_movie_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media_id`, `movie_length_minutes` FROM `movies` WHERE `media_id` = ?");

            $stmt->bind_param(
                "i",
                $id);

            $stmt->bind_result(
                $result_id,
                $result_minutes);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "id" => $result_id,
                    "minutes" => $result_minutes,
                ]
                : null;

            $stmt->close();

            return $result;
        }

        /**
         * @param array{person_id: int, media_id: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_people_in_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `people_in_media` (`person_id`, `media_id`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            $params = [];

            foreach ($rows as $row)
            {
                array_push($params, $row["person_id"]);
                array_push($params, $row["media_id"]);
            }

            $stmt->bind_param(str_repeat("ii", $count), ...$params);
            $stmt->execute();
            $stmt->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{person_id: int, media_id: int}[]
         * @throws mysqli_sql_exception
         */
        function select_people_in_media(string $rawCondition, ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_id`, `media_id` FROM `people_in_media` ".$rawCondition);

            if (is_string($bind_params[0]))
                $stmt->bind_param(...$bind_params);

            $stmt->bind_result(
                $result_person_id,
                $result_media_id);

            $stmt->execute();

            $results = [];

            while ($stmt->fetch())
            {
                array_push(
                    $results,
                    [
                        "person_id" => $result_person_id,
                        "media_id" => $result_media_id,
                    ]);
            }

            $stmt->close();

            return $results;
        }

        /**
         * @param int $person_id
         * @param int $media_id
         * @return ?array{person_id: int, media_id: int}
         * @throws mysqli_sql_exception
         */
        function get_person_in_media_with_person_id_and_media_id(int $person_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_id`, `media_id` FROM `people_in_media` WHERE `person_id` = ? AND `media_id` = ?");

            $stmt->bind_param(
                "ii",
                $person_id,
                $media_id);

            $stmt->bind_result(
                $result_person_id,
                $result_media_id);

            $stmt->execute();

            $result = $stmt->fetch()
                ? [
                    "person_id" => $result_person_id,
                    "media_id" => $result_media_id,
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
                "SELECT `account_id`, `media_id`, `review_content` FROM `reviews` ".$rawCondition);

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
                        "account_id" => $result_account_id,
                        "media_id" => $result_media_id,
                        "review_content" => $result_content,
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
        function get_review_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `account_id`, `media_id`, `review_content` FROM `reviews` WHERE `account_id` = ? AND `media_id` = ?");

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
                    "account_id" => $result_account_id,
                    "media_id" => $result_media_id,
                    "content" => $result_content,
                ]
                : null;

            $stmt->close();

            return $result;
        }
    }
?>