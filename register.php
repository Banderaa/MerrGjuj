<?php
require_once "includes/header.php";
require "includes/db.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($username) || empty($email) || empty($password)) {
    if (empty($username)) {
      echo '<script> alert("Username is empty!")</script>';
    }

    if (empty($password)) {
      echo '<script> alert("Password is empty!")</script>';
    }

    if (empty($email)) {
      echo '<script> alert("Email is empty!")</script>';
    }
  } else {
    $encrypted_password = md5($password);
    $sql = "INSERT INTO users (`username`, `email`, `password`, `role_id`) VALUES ('$username', '$email', '$encrypted_password', '2')";
    $result = $conn->query($sql);
    if ($result) {
      header("Location: login.php");
      exit();
    } else {
      echo '<script> alert("Error while registering, please try again!")</script>';
    }
  }
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