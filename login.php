<?php
    declare(strict_types=1);
    require_once __DIR__."/include/api/accounts.php";

    $posted_redirect = request_param("r");
    $posted_if_new = request_param_bool("new") ?? false;
    $posted_email = posted_param("email");
    $posted_password = posted_param("password");
    $posted_username = posted_param("username");
    $posted_identifier = posted_param("identifier")
        ?? $posted_email
        ?? $posted_username;

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        try
        {
            api_login();

            header("Location: ".($posted_redirect ?? "/"));
            exit;
        }
        catch (api_error $e)
        {
            $error = $e->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newly Nostalgic - Login</title>
  <?php require __DIR__."/part/default_head.php" ?>
</head>
<body>
  <section class="panel glass center manual-shine" id="login-or-create-account">
    <variant-div>
      <form
        id="create-account-form"
        class="create-account-variant variant-slide<?php
            if (!$posted_if_new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        method="post">
        <h1>Create Account</h1>
        <p>
          <label>Email</label>
          <br>
          <input
            id="create-account-email"
            name="email"
            type="email"
            class="glass"
            autocomplete="email"
            tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>"
            <?php
                if (!is_null($posted_email))
                {
                    ?>value="<?php echo $posted_email ?>"<?php
                }
            ?>>
        </p>
        <p>
          <label>Username</label>
          <br>
          <input
            id="create-account-username"
            name="username"
            type="text"
            class="glass"
            autocomplete="username"
            tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>"
            <?php
                if (!is_null($posted_username))
                {
                    ?>value="<?php echo $posted_username ?>"<?php
                }
            ?>>
        </p>
        <p>
          <label>Password</label>
          <br>
          <input
            id="create-account-password"
            name="password"
            type="password"
            class="glass"
            autocomplete="new-password"
            tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>">
        </p>
        <p>
          <label>Confirm Password</label>
          <br>
          <input
            id="create-account-confirm-password"
            name="confirm-password"
            type="password"
            class="glass"
            autocomplete="off"
            tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>">
        </p>
        <input type="hidden" name="new" value="">
        <?php
            if ($posted_if_new && isset($error))
            {
                ?><p class="error"><?php echo $error ?></p><?php
            }
        ?>
        <button
          id="create-account-submit"
          type="submit"
          class="glass"
          tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>">Create Account</button>
      </form>
      <form
        id="login-form"
        class="login-variant variant-slide<?php
            if ($posted_if_new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        action=""
        method="post">
        <h1>Login</h1>
        <p>
          <label>Email or Username</label>
          <br>
          <input
            id="login-identifier"
            name="identifier"
            type="email"
            class="glass"
            autocomplete="email"
            tabindex="<?php echo $posted_if_new ? "-1" : "0" ?>"
            <?php
                if (!is_null($posted_identifier))
                {
                    ?>value="<?php echo $posted_identifier ?>"<?php
                }
            ?>>
        </p>
        <p>
          <label>Password</label>
          <br>
          <input
            id="login-password"
            name="password"
            type="password"
            class="glass"
            autocomplete="password"
            tabindex="<?php echo $posted_if_new ? "-1" : "0" ?>">
        </p>
        <?php
            if (!$posted_if_new && isset($error))
            {
                ?><p class="error"><?php echo $error ?></p><?php
            }
        ?>
        <button
          id="login-submit"
          type="submit"
          class="glass"
          tabindex="<?php echo $posted_if_new ? "-1" : "0" ?>">Login</button>
      </form>
    </variant-div>
    <hr>
    <variant-div>
      <a
        id="create-account-instead"
        href="/login.php?new<?php
            if (!is_null($posted_redirect))
            {
                ?>&r=<?php echo urlencode($posted_redirect) ?><?php
            }
        ?>"
        class="login-variant variant-slide<?php
            if ($posted_if_new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        tabindex="<?php echo $posted_if_new ? "-1" : "0" ?>">
        Create Account Instead
      </a>
      <a
        id="login-instead"
        href="/login.php<?php
            if (!is_null($posted_redirect))
            {
                ?>?r=<?php echo urlencode($posted_redirect) ?><?php
            }
        ?>"
        class="create-account-variant variant-slide<?php
            if (!$posted_if_new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        tabindex="<?php echo $posted_if_new ? "0" : "-1" ?>">
        Use Existing Account Instead
      </a>
    </variant-div>
  </section>
</body>
</html>