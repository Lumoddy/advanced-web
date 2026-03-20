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
            string $email,
            #[SensitiveParameter] string $password): ?array
        {
            $account = $this->get_account_with_email($email);
            if ($account === null
                || !password_verify($password, $account["password_hash"]))
                return null;

            return $account;
        }

        /**
         * @param string $email
         * @param string $password
         * @param string $username
         * @return ?array{id: int, username: string, email: string, password_hash: string}
         * @throws mysqli_sql_exception
         */
        public function insert_account_with_login(
            string $email,
            #[SensitiveParameter] string $password,
            string $username): ?array
        {
            return $this->insert_accounts(
            [
                "id" => $this->unique_id_in("accounts"),
                "username" => $username,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT),
            ]);
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