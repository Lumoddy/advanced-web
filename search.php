<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";
    require_once __DIR__."/include/api/search.php";

    $media = api_search_media();

    $account = api_account_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newly Nostalgic</title>
  <?php require __DIR__."/part/default_head.php" ?>
</head>
<body>
  <div<?php require __DIR__."/part/background.php" ?>/div>
  <nav<?php require __DIR__."/part/navigation_bar.php" ?>/nav>
  <main
    style="
      margin: 16px auto;
      padding-inline: 16px;
      max-width: 1280px;
      display: flex;
      flex-flow: row nowrap;
      justify-content: stretch;
      align-items: stretch;
      gap: 8px">
    <aside>
      
    </aside>
    <div
      style="
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
                <a
                  class="glass panel"
                  href="./media.php?id=<?php echo $entry["id"] ?>"
                  style="width: 140px; display: block">
                  <img
                    src="./img/<?php echo $entry["id"] ?>.jpg"
                    style="width: 100%; aspect-ratio: 2/3">
                  <div style="margin: 4px 8px 4px;">
                    <h3
                      style="margin: 0; font-size: medium">
                      <?php echo $entry["title"] ?>
                    </h3>
                  </div>
                </a>
              <?php
          }
      ?>
    </div>
  </main>
</body>
</html>