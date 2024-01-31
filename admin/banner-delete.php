<?php
require_once '../classes/Main.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $data = new Main();
    $deleteResult = $data->deleteBanner($id);

    if ($deleteResult) {
        echo '<script>window.location.href = "banner.php";</script>';
    } else {
        echo "Banner deletion failed!";
    }
} else {
    echo "Invalid Banner ID.";
}
?>
