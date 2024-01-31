<?php
require_once 'includes/header.php';

require_once '../classes/Main.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];

    if (empty($title) || empty($subtitle)) {
        echo "<script>alert('Please fill all inputs!')</script>";
    } else {

        $data = new Main();
        $addImage = isset($_FILES['update_image']) ? $_FILES['update_image'] : null;
        $addResult = $data->insertBanner($title, $subtitle, $addImage);

        if ($addResult) {
            echo '<script>window.location.href = "banner.php";</script>';
            exit();
        } else {
            echo "Insert failed!";
        }
    }
}
?>

<form method='post' enctype="multipart/form-data">
    <img src="../assets/images/logo.png" alt="" width='350px' style='object-fit:cover; border-radius:20px; margin: 10px;'>

    <input type="file" name="update_image" id="">

    <br>

    <div class="input_container">
        <input type="text" name="title" id="">
        <input type="text" name="subtitle" id="">
    </div>

    <button type="submit" name='submit' class='btn_submit'>Add Banner</button>
</form>
<?php
require_once 'includes/footer.php';
?>