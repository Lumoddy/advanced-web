<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";
    require_once __DIR__."/include/api/search.php";

    $media = api_random_media();

    $account = api_account_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/common.css">
  <script type="module" src="./js/common.js"></script>
</head>
<body>
  <nav class="panel">
    <span class="logo">Newly Nostalgic</span>
    <?php
        if ($account["is_logged_in"])
        {
            ?><span>Logged in as:</span><span><?php
              echo $account["username"]
            ?></span><a href="./logout.php">Log Out</a><?php
        }
        else
        {
            ?><a href="./login.php">Login</a><?php
        }
    ?>
  </nav>
  <main
    style="
      margin: 8px;
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      align-items: start;
      align-content: center;
      gap: 8px">
    <?php
        foreach ($media as $entry)
        {
            ?>
              <a class="panel media" href="./media.php?id=<?php echo $entry["id"] ?>">
                <div style="background-image: url(./img/<?php echo $entry["id"] ?>.jpg);"></div>
                <h3><?php echo $entry["title"] ?></h3>
              </a>
            <?php
        }
    ?>
  </main>
</body>
</html>