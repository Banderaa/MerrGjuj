<?php
require_once 'includes/header.php';

require_once '../classes/Main.php';
if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];

    if (empty($title) || empty($subtitle)) {
        echo "<script>alert('Please fill all inputs!')</script>";
    } else {

        $data = new Main();
        $updateImage = isset($_FILES['update_image']) ? $_FILES['update_image'] : null;
        $updateResult = $data->updateBanner($id, $title, $subtitle, $updateImage);

        if ($updateResult) {
            echo '<script>window.location.href = "banner.php";</script>';
            exit();
        } else {
            echo "Update failed!";
        }
    }
}

$id = $_GET['id'];
$data = new Main();
$banerat  = $data->getBaneratById($id);

if ($banerat) {
    foreach ($banerat as $baner) {
?>

        <form method='post' enctype="multipart/form-data">
            <img src="../<?php echo $baner['image']; ?>" alt="" width='350px' style='object-fit:cover; border-radius:20px; margin: 10px;'>
            <input type="file" name="update_image" id="">
            <br>
            <div class="input_container">
                <input type="text" name="title" id="" value='<?php echo $baner['title']; ?>'>
                <input type="text" name="subtitle" id="" value='<?php echo $baner['subtitle']; ?>'>
            </div>

            <button type="submit" name='submit' class='btn_submit'>Update</button>
        </form>
<?php
    }
} else {
    echo "Error fetching data.";
}
require_once 'includes/footer.php';
?>