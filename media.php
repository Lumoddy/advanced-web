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
  <main
    style="
      margin: 16px auto;
      padding-inline: 16px;
      max-width: 1280px;">
    <div
      style="
        margin: 16px;
        display: flex;
        flex-flow: row nowrap;
        justify-content: stretch;
        align-items: stretch">
      <img
        src="./img/<?php echo $media["media"]["id"] ?>.jpg"
        style="width: min(40vw, 360px); aspect-ratio: 2/3;">
      <section class="glass panel" style="flex: 1; margin: 16px">
        <h1><?php echo $media["media"]["title"] ?></h1>
        <p><?php echo $media["media"]["description"] ?></p>
        <h3>Writers</h3>
        <p>
          <?php
            $first = true;
            foreach ($media["writers"] as $person)
            {
                if ($first)
                    $first = false;
                else
                    echo ", ";

                ?><a href="./search.php?for=movies&with_person=<?php echo $person["id"] ?>&through=writer"><?php
                  echo $person["full_name"]
                ?></a><?php
            }
          ?>
        </p>
        <h3>Directors</h3>
        <p>
          <?php
            $first = true;
            foreach ($media["directors"] as $person)
            {
                if ($first)
                    $first = false;
                else
                    echo ", ";

                ?><a href="./search.php?for=movies&with_person=<?php echo $person["id"] ?>&through=director"><?php
                  echo $person["full_name"]
                ?></a><?php
            }
          ?>
        </p>
        <h3>Cast</h3>
        <p>
          <?php
            $first = true;
            foreach ($media["cast"] as $person)
            {
                if ($first)
                    $first = false;
                else
                    echo ", ";

                ?><a href="./search.php?for=movies&with_person=<?php echo $person["id"] ?>&through=cast"><?php
                  echo $person["full_name"]
                ?></a><?php
            }
          ?>
        </p>
      </section class="glass panel">
    </div>
    <div
      style="
        margin: 16px;
        display: flex;
        flex-flow: row wrap;
        justify-content: stretch;
        align-items: stretch">
      <a class="glass button" href="<?php
          if ($account["is_logged_in"])
          {
              ?>./review.php<?php
          }
          else
          {
              ?>./login.php?r=.%2Freview.php<?php
          }
      ?>">Make Review</a>
    </div>
    <div
      style="
        margin: 16px;
        display: flex;
        flex-flow: row wrap;
        justify-content: stretch;
        align-items: stretch">
      <h2>Reviews</h2>
    </div>
  </main>
</body>
</html>