<?php
    declare(strict_types=1);
    require_once __DIR__."/mysqli_errors.php";
    require_once __DIR__."/auto_database.php";

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
        public function __construct(?float $connection = null)
        {
            parent::__construct($connection ?? default_connection());
        }

        /**
         * @param string $email
         * @param string $password
         * @return array{id: int, username: string, email: string, password_hash: string}[]
         * @throws mysqli_sql_exception
         */
        public function select_accounts_with_username(string $username): array
        {
            return $this->select_accounts(
                "WHERE account_username = ?",
                "s",
                $username);
        }

        /**
         * @param array{username: string, email: string, password_hash: string} $account
         * @return array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function insert_account_with_unique_id(array $account): array
        {
            $entry =
            [
                "id" => $this->unique_id_in("accounts", "account_id"),
                "username" => $account["username"],
                "email" => $account["email"],
                "password_hash" => $account["password_hash"],
            ];

            $this->insert_accounts($entry);

            return $entry;
        }

        /**
         * @param string $source
         * @param string $column
         * @return int
         * @throws mysqli_sql_exception
         */
        private function unique_id_in(string $source, string $column = "id"): int
        {
            $stmt = new mysqli_stmt(
                $this->connection,
                "SELECT 0 FROM `$source` WHERE `$column` = ? LIMIT 1");

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