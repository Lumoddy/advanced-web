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
                style="
                  width: 140px;
                  color: #FFFFFF;
                  text-decoration: none">
                <img
                  src="./img/<?php echo $entry["id"] ?>.jpg"
                  style="width: 100%; aspect-ratio: 2/3">
                <div style="margin: 4px 8px 4px;">
                  <h3
                    style="margin: 0; font-size: medium">
                    <?php echo $entry["title"] ?>
                  </h3>
                </div>
                <div
                  style="
                    display: flex;
                    flex-flow: row nowrap;
                    justify-content: end;
                    align-items: center">
                  <?php
                      if (is_float($entry["rating"]))
                      {
                          ?>
                            <span
                              class="rating"
                              style="font-size: small">(<?php
                                  echo number_format($entry["rating"], 1)
                              ?>)</span>
                            <rating-display class="small">
                              <svg<?php
                                  require $entry["rating"] >= 0.5
                                      ? __DIR__."/part/star_filled_icon.php"
                                      : __DIR__."/part/star_icon.php";
                              ?>svg>
                              <svg<?php
                                  require $entry["rating"] >= 1.5
                                      ? __DIR__."/part/star_filled_icon.php"
                                      : __DIR__."/part/star_icon.php";
                              ?>svg>
                              <svg<?php
                                  require $entry["rating"] >= 2.5
                                      ? __DIR__."/part/star_filled_icon.php"
                                      : __DIR__."/part/star_icon.php";
                              ?>svg>
                              <svg<?php
                                  require $entry["rating"] >= 3.5
                                      ? __DIR__."/part/star_filled_icon.php"
                                      : __DIR__."/part/star_icon.php";
                              ?>svg>
                              <svg<?php
                                  require $entry["rating"] >= 4.5
                                      ? __DIR__."/part/star_filled_icon.php"
                                      : __DIR__."/part/star_icon.php";
                              ?>svg>
                            </rating-display>
                          <?php
                      }
                      else
                      {
                          ?><span class="rating">(No ratings)</span><?php
                      }
                  ?>
                </div>
              </a>
            <?php
        }
    ?>
  </main>
</body>
</html>