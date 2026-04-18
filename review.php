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

    $posted_rating = posted_param_int("rating");
    $posted_review = posted_param("review");

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        try
        {
            api_post_review();

            header("Location: ./media.php?id=".$media["media"]["id"]);
            exit;
        }
        catch (api_error $e)
        {
            $error = $e->getMessage();
        }
    }

    $account = api_account_info();

    if (!$account["is_logged_in"])
    {
        header("Location: ./media.php?id=".$media["media"]["id"]);
        exit;
    }
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
        align-items: start">
      <img
        src="./img/<?php echo $media["media"]["id"] ?>.jpg"
        style="width: min(40vw, 360px); aspect-ratio: 2/3;">
      <section class="glass panel" style="flex: 1; margin: 16px">
        <h1><?php echo $media["media"]["title"] ?></h1>
        <div>
          <?php
              if (is_float($media["rating"]))
              {
                  ?>
                    <rating-display>
                      <svg<?php
                          require $media["rating"] > 0.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["rating"] > 1.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["rating"] > 2.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["rating"] > 3.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                      <svg<?php
                          require $media["rating"] > 4.5
                              ? __DIR__."/part/star_filled_icon.php"
                              : __DIR__."/part/star_icon.php";
                      ?>svg>
                    </rating-display>
                    <span class="rating">(<?php
                        echo $media["rating_count"];
                    ?> <?php
                        echo $media["rating_count"] === 1 ? "rating" : "ratings";
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
    <section class="panel glass manual-shine" id="make-review">
      <form method="post">
        <h2 id="write">Write Review</h2>
        <text-area>
          <textarea
            class="glass"
            name="review"
            style="
              display: block;
              max-width: none"
            placeholder="Leave blank to post only the rating..."></textarea>
        </text-area>
        <div
          style="
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            align-items: stretch">
          <rating-selector>
            <input id="rating-star-1" type="radio" name="rating" value="1">
            <label for="rating-star-1">
              <svg class="off" <?php require __DIR__."/part/star_icon.php" ?>svg>
              <svg class="on" <?php require __DIR__."/part/star_filled_icon.php" ?>svg>
            </label>
            <input id="rating-star-2" type="radio" name="rating" value="2">
            <label for="rating-star-2">
              <svg class="off" <?php require __DIR__."/part/star_icon.php" ?>svg>
              <svg class="on" <?php require __DIR__."/part/star_filled_icon.php" ?>svg>
            </label>
            <input id="rating-star-3" type="radio" name="rating" value="3">
            <label for="rating-star-3">
              <svg class="off" <?php require __DIR__."/part/star_icon.php" ?>svg>
              <svg class="on" <?php require __DIR__."/part/star_filled_icon.php" ?>svg>
            </label>
            <input id="rating-star-4" type="radio" name="rating" value="4">
            <label for="rating-star-4">
              <svg class="off" <?php require __DIR__."/part/star_icon.php" ?>svg>
              <svg class="on" <?php require __DIR__."/part/star_filled_icon.php" ?>svg>
            </label>
            <input id="rating-star-5" type="radio" name="rating" value="5">
            <label for="rating-star-5">
              <svg class="off" <?php require __DIR__."/part/star_icon.php" ?>svg>
              <svg class="on" <?php require __DIR__."/part/star_filled_icon.php" ?>svg>
            </label>
          </rating-selector>
          <div
            style="
              display: flex;
              flex-flow: row nowrap;
              justify-content: start;
              align-items: stretch">
            <?php
                if (isset($error))
                {
                    ?><p class="error"><?php echo $error ?></p><?php
                }
            ?>
            <button class="glass" type="submit">Post</button>
          </div>
        </div>
      </form>
    </section>
  </main>
</body>
</html>