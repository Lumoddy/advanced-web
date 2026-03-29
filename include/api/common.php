<?php
    declare(strict_types=1);

    /**
     * A recoverable, public error that would be returned by the API.
     */
    class api_error extends RuntimeException
    {
        private string $type;

        /**
         * @param string $type A machine-readable error type
         * @param string $message A human-readable error message
         * @param int $response_code The HTTP response code
         */
        public function __construct(string $type, string $message, int $response_code = 400)
        {
            parent::__construct($message, $response_code);
            $this->type = $type;
        }

        /**
         * @return array{error: string, message: string}
         */
        public function as_array(): array
        {
            return ["error" => $this->type, "message" => $this->getMessage()];
        }
    }

    /**
     * Equivalent to `isset($_GET[$name])`.
     * @param string $name
     * @return bool
     */
    function request_param_isset(string $name): bool
    {
        return isset($_GET[$name]);
    }

    /**
     * Equivalent to `(string)$_GET[$name]` with extra checking like `null` if
     * it isn't set.
     * @param string $name
     * @return ?string
     */
    function request_param(string $name): ?string
    {
        return isset($_GET[$name]) ? (string)$_GET[$name] : null;
    }

    /**
     * Equivalent to `(int)$_GET[$name]` with extra checking like `null` if
     * it isn't set and `false` if it isn't a number.
     * @param string $name
     * @return ?int|false
     */
    function request_param_int(string $name): int|null|false
    {
        if (!isset($_GET[$name]))
            return null;

        $value = filter_var($_GET[$name], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        return is_int($value) ? $value : false;
    }

    /**
     * Equivalent to `(float)$_GET[$name]` with extra checking like `null` if
     * it isn't set and `false` if it isn't a number.
     * @param string $name
     * @return ?float|false
     */
    function request_param_float(string $name): float|null|false
    {
        if (!isset($_GET[$name]))
            return null;

        $value = filter_var($_GET[$name], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
        return is_float($value) ? $value : false;
    }

    /**
     * Equivalent to `(bool)$_GET[$name]` with extra checking like `null` if
     * it isn't set.
     * @param string $name
     * @return ?bool
     */
    function request_param_bool(string $name): ?bool
    {
        return isset($_GET[$name]) ? $_GET[$name] !== "false" : null;
    }

    /**
     * Equivalent to `isset($_POST[$name])`.
     * @param string $name
     * @return bool
     */
    function posted_param_isset(string $name): bool
    {
        return isset($_POST[$name]);
    }

    /**
     * Equivalent to `(string)$_POST[$name]` with extra checking like `null` if
     * it isn't set.
     * @param string $name
     * @return ?string
     */
    function posted_param(string $name): ?string
    {
        return isset($_POST[$name]) ? (string)$_POST[$name] : null;
    }

    /**
     * Equivalent to `(int)$_POST[$name]` with extra checking like `null` if
     * it isn't set and `false` if it isn't a number.
     * @param string $name
     * @return ?int|false
     */
    function posted_param_int(string $name): int|null|false
    {
        if (!isset($_POST[$name]))
            return null;

        $value = filter_var($_POST[$name], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        return is_int($value) ? $value : false;
    }

    /**
     * Equivalent to `(float)$_POST[$name]` with extra checking like `null` if
     * it isn't set and `false` if it isn't a number.
     * @param string $name
     * @return ?float|false
     */
    function posted_param_float(string $name): float|null|false
    {
        if (!isset($_POST[$name]))
            return null;

        $value = filter_var($_POST[$name], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
        return is_float($value) ? $value : false;
    }

    /**
     * Equivalent to `(bool)$_POST[$name]` with extra checking like `null` if
     * it isn't set.
     * @param string $name
     * @return ?bool
     */
    function posted_param_bool(string $name): ?bool
    {
        return isset($_POST[$name]) ? $_POST[$name] !== "false" : null;
    }
?>