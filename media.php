<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";
    require_once __DIR__."/include/api/search.php";

    $media = api_media_info();

    if (is_null($media))
    {
        http_response_code(404);
        exit;
    }

    $account = api_account_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newly Nostalgic - Media</title>
  <?php require __DIR__."/part/default_head.php" ?>
</head>
<body>
  <div<?php require __DIR__."/part/background.php" ?>/div>
  <nav<?php require __DIR__."/part/navigation_bar.php" ?>/nav>
  <div
    style="
      display: flex;
      flex-flow: row nowrap;
      justify-content: stretch;
      align-items: stretch">
    <div
      style="
        width: 200px;
        height: 350px;
        background-position: center;
        background-size: cover;
        background-image: url(./img/<?php echo $media["id"] ?>.jpg)"></div>
    <div style="flex: 1; margin: 16px">
      <h2><?php echo $media["title"] ?></h2>
      <p><?php echo $media["description"] ?></p>
    </div>
  </div>
</body>
</html>