<?php
require_once "includes/header.php";
require_once 'classes/About.php';

$about = new About();
$infos = $about->getAbout();
?>

<div class="aboutbanner">
  <h2>About us</h2>
  <img src="assets/images/aboutus.jpg" alt="" />
</div>

<div class="aboutcontent">

  <?php
  if ($infos) {
    foreach ($infos as $info) {
  ?>
      <div class="isa">
        <img src="<?php echo $info['image']; ?>" alt="" />
        <div>
          <h3><?php echo $info['title']; ?> :</h3>
          <p><?php echo $info['content']; ?></p>
        </div>
      </div>
  <?php
    }
  } else {
    echo "Error fetching users.";
  }
  ?>
</div>

<?php
require_once "includes/footer.php";
?>