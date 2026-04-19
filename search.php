<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";
    require_once __DIR__."/include/api/search.php";

    $account = api_account_info();

    $connection = new database_access();

    $genres = $connection->select_genres();

    $no_genres = true;
    foreach ($genres as $genre)
    {
        if (request_param_bool($genre["name"]) === null)
            continue;

        $no_genres = false;
        break;
    }

    if (!$no_genres)
    {
        $no_genres = true;
        foreach ($genres as $genre)
        {
            if (request_param_bool($genre["name"]) === true)
                continue;

            $no_genres = false;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newly Nostalgic</title>
  <?php require __DIR__."/part/default_head.php" ?>
  <script type="module" src="./js/page/search.js"></script>
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
      justify-content: start;
      align-items: start;
      gap: 8px">
    <aside
      style="
        top: 42px;
        position: sticky;
        width: min(30vw, 400px);
        flex-shrink: 0">
      <h1>Search</h1>
      <form id="search-for-movies" action="./search.php">
        <h2>For Movies</h2>
        <input
          type="hidden"
          name="for"
          value="movies">
        <?php
            $posted_with_person = request_param_int("with_person");
            if (is_int($posted_with_person))
            {
                ?>
                  <button
                    id="involving-person"
                    class="glass"
                    type="button"
                    onclick="document.querySelectorAll('#involving-person, #involving-person-via').forEach((x) => x.remove())">
                    Involving <?php echo $connection->select_person_with_id($posted_with_person)["full_name"] ?>
                    <svg style="height: 1em" <?php require __DIR__."/part/cross_icon.php" ?>/svg>
                    <input
                      type="hidden"
                      name="with_person"
                      value="<?php echo $posted_with_person ?>">
                  </button>
                <?php

                $posted_through = request_param("through");
                if (is_string($posted_through))
                {
                    ?>
                      <button
                        id="involving-person-via"
                        class="glass"
                        type="button"
                        onclick="document.querySelectorAll('#involving-person-via').forEach((x) => x.remove())">
                        As <?php
                            switch ($posted_through)
                            {
                                case "cast": echo "cast"; break;
                                case "writer": echo "a writer"; break;
                                case "director": echo "a director"; break;
                                default: echo "a "; echo $posted_through; break;
                            }
                        ?>
                        <svg style="height: 1em" <?php require __DIR__."/part/cross_icon.php" ?>/svg>
                        <input
                          type="hidden"
                          name="through"
                          value="<?php echo $posted_through ?>">
                      </button>
                    <?php
                }
            }
        ?>
        <div>
          <label for="search-movie-only-fav">Only Show Favorites</label>
          <input
            id="search-movie-only-fav"
            type="checkbox"
            name="only-fav"
            <?php if (request_param_bool("only-fav") ?? false) echo "checked" ?>>
        </div>
        <div>
          <input
            id="search-movie-name"
            class="glass"
            type="search"
            name="name"
            placeholder="Name..."
            <?php
                $posted_search_name = request_param("name");
                if (is_string($posted_search_name))
                {
                    ?>value="<?php echo $posted_search_name ?>"<?php
                }
            ?>>
        </div>
        <details <?php if (!$no_genres) echo "open" ?>>
          <summary style="font-size: large; font-weight: bold">Genres</summary>
          <ul>
            <?php
                foreach ($genres as $genre)
                {
                    ?>
                      <li>
                        <label
                          for="search-movie-genre-<?php echo $genre["id"] ?>">
                          <?php
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
                          ?>
                        </label>
                        <input
                          id="search-movie-genre-<?php echo $genre["id"] ?>"
                          class="glass"
                          type="checkbox"
                          name="<?php echo $genre["name"] ?>"
                          <?php
                              if ($no_genres || (request_param_bool($genre["name"]) ?? false))
                              {
                                  ?>checked<?php
                              }
                          ?>>
                      </li>
                    <?php
                }
            ?>
          </ul>
        </details>
        <button
          class="glass"
          type="submit">Search Movies</button>
      </form>
    </aside>
    <div
      id="search-results"
      style="
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        align-items: start;
        align-content: center;
        gap: 8px">
      <?php
          switch (request_param("for"))
          {
              case "movies":
              {
                  $media = api_search_media();
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

                  break;
              }
          }
      ?>
    </div>
  </main>
</body>
</html>