<?php
    // This file was auto-generated based on ./build/database/database_structure.yaml.

    declare(strict_types=1);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class auto_database_access
    {
        public readonly mysqli $connection;

        public function __construct(mysqli $connection)
        {
            $this->connection = $connection;
        }

        public function close()
        {
            $this->connection->close();
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, description: string}[]
         * @throws mysqli_sql_exception
         */
        function select_images(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `images`.`image_id`, `images`.`image_description` FROM `images` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
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
            }
            finally { $stmt->close(); }
        }

        /**
         * param $id int
         * param $username string
         * param $email string
         * param $password_hash string
         * @throws mysqli_sql_exception
         */
        function insert_account_id_and_username_and_email_and_password_hash(
            int $id,
            string $username,
            string $email,
            string $password_hash): void
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `accounts` (`account_id`, `account_username`, `account_email`, `account_password_hash`) VALUES (?, ?, ?, ?)");

            try
            {
                $params =
                [
                    (int)$id,
                    (string)$username,
                    (string)$email,
                    (string)$password_hash,
                ];

                $stmt->bind_param("isss", ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, username: string, email: string, password_hash: string}[]
         * @throws mysqli_sql_exception
         */
        function select_accounts(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `accounts`.`account_id`, `accounts`.`account_username`, `accounts`.`account_email`, `accounts`.`account_password_hash` FROM `accounts` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $id
         * @return bool `true` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_account_with_id(int $id): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `accounts` WHERE `accounts`.`account_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $id);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $email
         * @return bool `true` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_account_with_email(string $email): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `accounts` WHERE `accounts`.`account_email` = ?");

            try
            {
                $stmt->bind_param(
                    "s",
                    $email);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime}[]
         * @throws mysqli_sql_exception
         */
        function select_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `media`.`media_id`, `media`.`media_title`, `media`.`media_description`, `media`.`media_cover_image_id`, `media`.`media_release_date` FROM `media` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, minutes: int}[]
         * @throws mysqli_sql_exception
         */
        function select_movies(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `movies`.`media_id`, `movies`.`movie_length_minutes` FROM `movies` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param array{account_id: int, media_id: int} ...$rows
         * @throws mysqli_sql_exception
         */
        function insert_favorites_of_media(array ...$rows): void
        {
            $count = count($rows);

            if ($count === 0)
                return;

            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `favorites_of_media` (`account_id`, `media_id`) VALUES (?, ?)".str_repeat(", (?, ?)", $count - 1));

            try
            {
                $params = [];

                foreach ($rows as $row)
                {
                    array_push($params, $row["account_id"]);
                    array_push($params, $row["media_id"]);
                }

                $stmt->bind_param(str_repeat("ii", $count), ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * param $account_id int
         * param $media_id int
         * @throws mysqli_sql_exception
         */
        function insert_favorite_of_media_account_id_and_media_id(
            int $account_id,
            int $media_id): void
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `favorites_of_media` (`account_id`, `media_id`) VALUES (?, ?)");

            try
            {
                $params =
                [
                    (int)$account_id,
                    (int)$media_id,
                ];

                $stmt->bind_param("ii", ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, media_id: int}[]
         * @throws mysqli_sql_exception
         */
        function select_favorites_of_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `favorites_of_media`.`account_id`, `favorites_of_media`.`media_id` FROM `favorites_of_media` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
                    $stmt->bind_param(...$bind_params);

                $stmt->bind_result(
                    $result_account_id,
                    $result_media_id);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "account_id" => (int)$result_account_id,
                            "media_id" => (int)$result_media_id,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return ?array{account_id: int, media_id: int}
         * @throws mysqli_sql_exception
         */
        function select_favorite_of_media_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `favorites_of_media`.`account_id`, `favorites_of_media`.`media_id` FROM `favorites_of_media` WHERE `favorites_of_media`.`account_id` = ? AND `favorites_of_media`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "ii",
                    $account_id,
                    $media_id);

                $stmt->bind_result(
                    $result_account_id,
                    $result_media_id);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
                        "account_id" => (int)$result_account_id,
                        "media_id" => (int)$result_media_id,
                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @return array{account_id: int, media_id: int}[]
         * @throws mysqli_sql_exception
         */
        function select_favorites_of_media_with_account_id(int $account_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `favorites_of_media`.`account_id`, `favorites_of_media`.`media_id` FROM `favorites_of_media` WHERE `favorites_of_media`.`account_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $account_id);

                $stmt->bind_result(
                    $result_account_id,
                    $result_media_id);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "account_id" => (int)$result_account_id,
                            "media_id" => (int)$result_media_id,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return bool `true` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_favorite_of_media_with_account_id_and_media_id(int $account_id, int $media_id): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `favorites_of_media` WHERE `favorites_of_media`.`account_id` = ? AND `favorites_of_media`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "ii",
                    $account_id,
                    $media_id);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @return int The amount of deleted rows.
         * @throws mysqli_sql_exception
         */
        function delete_favorites_of_media_with_account_id(int $account_id): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `favorites_of_media` WHERE `favorites_of_media`.`account_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $account_id);

                $stmt->execute();

                return (int)$stmt->affected_rows;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, full_name: string, description: string}[]
         * @throws mysqli_sql_exception
         */
        function select_people(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people`.`person_id`, `people`.`person_full_name`, `people`.`person_description` FROM `people` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
                $params = [];

                foreach ($rows as $row)
                {
                    array_push($params, $row["account_id"]);
                    array_push($params, $row["media_id"]);
                    array_push($params, $row["rating"]);
                }

                $stmt->bind_param(str_repeat("iii", $count), ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * param $account_id int
         * param $media_id int
         * param $rating int
         * @throws mysqli_sql_exception
         */
        function insert_rating_account_id_and_media_id_and_rating(
            int $account_id,
            int $media_id,
            int $rating): void
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `ratings` (`account_id`, `media_id`, `rating_rating`) VALUES (?, ?, ?)");

            try
            {
                $params =
                [
                    (int)$account_id,
                    (int)$media_id,
                    (int)$rating,
                ];

                $stmt->bind_param("iii", ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, media_id: int, rating: int}[]
         * @throws mysqli_sql_exception
         */
        function select_ratings(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `ratings`.`account_id`, `ratings`.`media_id`, `ratings`.`rating_rating` FROM `ratings` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return array{account_id: int, media_id: int, rating: int}[]
         * @throws mysqli_sql_exception
         */
        function select_ratings_with_media_id(int $media_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `ratings`.`account_id`, `ratings`.`media_id`, `ratings`.`rating_rating` FROM `ratings` WHERE `ratings`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

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

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return bool `true` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_rating_with_account_id_and_media_id(int $account_id, int $media_id): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `ratings` WHERE `ratings`.`account_id` = ? AND `ratings`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "ii",
                    $account_id,
                    $media_id);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return int The amount of deleted rows.
         * @throws mysqli_sql_exception
         */
        function delete_ratings_with_media_id(int $media_id): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `ratings` WHERE `ratings`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

                $stmt->execute();

                return (int)$stmt->affected_rows;
            }
            finally { $stmt->close(); }
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

            try
            {
                $params = [];

                foreach ($rows as $row)
                {
                    array_push($params, $row["account_id"]);
                    array_push($params, $row["media_id"]);
                    array_push($params, $row["content"]);
                }

                $stmt->bind_param(str_repeat("iis", $count), ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * param $account_id int
         * param $media_id int
         * param $content string
         * @throws mysqli_sql_exception
         */
        function insert_review_account_id_and_media_id_and_content(
            int $account_id,
            int $media_id,
            string $content): void
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO `reviews` (`account_id`, `media_id`, `review_content`) VALUES (?, ?, ?)");

            try
            {
                $params =
                [
                    (int)$account_id,
                    (int)$media_id,
                    (string)$content,
                ];

                $stmt->bind_param("iis", ...$params);
                $stmt->execute();
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, media_id: int, content: string}[]
         * @throws mysqli_sql_exception
         */
        function select_reviews(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews`.`account_id`, `reviews`.`media_id`, `reviews`.`review_content` FROM `reviews` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return array{account_id: int, media_id: int, content: string}[]
         * @throws mysqli_sql_exception
         */
        function select_reviews_with_media_id(int $media_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews`.`account_id`, `reviews`.`media_id`, `reviews`.`review_content` FROM `reviews` WHERE `reviews`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

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

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return bool `true` if something was deleted.
         * @throws mysqli_sql_exception
         */
        function delete_review_with_account_id_and_media_id(int $account_id, int $media_id): bool
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `reviews` WHERE `reviews`.`account_id` = ? AND `reviews`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "ii",
                    $account_id,
                    $media_id);

                $stmt->execute();

                return $stmt->affected_rows !== 0;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return int The amount of deleted rows.
         * @throws mysqli_sql_exception
         */
        function delete_reviews_with_media_id(int $media_id): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "DELETE FROM `reviews` WHERE `reviews`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

                $stmt->execute();

                return (int)$stmt->affected_rows;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_genres(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres`.`genre_id`, `genres`.`genre` FROM `genres` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{media_id: int, genre: int}[]
         * @throws mysqli_sql_exception
         */
        function select_genres_of_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres_of_media`.`media_id`, `genres_of_media`.`genre` FROM `genres_of_media` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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
                "SELECT `genres_of_media`.`media_id`, `genres_of_media`.`genre` FROM `genres_of_media` WHERE `genres_of_media`.`media_id` = ? AND `genres_of_media`.`genre` = ?");

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{person_id: int, media_id: int, job: int}[]
         * @throws mysqli_sql_exception
         */
        function select_people_in_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media`.`person_id`, `people_in_media`.`media_id`, `people_in_media`.`person_in_media_job` FROM `people_in_media` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
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
                            "job" => (int)$result_job,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_person_in_media_jobs(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `person_in_media_jobs`.`person_in_media_job_id`, `person_in_media_jobs`.`person_in_media_job` FROM `person_in_media_jobs` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
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

                return $results;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
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

            try
            {
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

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{account_id: int, account_username: string, media_id: int, rating: int, review: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_reviews(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews_view`.`account_id`, `reviews_view`.`account_username`, `reviews_view`.`media_id`, `reviews_view`.`rating_rating`, `reviews_view`.`review_content` FROM `reviews_view` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
                    $stmt->bind_param(...$bind_params);

                $stmt->bind_result(
                    $result_account_id,
                    $result_account_username,
                    $result_media_id,
                    $result_rating,
                    $result_review);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "account_id" => (int)$result_account_id,
                            "account_username" => (string)$result_account_username,
                            "media_id" => (int)$result_media_id,
                            "rating" => (int)$result_rating,
                            "review" => (string)$result_review,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $account_id
         * @param int $media_id
         * @return ?array{account_id: int, account_username: string, media_id: int, rating: int, review: string}
         * @throws mysqli_sql_exception
         */
        function select_view_review_with_account_id_and_media_id(int $account_id, int $media_id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews_view`.`account_id`, `reviews_view`.`account_username`, `reviews_view`.`media_id`, `reviews_view`.`rating_rating`, `reviews_view`.`review_content` FROM `reviews_view` WHERE `reviews_view`.`account_id` = ? AND `reviews_view`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "ii",
                    $account_id,
                    $media_id);

                $stmt->bind_result(
                    $result_account_id,
                    $result_account_username,
                    $result_media_id,
                    $result_rating,
                    $result_review);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
                        "account_id" => (int)$result_account_id,
                        "account_username" => (string)$result_account_username,
                        "media_id" => (int)$result_media_id,
                        "rating" => (int)$result_rating,
                        "review" => (string)$result_review,
                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return array{account_id: int, account_username: string, media_id: int, rating: int, review: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_reviews_with_media_id(int $media_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `reviews_view`.`account_id`, `reviews_view`.`account_username`, `reviews_view`.`media_id`, `reviews_view`.`rating_rating`, `reviews_view`.`review_content` FROM `reviews_view` WHERE `reviews_view`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

                $stmt->bind_result(
                    $result_account_id,
                    $result_account_username,
                    $result_media_id,
                    $result_rating,
                    $result_review);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "account_id" => (int)$result_account_id,
                            "account_username" => (string)$result_account_username,
                            "media_id" => (int)$result_media_id,
                            "rating" => (int)$result_rating,
                            "review" => (string)$result_review,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime, minutes: int, rating: ?float, rating_count: int, review_count: int}[]
         * @throws mysqli_sql_exception
         */
        function select_view_movies(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `movies_view`.`movie_id`, `movies_view`.`movie_title`, `movies_view`.`movie_description`, `movies_view`.`movie_cover_image_id`, `movies_view`.`movie_release_date`, `movies_view`.`movie_length_minutes`, `movies_view`.`movie_rating`, `movies_view`.`movie_rating_count`, `movies_view`.`movie_review_count` FROM `movies_view` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
                    $stmt->bind_param(...$bind_params);

                $stmt->bind_result(
                    $result_id,
                    $result_title,
                    $result_description,
                    $result_cover_image_id,
                    $result_release_date,
                    $result_minutes,
                    $result_rating,
                    $result_rating_count,
                    $result_review_count);

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
                            "minutes" => (int)$result_minutes,
                            "rating" => $result_rating === null ? null : (float)$result_rating,
                            "rating_count" => (int)$result_rating_count,
                            "review_count" => (int)$result_review_count,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $id
         * @return ?array{id: int, title: string, description: string, cover_image_id: int, release_date: DateTime, minutes: int, rating: ?float, rating_count: int, review_count: int}
         * @throws mysqli_sql_exception
         */
        function select_view_movie_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `movies_view`.`movie_id`, `movies_view`.`movie_title`, `movies_view`.`movie_description`, `movies_view`.`movie_cover_image_id`, `movies_view`.`movie_release_date`, `movies_view`.`movie_length_minutes`, `movies_view`.`movie_rating`, `movies_view`.`movie_rating_count`, `movies_view`.`movie_review_count` FROM `movies_view` WHERE `movies_view`.`movie_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $id);

                $stmt->bind_result(
                    $result_id,
                    $result_title,
                    $result_description,
                    $result_cover_image_id,
                    $result_release_date,
                    $result_minutes,
                    $result_rating,
                    $result_rating_count,
                    $result_review_count);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
                        "id" => (int)$result_id,
                        "title" => (string)$result_title,
                        "description" => (string)$result_description,
                        "cover_image_id" => (int)$result_cover_image_id,
                        "release_date" => DateTime::createFromFormat("Y-m-d", (string)$result_release_date) or throw new LogicException("Failed to parse SQL Date."),
                        "minutes" => (int)$result_minutes,
                        "rating" => $result_rating === null ? null : (float)$result_rating,
                        "rating_count" => (int)$result_rating_count,
                        "review_count" => (int)$result_review_count,
                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{media_id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_genres_of_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres_of_media_view`.`media_id`, `genres_of_media_view`.`genre` FROM `genres_of_media_view` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
                    $stmt->bind_param(...$bind_params);

                $stmt->bind_result(
                    $result_media_id,
                    $result_name);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "media_id" => (int)$result_media_id,
                            "name" => (string)$result_name,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @param string $name
         * @return ?array{media_id: int, name: string}
         * @throws mysqli_sql_exception
         */
        function select_view_genre_of_media_with_media_id_and_name(int $media_id, string $name): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres_of_media_view`.`media_id`, `genres_of_media_view`.`genre` FROM `genres_of_media_view` WHERE `genres_of_media_view`.`media_id` = ? AND `genres_of_media_view`.`genre` = ?");

            try
            {
                $stmt->bind_param(
                    "is",
                    $media_id,
                    $name);

                $stmt->bind_result(
                    $result_media_id,
                    $result_name);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
                        "media_id" => (int)$result_media_id,
                        "name" => (string)$result_name,
                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return array{media_id: int, name: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_genres_of_media_with_media_id(int $media_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `genres_of_media_view`.`media_id`, `genres_of_media_view`.`genre` FROM `genres_of_media_view` WHERE `genres_of_media_view`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

                $stmt->bind_result(
                    $result_media_id,
                    $result_name);

                $stmt->execute();

                $results = [];

                while ($stmt->fetch())
                {
                    array_push(
                        $results,
                        [
                            "media_id" => (int)$result_media_id,
                            "name" => (string)$result_name,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param string $rawCondition
         * @param mixed ...$bind_params
         * @return array{person_id: int, full_name: string, description: string, media_id: int, job: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_people_in_media(string $rawCondition = "", ...$bind_params): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media_view`.`person_id`, `people_in_media_view`.`person_full_name`, `people_in_media_view`.`person_description`, `people_in_media_view`.`media_id`, `people_in_media_view`.`person_in_media_job` FROM `people_in_media_view` ".$rawCondition);

            try
            {
                if (isset($bind_params[0]))
                    $stmt->bind_param(...$bind_params);

                $stmt->bind_result(
                    $result_person_id,
                    $result_full_name,
                    $result_description,
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
                            "full_name" => (string)$result_full_name,
                            "description" => (string)$result_description,
                            "media_id" => (int)$result_media_id,
                            "job" => (string)$result_job,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $person_id
         * @param int $media_id
         * @param string $job
         * @return ?array{person_id: int, full_name: string, description: string, media_id: int, job: string}
         * @throws mysqli_sql_exception
         */
        function select_view_person_in_media_with_person_id_and_media_id_and_job(int $person_id, int $media_id, string $job): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media_view`.`person_id`, `people_in_media_view`.`person_full_name`, `people_in_media_view`.`person_description`, `people_in_media_view`.`media_id`, `people_in_media_view`.`person_in_media_job` FROM `people_in_media_view` WHERE `people_in_media_view`.`person_id` = ? AND `people_in_media_view`.`media_id` = ? AND `people_in_media_view`.`person_in_media_job` = ?");

            try
            {
                $stmt->bind_param(
                    "iis",
                    $person_id,
                    $media_id,
                    $job);

                $stmt->bind_result(
                    $result_person_id,
                    $result_full_name,
                    $result_description,
                    $result_media_id,
                    $result_job);

                $stmt->execute();

                $result = $stmt->fetch()
                    ? [
                        "person_id" => (int)$result_person_id,
                        "full_name" => (string)$result_full_name,
                        "description" => (string)$result_description,
                        "media_id" => (int)$result_media_id,
                        "job" => (string)$result_job,
                    ]
                    : null;

                return $result;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @return array{person_id: int, full_name: string, description: string, media_id: int, job: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_people_in_media_with_media_id(int $media_id): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media_view`.`person_id`, `people_in_media_view`.`person_full_name`, `people_in_media_view`.`person_description`, `people_in_media_view`.`media_id`, `people_in_media_view`.`person_in_media_job` FROM `people_in_media_view` WHERE `people_in_media_view`.`media_id` = ?");

            try
            {
                $stmt->bind_param(
                    "i",
                    $media_id);

                $stmt->bind_result(
                    $result_person_id,
                    $result_full_name,
                    $result_description,
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
                            "full_name" => (string)$result_full_name,
                            "description" => (string)$result_description,
                            "media_id" => (int)$result_media_id,
                            "job" => (string)$result_job,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }

        /**
         * @param int $media_id
         * @param string $job
         * @return array{person_id: int, full_name: string, description: string, media_id: int, job: string}[]
         * @throws mysqli_sql_exception
         */
        function select_view_people_in_media_with_media_id_and_job(int $media_id, string $job): array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT `people_in_media_view`.`person_id`, `people_in_media_view`.`person_full_name`, `people_in_media_view`.`person_description`, `people_in_media_view`.`media_id`, `people_in_media_view`.`person_in_media_job` FROM `people_in_media_view` WHERE `people_in_media_view`.`media_id` = ? AND `people_in_media_view`.`person_in_media_job` = ?");

            try
            {
                $stmt->bind_param(
                    "is",
                    $media_id,
                    $job);

                $stmt->bind_result(
                    $result_person_id,
                    $result_full_name,
                    $result_description,
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
                            "full_name" => (string)$result_full_name,
                            "description" => (string)$result_description,
                            "media_id" => (int)$result_media_id,
                            "job" => (string)$result_job,
                        ]);
                }

                return $results;
            }
            finally { $stmt->close(); }
        }
    }
?>