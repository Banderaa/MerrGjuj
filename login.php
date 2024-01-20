<?php
require_once "includes/header.php";
require "includes/db.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    if (empty($username)) {
      echo '<script> alert("Username is empty!")</script>';
    }

    if (empty($password)) {
      echo '<script> alert("Password is empty!")</script>';
    }
  } else {
    $encrypted_password = md5($password);
    $sql = "SELECT id, username FROM users WHERE (username = '$username' OR email = '$username') AND password = '$encrypted_password'";
    $result = $conn->query($sql);
    if ($result) {
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: index.php");
        exit();
      } else {
        echo '<script> alert("Invalid username or password!")</script>';
      }
    } else {
      echo '<script> alert("Error while login, please try again!")</script>';
    }
  }
}
?>
<div class="form">
  <img src="assets/images/register.jpg" alt="" />
  <form id="loginForm" method="post">
    <input type="text" name="username" id="username" placeholder="Username" />
    <input type="password" name="password" id="password" placeholder="Password" />

    <span id="setError" class="error"></span>
    <br />
    <button type="submit" name="submit">Login</button>
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