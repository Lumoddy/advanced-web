<?php
    declare(strict_types=1);
  try {
    require_once $_SERVER["DOCUMENT_ROOT"]."/include/api/accounts.php";

    session_start();

    $redirect = request_param("r");

    $new = request_param_bool("new") ?? false;

    $posted_email = posted_param("email");
    $posted_password = posted_param("password");
    $posted_username = posted_param("username");
    $posted_identifier = posted_param("identifier")
        ?? $posted_email
        ?? $posted_username;

    if ($new
        ? !is_null($posted_email)
            || !is_null($posted_password)
            || !is_null($posted_username)
        : !is_null($posted_identifier)
            || !is_null($posted_password))
    {
        try
        {
            api_login();

            header("Location: ".($redirect ?? "/"));
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
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/common.css">
  <script type="module" src="/js/common.js"></script>
</head>
<body>
  <section class="panel glass center manual-shine" id="login-or-create-account">
    <variant-div>
      <form
        id="create-account-form"
        class="create-account-variant variant-slide<?php
            if (!$new)
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
            tabindex="<?php echo $new ? "0" : "-1" ?>"
            <?php
                if (!is_null($posted_email))
                {
                    ?>value="<?php
                    echo $posted_email
                    ?>"<?php
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
            tabindex="<?php echo $new ? "0" : "-1" ?>"
            <?php
                if (!is_null($posted_username))
                {
                    ?>value="<?php
                    echo $posted_username
                    ?>"<?php
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
            tabindex="<?php echo $new ? "0" : "-1" ?>">
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
            tabindex="<?php echo $new ? "0" : "-1" ?>">
        </p>
        <input type="hidden" name="new" value="">
        <?php
            if ($new && is_string($error))
            {
                ?><p class="error"><?php
                echo $error;
                ?></p><?php
            }
        ?>
        <button
          id="create-account-submit"
          type="submit"
          class="glass"
          tabindex="<?php echo $new ? "0" : "-1" ?>">Create Account</button>
      </form>
      <form
        id="login-form"
        class="login-variant variant-slide<?php
            if ($new)
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
            tabindex="<?php echo $new ? "-1" : "0" ?>"
            <?php
                if (!is_null($posted_identifier))
                {
                    ?>value="<?php
                    echo $posted_identifier
                    ?>"<?php
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
            tabindex="<?php echo $new ? "-1" : "0" ?>">
        </p>
        <?php
            if (!$new && is_string($error))
            {
                ?><p class="error"><?php
                echo $error;
                ?></p><?php
            }
        ?>
        <button
          id="login-submit"
          type="submit"
          class="glass"
          tabindex="<?php echo $new ? "-1" : "0" ?>">Login</button>
      </form>
    </variant-div>
    <hr>
    <variant-div>
      <a
        id="create-account-instead"
        href="/login.php?new<?php
            if (!is_null($redirect))
            {
                ?>&r=<?php
                echo urlencode($redirect);
            }
        ?>"
        class="login-variant variant-slide<?php
            if ($new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        tabindex="<?php echo $new ? "-1" : "0" ?>">
        Create Account Instead
      </a>
      <a
        id="login-instead"
        href="/login.php<?php
            if (!is_null($redirect))
            {
                ?>?r=<?php
                echo urlencode($redirect);
            }
        ?>"
        class="create-account-variant variant-slide<?php
            if (!$new)
            {
                ?> variant-slide-hidden<?php
            }
        ?>"
        tabindex="<?php echo $new ? "0" : "-1" ?>">
        Use Existing Account Instead
      </a>
    </variant-div>
  </section>
</body>
</html>
<?php
}
        catch (Throwable $e)
        {
            echo $e;
            exit;
        }
?>