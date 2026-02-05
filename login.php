<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/i/accounts.php";
    $redirect = $_GET["r"];
    $new = isset($_GET["new"]);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/common.css">
  <script type="module" src="/js/common.js"></script>
</head>
<body>
  <section class="panel glass center manual-shine" id="login-or-create-account">
    <?php require $_SERVER['DOCUMENT_ROOT']."/i/login-contents.php" ?>
  </section>
</body>
</html>