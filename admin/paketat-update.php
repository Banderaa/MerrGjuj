<?php
require_once 'includes/header.php';

require_once '../classes/Paketat.php';
if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    if (empty($name) || empty($content)) {
        echo "<script>alert('Please fill all inputs!')</script>";
    } else {

        $data = new Paketat();
        $updateImage = isset($_FILES['update_image']) ? $_FILES['update_image'] : null;
        $updateResult = $data->updatePaketa($id, $name, $content, $updateImage);

        if ($updateResult) {
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            echo "Update failed!";
        }
    }
}

$id = $_GET['id'];
$data = new Paketat();
$paketat  = $data->getPaketaDetails($id);

if ($paketat) {
    foreach ($paketat as $paketa) {
?>

        <form method='post' enctype="multipart/form-data">
            <img src="../<?php echo $paketa['image']; ?>" alt="" width='350px' style='object-fit:cover; border-radius:20px; margin: 10px;'>

            <input type="file" name="update_image" id="">

            <br>

            <div class="input_container">
                <input type="text" name="name" id="" value='<?php echo $paketa['title']; ?>'>
                <textarea name="content" id="" cols="30" rows="10"><?php echo $paketa['content']; ?></textarea>
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