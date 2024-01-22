<?php
require_once 'includes/header.php';

require_once 'classes/Paketat.php';
$id = $_GET['id'];
$main = new Paketat();
$paketa = $main->getPaketaDetails($id);
?>

<div class="mian_detajet">
    <?php
    if ($paketa) {
        foreach ($paketa as $paket) {
    ?>
        <img src="<?php echo $paket['image'];?>" alt="" class="detajet_foto">

        <div class="detajet_content">
            <h3><?php echo $paket['title'];?></h3>
            <p><?php echo $paket['content'];?></p>
        </div>
    <?php
        }
    } else {
        echo "Error fetching data.";
    }
    ?>
</div>

<?php
require_once 'includes/footer.php';
?>