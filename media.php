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

    try
    {
        $is_favorite = api_is_favorite()["is_favorite"];
    }
    catch (api_error $e)
    {
        switch ($e->getError())
        {
            case "login/not-logged-in":
                $is_favorite = null;
                break;
            default:
                throw $e;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newly Nostalgic - Media</title>
  <?php require __DIR__."/part/default_head.php" ?>
  <script type="module" src="./js/page/favorite_button.js"></script>
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
        align-items: start">
      <img
        src="./img/<?php echo $media["media"]["id"] ?>.jpg"
        style="width: min(40vw, 360px); aspect-ratio: 2/3;">
      <section class="glass panel" style="flex: 1; margin: 16px">
        <div
          style="
            margin: 16px;
            display: flex;
            flex-flow: row nowrap;
            justify-content: stretch;
            align-items: center;
            gap: 8px">
          <h1 style="margin: 0"><?php echo $media["media"]["title"] ?></h1>
          <?php
              if (is_bool($is_favorite))
              {
                  ?>
                    <favorite-selector>
                      <input
                        id="favorite"
                        type="checkbox"
                        <?php if ($is_favorite) echo "checked" ?>
                        data-for-media="<?php echo $media["media"]["id"] ?>">
                      <label for="favorite">
                        <svg class="on" <?php require __DIR__."/part/heart_filled_icon.php" ?>svg>
                        <svg class="off" <?php require __DIR__."/part/heart_icon.php" ?>svg>
                      </label>
                    </favorite-selector>
                  <?php
              }
          ?>
        </div>
        <div
          style="
            margin: 16px;
            display: flex;
            flex-flow: row nowrap;
            justify-content: stretch;
            align-items: center">
          <?php
              if (is_float($media["media"]["rating"]))
              {
                  ?>
                    <span class="rating">(<?php
                        echo number_format($media["media"]["rating"], 1);
                    ?>)</span>
                    <rating-display>
                      <svg<?php
                          require $media["media"]["rating"] >= 0.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["media"]["rating"] >= 1.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["media"]["rating"] >= 2.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["media"]["rating"] >= 3.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["media"]["rating"] >= 4.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                    </rating-display>
                    <span class="rating" style="align-self: start">(<?php
                        echo $media["media"]["rating_count"];
                    ?> <?php
                        echo $media["media"]["rating_count"] === 1 ? "rating" : "ratings";
                    ?>)</span>
                  <?php
              }
              else
              {
                  ?><span class="rating">(No ratings)</span><?php
              }
          ?>
        </div>
        <p><?php echo $media["media"]["description"] ?></p>
        <h3>Genres</h3>
        <p>
          <?php
              $first = true;
              foreach ($media["genres"] as $genre)
              {
                  if ($first)
                      $first = false;
                  else
                      echo ", ";

                  ?><a href="./search.php?for=movies&<?php echo $genre["name"] ?>=on"><?php
                      switch ($genre["name"])
                      {
                          case "action": echo "Action"; break;
                          case "adventure": echo "Adventure"; break;
                          case "animation": echo "Animation"; break;
                          case "biography": echo "Biography"; break;
                          case "comedy": echo "Comedy"; break;
                          case "crime": echo "Crime"; break;
                          case "documentary": echo "Documentary"; break;
                          case "drama": echo "Drama"; break;
                          case "family": echo "Family"; break;
                          case "fantasy": echo "Fantasy"; break;
                          case "history": echo "History"; break;
                          case "horror": echo "Horror"; break;
                          case "music": echo "Music"; break;
                          case "mystery": echo "Mystery"; break;
                          case "romance": echo "Romance"; break;
                          case "sci-fi": echo "Sci-Fi"; break;
                          case "sport": echo "Sport"; break;
                          case "thriller": echo "Thriller"; break;
                          case "war": echo "War"; break;
                      }
                  ?></a><?php
              }
          ?>
        </p>
        <h3>Writers</h3>
        <p>
          <?php
              $first = true;
              foreach ($media["people"] as $person)
              {
                  if ($person["job"] !== "writer")
                      continue;

                  if ($first)
                      $first = false;
                  else
                      echo ", ";

                  ?><a href="./search.php?for=movies&with_person=<?php echo $person["person_id"] ?>&through=writer"><?php
                      echo $person["full_name"]
                  ?></a><?php
              }
          ?>
        </p>
        <h3>Directors</h3>
        <p>
          <?php
              $first = true;
              foreach ($media["people"] as $person)
              {
                  if ($person["job"] !== "director")
                      continue;

                  if ($first)
                      $first = false;
                  else
                      echo ", ";

                  ?><a href="./search.php?for=movies&with_person=<?php echo $person["person_id"] ?>&through=director"><?php
                      echo $person["full_name"]
                  ?></a><?php
              }
          ?>
        </p>
        <h3>Cast</h3>
        <p>
          <?php
              $first = true;
              foreach ($media["people"] as $person)
              {
                  if ($person["job"] !== "cast")
                      continue;

                  if ($first)
                      $first = false;
                  else
                      echo ", ";

                  ?><a href="./search.php?for=movies&with_person=<?php echo $person["person_id"] ?>&through=cast"><?php
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
        flex-flow: row nowrap;
        justify-content: space-between;
        align-items: center">
      <h2>Reviews</h2>
      <a class="glass button" href="<?php
          if ($account["is_logged_in"])
          {
              ?>./review.php?id=<?php echo $media["media"]["id"] ?><?php
          }
          else
          {
              ?>./login.php?r=.%2Freview.php%3Fid%3D<?php echo $media["media"]["id"] ?><?php
          }
      ?>">Make Review</a>
    </div>
    <?php
        foreach ($media["reviews"] as $review)
        {
            ?>
              <section class="glass panel">
                <div
                  style="
                    display: flex;
                    flex-flow: row nowrap;
                    justify-content: space-between;
                    align-items: start">
                  <h3 style="margin: 4px; font-size: larger; font-weight: normal">
                    <span style="font-weight: bold">
                      <?php echo $review["account_username"] ?>
                    </span>
                    says:
                  </h3>
                  <rating-display>
                    <svg<?php
                        require $review["rating"] >= 1
                            ? __DIR__."/part/star_filled_icon.php"
                            : __DIR__."/part/star_icon.php";
                    ?>svg>
                    <svg<?php
                        require $review["rating"] >= 2
                            ? __DIR__."/part/star_filled_icon.php"
                            : __DIR__."/part/star_icon.php";
                    ?>svg>
                    <svg<?php
                        require $review["rating"] >= 3
                            ? __DIR__."/part/star_filled_icon.php"
                            : __DIR__."/part/star_icon.php";
                    ?>svg>
                    <svg<?php
                        require $review["rating"] >= 4
                            ? __DIR__."/part/star_filled_icon.php"
                            : __DIR__."/part/star_icon.php";
                    ?>svg>
                    <svg<?php
                        require $review["rating"] >= 5
                            ? __DIR__."/part/star_filled_icon.php"
                            : __DIR__."/part/star_icon.php";
                    ?>svg>
                  </rating-display>
                </div>
                <p style="margin: 4px; font-size: large"><?php echo $review["review"] ?></p>
              </section class="glass panel">
            <?php
        }
    ?>
  </main>
</body>
</html>