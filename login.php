<?php
require_once "includes/header.php";
?>
<div class="form">
  <img src="assets/images/register.jpg" alt="" />
  <form id="loginForm" action="" onsubmit="return validateForm()">
    <input type="text" name="username" id="username" placeholder="Username" />
    <input type="password" name="password" id="password" placeholder="Password" />

    <span id="setError" class="error"></span>
    <br />
    <button type="submit">Login</button>
  </form>
</div>

<script>
  function validateForm() {
    document.getElementById("setError").textContent = "";

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() === "") {
      document.getElementById("setError").textContent =
        "Username is required";
      return false;
    }
    if (password.trim() === "") {
      document.getElementById("setError").textContent =
        "Password is required";
      return false;
    }
    return true;
  }
</script>

<?php
require_once "includes/footer.php";
?>