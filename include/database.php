<?php
    declare(strict_types=1);
    require_once("./i/mysqli_errors.php");
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    /**
     * @throws mysqli_sql_exception
     */
    function default_connection(): mysqli
    {
        return new mysqli("localhost", "root", "", "advweb");
    }

    class database_access extends auto_database_access
    {
        /**
         * @throws mysqli_sql_exception
         */
        public function __construct(?mysqli $connection = null)
        {
            parent::__construct($connection ?? default_connection());
        }

        /**
         * @param string $email
         * @param string $password
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function get_account_with_login(
            string $identifier,
            #[SensitiveParameter] string $password): ?array
        {
            foreach (
                $this->select_accounts(
                    "WHERE account_email = @identifier OR account_username = @identifier",
                    "s",
                    $identifier) as $account)
            {
                if (password_verify($password, $account["password_hash"]))
                    return $account;
            }

            return null;
        }

        /**
         * @param string $email
         * @param string $password
         * @param string $username
         * @return array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function insert_account_with_login(
            string $email,
            #[SensitiveParameter] string $password,
            string $username): array
        {
            $entry =
            [
                "id" => $this->unique_id_in("accounts"),
                "username" => $username,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT),
            ];

            return $entry;
        }

        /**
         * @param string $current
         * @param int $limit
         * @return array{id: int, title: string, description: string, cover_image_id: int}[]
         */
        public function select_search_completion(string $current, int $limit): array
        {
            return $this->select_media(
                "WHERE `media_title` LIKE CONCAT(\"%\", ?, \"%\") ORDER BY LOCATE(?, `media_title`) DESC LIMIT ?",
                "ssi",
                $current,
                $current,
                $limit);
        }

        /**
         * @param string $source
         * @return int
         * @throws mysqli_sql_exception
         */
        private function unique_id_in(string $source): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT 0 FROM $source WHERE id = ? LIMIT 1");

            $stmt->bind_param("i", $id);

            do
            {
                $id = random_int(0, 0xFFFFFFFF);
                $stmt->execute();
            }
            while ($stmt->fetch());

            $stmt->close();

            return $id;
        }
    }
?>