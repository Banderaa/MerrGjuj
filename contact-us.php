<?php
require_once "includes/header.php";

require_once 'classes/Main.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    if (empty($name) || empty($surname)|| empty($email)|| empty($desc)) {
        echo "<script>alert('Please fill all inputs!')</script>";
    } else {

        $data = new Main();
        $addResult = $data->contactUsSubmit($name, $surname, $email, $desc);

        if ($addResult) {
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            echo "Insert failed!";
        }
    }
}
?>

    <div class="contact_image">
      <img src="assets/images/contactus.jpg" alt="" />
      <div class="contact_content">
        <form action="" method="post">
          <div class="make_row" style="background: transparent">
            <input type="text" name="name" id="" placeholder="Name" />
            <input type="text" name="surname" id="" placeholder="Last Name" />
          </div>
          <input type="email" name="email" id="" placeholder="Email" />
          <textarea
            name="desc"
            id=""
            rows="4"
            placeholder="Description..."
          ></textarea>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
<?php
require_once "includes/footer.php";
?>
