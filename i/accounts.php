<?php
    require_once "./i/common.php";

    /**
     * @param ?mysqli $connection The database connection to use, or null to
     * create a new one
     * @param string $email The email address to search for
     * @param string $password The password to search for
     * @return ?int The account's ID or null if no account was found,
     * or an error message if failed
     * @throws mysqli_sql_exception
     */
    function fetch_login_account_id(
        ?mysqli $connection,
        string $email,
        #[SensitiveParameter] string $password): ?int
    {
        if ($connection === null)
            $connection = default_connection();

        $statement = mysqli_prepare(
            $connection,
            "SELECT (id) FROM users WHERE email = ? AND password = ? LIMIT 1");
        if ($statement === false)
            throw new LogicException(mysqli_error($connection));

        if (mysqli_stmt_bind_param(
            $statement,
            "ss",
            $email,
            password_hash($password, PASSWORD_BCRYPT)) == false)
            throw new LogicException(mysqli_stmt_error($statement));

        if (mysqli_stmt_execute($statement) === false)
            throw new mysqli_sql_exception(mysqli_stmt_error($statement));

        $result = mysqli_stmt_get_result($statement);
        if ($result === false)
            throw new LogicException(mysqli_stmt_error($statement));

        $row = mysqli_fetch_assoc($result);
        if ($row === false)
            throw new LogicException(mysqli_stmt_error($statement));
        else if ($row === null)
            return null;

        $id = $row["id"];
        if (!is_int($id))
            throw new LogicException("ID is not an int");

        return $id;
    }

    /**
     * @param ?mysqli $connection The database connection to use, or null to
     * create a new one
     * @param string $email The email address for the new account
     * @param string $password The password for the new account
     * @return int The new account's ID, or an error message if failed
     * @throws mysqli_sql_exception
     */
    function post_new_account(
        ?mysqli $connection,
        string $email,
        #[SensitiveParameter] string $password): int
    {
        if ($connection === null)
            $connection = default_connection();

        $statement = mysqli_prepare(
            $connection,
            "INSERT INTO users (id, email, password) VALUES (?, ?, ?)");
        if (!$statement)
            throw new LogicException(mysqli_error($connection));

        if (mysqli_stmt_bind_param(
            $statement,
            "sss",
            $id,
            $email,
            password_hash($password, PASSWORD_BCRYPT)) === false)
            throw new LogicException(mysqli_stmt_error($statement));

        $id = unique_id($connection, "id", "users");

        if (mysqli_stmt_execute($statement) === false)
            throw new mysqli_sql_exception(mysqli_stmt_error($statement));

        return $id;
    }
?>