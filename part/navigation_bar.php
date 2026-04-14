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
    justify-content: stretch;
    align-items: stretch;
    z-index: 10">
  <a href="./" style="display: block">
    <svg style="height: 100%" <?php require __DIR__."/newly_nostalgic_logo_medium.php" ?>/svg>
  </a>
  <?php
      $account = api_account_info();

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
<