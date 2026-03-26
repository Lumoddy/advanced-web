<?php
    declare(strict_types=1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    /**
     * @param string $fileName The path to the original image file
     * @param int $size The maximum width or height of the thumbnail, in pixels
     * @param ? $destination_dir The directory to save the thumbnail in,
     * or null to save in the default cache directory. Must be an absolute path
     * starting with the document root
     * @return string The path to the thumbnail, relative to the document root
     */
    function into_thumbnail(
        string $fileName,
        int $size,
        ?string $destination_dir = null): string
    {
        if (is_null($destination_dir))
            $destination_dir = $_SERVER["DOCUMENT_ROOT"]."/img/cache";
        else if (!str_starts_with($destination_dir, $_SERVER["DOCUMENT_ROOT"]))
            throw new LogicException("'\$fileName' must be an absolute path.");

        $new_path = pathinfo(
            substr($destination_dir, strlen($_SERVER["DOCUMENT_ROOT"])),
            PATHINFO_DIRNAME)
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