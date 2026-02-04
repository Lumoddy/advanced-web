<script type="module">

    import { manualShine } from "/js/common.js";

    function variantSlideHide(element)
    {
        element.classList.add("variant-slide-hidden");
        element.animate(
            [
                { translate: "0 0", opacity: 1.0 },
                { opacity: 0.0 },
                { translate: "-20px 0", opacity: 0.0 },
            ],
            {
                duration: 200,
                easing: "ease-out",
            });
    }

    function variantSlideShow(element)
    {
        element.classList.remove("variant-slide-hidden");
        element.animate(
            [
                { translate: "20px 0", opacity: 0.0 },
                { opacity: 0.0 },
                { translate: "0 0", opacity: 1.0 },
            ],
            {
                duration: 200,
                easing: "ease-out",
            });
    }

    function variantToLogin()
    {
        document.querySelectorAll(".login-variant")
            .forEach(variantSlideShow);
        document.querySelectorAll(".create-account-variant")
            .forEach(variantSlideHide);
        document.querySelectorAll("#login-form [tabindex], #create-account-instead")
            .forEach((x) => x.tabIndex = 0);
        document.querySelectorAll("#create-account-form [tabindex], #login-instead")
            .forEach((x) => x.tabIndex = -1);
        document.querySelector("#login-form input").focus();
        manualShine(document.getElementById("login-form").parentElement.parentElement);
    }

    function variantToCreateAccount()
    {
        document.querySelectorAll(".create-account-variant")
            .forEach(variantSlideShow);
        document.querySelectorAll(".login-variant")
            .forEach(variantSlideHide);
        document.querySelectorAll("#create-account-form [tabindex], #login-instead")
            .forEach((x) => x.tabIndex = 0);
        document.querySelectorAll("#login-form [tabindex], #create-account-instead")
            .forEach((x) => x.tabIndex = -1);
        document.querySelector("#create-account-form input").focus();
        manualShine(document.getElementById("login-form").parentElement.parentElement);
    }

    window.addEventListener("popstate", (e) =>
    {
        if (!/^\/login.php(?:$|\/)/.test(location.pathname))
            return;

        if (new URLSearchParams(location.search).get("new") === null)
            variantToLogin();
        else
            variantToCreateAccount();
    });

    document.getElementById("login-instead")
        .addEventListener("click", (e) =>
        {
            e.preventDefault();
            history.pushState(history.state, "", `/login.php<?php
                if (is_string($redirect)) echo "?r=".urlencode($redirect);
            ?>`);
            variantToLogin();
        });

    document.getElementById("create-account-instead")
        .addEventListener("click", (e) =>
        {
            e.preventDefault();
            history.pushState(history.state, "", `/login.php?new<?php
                if (is_string($redirect)) echo "&r=".urlencode($redirect);
            ?>`);
            variantToCreateAccount();
        });

</script>
<variant-div>
  <form
    id="login-form"
    class="login-variant variant-slide<?php
        if ($new) echo " variant-slide-hidden";
    ?>"
    method="post">
    <h1>Login</h1>
    <p>
      <label>Email</label>
      <br>
      <input
        id="login-email"
        name="email"
        type="email"
        class="glass"
        autocomplete="email"
        tabindex="<?php echo $new ? -1 : 0 ?>">
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
        tabindex="<?php echo $new ? -1 : 0 ?>">
    </p>
    <button
      type="submit"
      class="glass"
      tabindex="<?php echo $new ? -1 : 0 ?>">Login</button>
  </form>
  <form
    id="create-account-form"
    class="create-account-variant variant-slide<?php
        if (!$new) echo " variant-slide-hidden";
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
        tabindex="<?php echo $new ? 0 : -1 ?>">
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
        tabindex="<?php echo $new ? 0 : -1 ?>">
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
        tabindex="<?php echo $new ? 0 : -1 ?>">
    </p>
    <input type="hidden" name="new" value="">
    <button
      type="submit"
      class="glass"
      tabindex="<?php echo $new ? 0 : -1 ?>">Create Account</button>
  </form>
</variant-div>
<hr>
<variant-div>
  <a
    id="create-account-instead"
    href="/login.php?new<?php
        if (is_string($redirect)) echo "&r=".urlencode($redirect);
    ?>"
    class="login-variant variant-slide<?php
        if ($new) echo " variant-slide-hidden";
    ?>"
    tabindex="<?php echo $new ? -1 : 0 ?>">
    Create Account Instead
  </a>
  <a
    id="login-instead"
    href="/login.php<?php
        if (is_string($redirect)) echo "?r=".urlencode($redirect);
    ?>"
    class="create-account-variant variant-slide<?php
        if (!$new) echo " variant-slide-hidden";
    ?>"
    tabindex="<?php echo $new ? 0 : -1 ?>">
    Use Existing Account Instead
  </a>
</variant-div>