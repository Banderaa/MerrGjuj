<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/images/icon.png" type="image/png" />
  <title>Merregjuj</title>
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- font awesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="assets/images/Logo.png" alt="merregjuj" width="200px" /></a>
    </div>
    <div class="link">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="about-us.php">About us</a>
        </li>
        <li>
          <a href="contact-us.php">Contact us</a>
        </li>
        <li>
          <a href="paketat.php">Paketat</a>
        </li>
      </ul>
    </div>
    <?php
    if (isset($_SESSION['user_id'])) {

    ?>
      <div class="login">
        <ul>
          <li>
            <a href="login.php"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['username']; ?></a>
          </li>
          <li>
            <a href="includes/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
          </li>
        </ul>
      </div>
    <?php
    } else {
    ?>

      <div class="login">
        <ul>
          <li>
            <a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          <li>
            <a href="register.php"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
        </ul>
      </div>
    <?php
    }
    ?>

    <div class="burger">
      <a href="javascript:void(0);" onclick="toggleBurger()" style="color:white">
        <i class="fa-solid fa-bars"></i>
      </a>
    </div>


  </header>
  <div class="burger_content">
    <div class="burger_link">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="about-us.php">About us</a>
        </li>
        <li>
          <a href="contact-us.php">Contact us</a>
        </li>
        <li>
          <a href="paketat.php">Paketat</a>
        </li>
      </ul>
    </div>

    <?php
    if (isset($_SESSION['user_id'])) {

    ?>
      <div class="burger_login">
        <ul>
          <li>
            <a href="login.php"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['username']; ?></a>
          </li>
          <li>
            <a href="includes/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
          </li>
        </ul>
      </div>
    <?php
    } else {
    ?>

      <div class="burger_login">
        <ul>
          <li>
            <a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          <li>
            <a href="register.php"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
        </ul>
      </div>
    <?php
    }
    ?>

  </div>

  <script>
    function toggleBurger() {
      var burgerContent = document.querySelector('.burger_content');

      // Toggle the display property and visibility with animation
      if (burgerContent.style.right === '0px') {
        burgerContent.style.right = '-300px';

        // Wait for the transition to end before changing the display property
        burgerContent.addEventListener('transitionend', function onTransitionEnd() {
          burgerContent.style.display = 'none';
          burgerContent.removeEventListener('transitionend', onTransitionEnd);
        });
      } else {
        burgerContent.style.display = 'block';
        burgerContent.style.right = '0px';
      }
    }

    // Close the burger menu when clicking outside of it
    document.addEventListener('click', function(event) {
      var burgerContent = document.querySelector('.burger_content');
      var burgerButton = document.querySelector('.burger');

      if (!burgerContent.contains(event.target) && !burgerButton.contains(event.target)) {
        if (burgerContent.style.right === '0px') {
          burgerContent.style.right = '-300px';

          // Wait for the transition to end before changing the display property
          burgerContent.addEventListener('transitionend', function onTransitionEnd() {
            burgerContent.style.display = 'none';
            burgerContent.removeEventListener('transitionend', onTransitionEnd);
          });
        }
      }
    });
  </script>