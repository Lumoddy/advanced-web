<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";

    $posted_redirect = request_param("r");

    api_logout();

    header("Location: ".($posted_redirect ?? "/"));
?>