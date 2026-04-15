  class="glass panel"
  style="
    top: 0px;
    position: sticky;
    margin-top: 0;
    margin-inline: 16px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top: none;
    height: 48px;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-around;
    align-items: stretch;
    gap: 24px;
    z-index: 10">
  <a
    href="./"
    style="
      height: 100%;
      display: block;
      color: #FFFFFF;
      text-decoration: none">
    <svg style="height: 100%" <?php require __DIR__."/newly_nostalgic_logo_medium.php" ?>/svg>
  </a>
  <form
    action="./search.php"
    style="
      max-width: 600px;
      display: flex;
      flex-flow: row nowrap;
      justify-content: stretch;
      align-items: stretch;
      flex: 1">
    <input
      type="hidden"
      name="for"
      value="movies">
    <input
      id="search-text"
      style="
        min-width: none;
        max-width: none;
        margin-right: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        flex-grow: 1"
      class="glass"
      type="search"
      name="name"
      placeholder="Search...">
    <button
      style="
        margin-left: 0;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0"
      class="glass"
      type="submit">
      <svg style="height: 100%"<?php require __DIR__."/search_icon.php" ?>/svg>
    </button>
  </form>
  <div
    style="
      margin-inline: 16px;
      display: flex;
      flex-flow: row nowrap;
      justify-content: center;
      align-items: center;
      font-size: larger">
    <?php
        if ($account["is_logged_in"])
        {
            ?>
              <span><?php echo $account["username"] ?></span>
              <a href="./logout.php">Log Out</a>
            <?php
        }
        else
        {
            ?><a href="./login.php">Login</a><?php
        }
    ?>
  </div>
<