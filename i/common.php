<?php
    /**
     */
    function default_connection(): mysqli
    {
        $connection = mysqli_connect("localhost", "root", "", "advweb");
        if (!$connection)
            throw new LogicException((string)mysqli_connect_error());

        return $connection;
    }

    /**
     */
    function random_id(): string
    {
        return bin2hex(random_bytes(4));
    }

    /**
     * @param ?mysqli $connection The database connection to use, or null to
     * create a new one
     * @param string $column The column to check for uniqueness
     * @param string $source The table to check for uniqueness
     * @param ?callable(): string $random A function that generates a random
     * string, or null to use the default `random_id` function
     * @return string A unique ID that doesn't exist in the specified column and
     * table
     */
    function unique_id(
        ?mysqli $connection,
        string $column,
        string $source,
        ?callable $random = null): string
    {
        if ($connection === null)
            $connection = default_connection();

        if ($random === null)
            $random = "random_id";

        do
        {
            $check_statement = mysqli_prepare(
                $connection,
                "SELECT $column FROM $source WHERE $column = ? LIMIT 1");
            if ($check_statement === false)
                throw new LogicException(mysqli_error($connection));

            if (mysqli_stmt_bind_param(
                $check_statement,
                "s",
                $id) === false)
                throw new LogicException(mysqli_stmt_error($check_statement));

            $id = $random();

            if (mysqli_stmt_execute($check_statement) === false)
                throw new LogicException(mysqli_stmt_error($check_statement));

            $result = mysqli_stmt_get_result($check_statement);
            if ($result === false)
                throw new LogicException(mysqli_stmt_error($check_statement));

            $row = mysqli_fetch_assoc($result);
            if ($row === false)
                throw new LogicException(mysqli_stmt_error($check_statement));
        }
        while ($row);

        return $id;
    }

    /**
     * @param string $fileName The path to the original image file
     * @param int $size The maximum width or height of the thumbnail, in pixels
     * @param ?string $destination_dir The directory to save the thumbnail in,
     * or null to save in the default cache directory. Must be an absolute path
     * starting with the document root
     * @return string The path to the thumbnail, relative to the document root
     */
    function into_thumbnail(
        string $fileName,
        int $size,
        ?string $destination_dir = null): string
    {
        if ($destination_dir === null)
            $destination_dir = $_SERVER["DOCUMENT_ROOT"]."/img/cache";
        else if (!str_starts_with($destination_dir, $_SERVER["DOCUMENT_ROOT"]))
            throw new LogicException("'\$fileName' must be an absolute path.");

        $new_path = pathinfo(
            substr($destination_dir, strlen($_SERVER["DOCUMENT_ROOT"])),
            PATHINFO_ALL & ~PATHINFO_EXTENSION)
            ."/"
            .pathinfo($fileName, PATHINFO_FILENAME)
            .".webp";

        $destination_path = $_SERVER["DOCUMENT_ROOT"].$new_path;

        if (file_exists($destination_path))
            return $new_path;

        if ($size <= 0)
            throw new LogicException("'\$size' must be greater than 0.");

        [$old_width, $old_height] = getimagesize($fileName);

        $scale = $size / (int)max($old_width, $old_height);

        $new_width = (int)($old_width * $scale);
        $new_height = (int)($old_height * $scale);

        if ($new_width === 0 || $new_height === 0)
            throw new LogicException("Image and scale too small.");

        $image_destination = imagecreatetruecolor($new_width, $new_height);

        if (!($image_destination instanceof GdImage))
            throw new RuntimeException("Failed to create destination image.");

        switch (strtolower((string)pathinfo($fileName, PATHINFO_EXTENSION)))
        {
            case "jpeg":
            case "jpg":
                $image = imagecreatefromjpeg($fileName);
                break;
            case "png":
                $image = imagecreatefrompng($fileName);
                break;
            case "webp":
                $image = imagecreatefromwebp($fileName);
                break;
            default:
                throw new LogicException("Unsupported image format.");
        }

        if (!($image instanceof GdImage))
            throw new RuntimeException("Failed to create image from file.");

        imagecopyresampled(
            $image_destination, $image,
            0, 0, 0, 0,
            $old_width, $old_height, $new_width, $new_height);

        imagewebp($image_destination, $destination_path);

        return $new_path;
    }
?>