<?php
require_once '../classes/Paketat.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $data = new Paketat();
    $deleteResult = $data->deletePaketa($id);

    if ($deleteResult) {
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Paketa deletion failed!";
    }
} else {
    echo "Invalid paketa ID.";
}
?>
