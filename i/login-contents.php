<variant-div>
  <form
    id="login-form"
    class="login-variant variant-slide<?php if ($new) echo " hidden" ?>"
    method="post">
    <h1>Login</h1>
    <div>
      <label for="login-email"></label>
      <input
        id="login-email"
        name="email"
        type="email"
        autocomplete="email"
        tabindex="">
    </div>
    <div>
      <label for="login-password"></label>
      <input
        id="login-password"
        name="password"
        type="password"
        autocomplete="password"
        tabindex="<?php echo $new ? -1 : 0 ?>">
    </div>
    <button type="submit" tabindex="<?php echo $new ? -1 : 0 ?>">Login</button>
  </form>
  <form
    id="create-account-form"
    class="create-account-variant variant-slide<?php if (!$new) echo " hidden" ?>"
    method="post">
    <h1>Create Account</h1>
    <input type="hidden" name="new" value="">
    <div>
      <label for="create-account-email"></label>
      <input
        id="create-account-email"
        name="email"
        type="email"
        autocomplete="email"
        tabindex="<?php echo $new ? 0 : -1 ?>">
    </div>
    <div>
      <label for="create-account-password"></label>
      <input
        id="create-account-password"
        name="password"
        type="password"
        autocomplete="new-password"
        tabindex="<?php echo $new ? 0 : -1 ?>">
    </div>
    <div>
      <label for="create-account-confirm-password"></label>
      <input
        id="create-account-confirm-password"
        name="confirm-password"
        type="confirm-password"
        autocomplete="off"
        tabindex="<?php echo $new ? 0 : -1 ?>">
    </div>
    <button type="submit" tabindex="<?php echo $new ? 0 : -1 ?>">Create Account</button>
  </form>
</variant-div>
<hr>
<variant-div>
  <a
    id="create-account-instead"
    href="/login?new<?php if (is_string($redirect)) echo "&r=".urlencode($redirect) ?>"
    class="login-variant variant-slide<?php if ($new) echo " hidden" ?>"
    tabindex="<?php echo $new ? -1 : 0 ?>">
    Create Account Instead
  </a>
  <a
    id="login-instead"
    href="/login?<?php if (is_string($redirect)) echo "r=".urlencode($redirect) ?>"
    class="create-account-variant variant-slide<?php if (!$new) echo " hidden" ?>"
    tabindex="<?php echo $new ? 0 : -1 ?>">
    Use Existing Account Instead
  </a>
</variant-div>