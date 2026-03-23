<?php
    try
    {
        require_once "../include/mysqli_errors.php";
        header("Content-Type", "application/json");

        session_start();

        if (!isset($_GET["q"]))
        {
            ?>[]<?php
            http_response_code(200);
            exit;
        }

        $posted_current = (string)$_GET["q"];

        if (strlen($posted_current) === 0)
        {
            ?>[]<?php
            http_response_code(200);
            exit;
        }

        $searching_media = isset($_GET["movies"]) && $_GET["movies"] !== "false";
        $searching_limit = isset($_GET["limit"])
            ? (int)max((int)min((int)$_GET["limit"], 0), 25)
            : 10;

        $connection = new database_access();

        ?>[<?php
        $firstEntry = true;
        foreach ($connection->select_search_completion($posted_current, $searching_limit) as $entry)
        {
            if ($firstEntry)
                $firstEntry = false;
            else
                echo ",";

            ?>{<?php
                ?>"id":"<?php echo $entry["id"] ?>",<?php
                ?>"title":"<?php echo $entry["title"] ?>",<?php
                ?>"description":"<?php echo $entry["description"] ?>",<?php
                ?>"cover_image_id":"<?php echo $entry["cover_image_id"] ?>",<?php
            ?>}<?php
        }
        ?>]<?php
        http_response_code(200);
        exit;
    }
    catch (Throwable $e)
    {
        ?>{<?php
            ?>"error":"internal",<?php
            ?>"message":"An unknown internal error occurred."<?php
        ?>}<?php
        http_response_code(500);
        exit;
    }
?>