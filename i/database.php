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

    class database_access
    {
        private mysqli $connection;

        /**
         * @throws mysqli_sql_exception
         */
        public function __construct(?mysqli $connection = null)
        {
            $this->connection = $connection ?? default_connection();
        }

        /**
         * @param int $id
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function select_account_with_id(int $id): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT id, username, email, password_hash FROM accounts WHERE id = ?");

            $stmt->bind_param("i", $bound_id);
            $bound_id = $id;

            $stmt->bind_result(
                $result_id,
                $result_username,
                $result_email,
                $result_password_hash);

            $stmt->execute();

            if (!$stmt->fetch())
                return null;

            return
            [
                "id" => (int)$result_id,
                "username" => (string)$result_username,
                "email" => (string)$result_email,
                "password_hash" => (string)$result_password_hash,
            ];
        }

        /**
         * @param string $email
         * @param string $password
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function select_account_with_login(
            string $email,
            #[SensitiveParameter] string $password): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT id, email, password_hash, username FROM accounts WHERE email = ?");

            $stmt->bind_param("s", $bound_email);
            $bound_email = $email;

            $stmt->bind_result(
                $result_id,
                $result_email,
                $result_password_hash,
                $result_username);

            $stmt->execute();

            if (!$stmt->fetch() || password_verify($password, (string)$result_password_hash))
                return null;

            return
            [
                "id" => (int)$result_id,
                "email" => (string)$result_email,
                "password_hash" => (string)$result_password_hash,
                "username" => (string)$result_username,
            ];
        }

        /**
         * @param string $email
         * @param string $password
         * @param string $username
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function create_account_with_login(
            string $email,
            #[SensitiveParameter] string $password,
            string $username): ?array
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "INSERT INTO accounts (id, email, password_hash, username) VALUES (?, ?, ?, ?)");

            $stmt->bind_param(
                "isss",
                $bound_id,
                $bound_email,
                $bound_password_hash,
                $bound_username);
            $bound_id = $this->unique_id_in("accounts");
            $bound_email = $email;
            $bound_password_hash = password_hash($password, PASSWORD_DEFAULT);
            $bound_username = $username;

            $stmt->bind_result(
                $result_id,
                $result_username,
                $result_email,
                $result_password_hash);

            $stmt->execute();

            if (!$stmt->fetch())
                return null;

            return
            [
                "id" => $result_id,
                "username" => $result_username,
                "email" => $result_email,
                "password_hash" => $result_password_hash,
            ];
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

            return $id;
        }
    }
?>