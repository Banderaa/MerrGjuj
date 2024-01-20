<?php
require_once "includes/header.php";
require_once "classes/Users.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $register = new Users();
  $register->attemptRegister($username, $email, $password);
}
?>

<div class="form">
  <img src="assets/images/login.jpg" alt="" />
  <form id="loginForm" method="post">
    <input type="text" name="username" id="username" placeholder="Username" />
    <input type="email" name="email" id="email" placeholder="Email" />
    <input type="password" name="password" id="password" placeholder="Password" />

    <span id="setError" class="error"></span>
    <br />
    <button name="submit" type="submit">Register</button>
  </form>
</div>

<?php
require_once "includes/footer.php";
?>