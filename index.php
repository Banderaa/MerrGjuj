<?php
require_once "includes/header.php";
require_once 'classes/Main.php';

$main = new Main();
$infos = $main->getPaketat();
$komentet = $main->getKomentet();
$banerat = $main->getBanerat();
?>
<div class="slider_header">
<?php
  if ($banerat) {
    foreach ($banerat as $baner) {
  ?>
  <div class="slide_header">
    <div class="content">
      <h2><?php echo $baner['title'];?></h2>
      <h3><?php echo $baner['subtitle'];?></h3>
      <button>
        <a href="paketat.php">Rezervoje tani <i class="fa-solid fa-calendar-days"></i></a>
      </button>
    </div>
    <img src="<?php echo $baner['image'];?>" alt="" />
  </div>
  <?php
    }
  } else {
    echo "Error fetching data.";
  }
  ?>
</div>

<div class="experiences">
  <h2>Poligoni MerrGjuj</h2>
  <h3>Eksperiencat të cilat mund ti provoni</h3>
  <br />
  <div class="boxes">
  <?php
  if ($infos) {
    foreach ($infos as $info) {
  ?>
    <div class="box">
      <a href="detajet-e-paketes.php?id=<?php echo $info['id'];?>">
        <img src="<?php echo $info['image'];?>" alt="" />
        <h4><?php echo $info['title'];?></h4>
        <p><?php echo $info['content'];?></p>
        <div class="buttons">
          <button>Rezrevoje tani</button>
          <button>Mëso më shumë</button>
        </div>
      </a>
    </div>
    <?php
    }
  } else {
    echo "Error fetching data.";
  }
  ?>
  </div>
</div>

<div class="specialevents">
  <img src="assets/images/special.jpg" alt="" />
  <div class="special_content">
    <h2>Special Events</h2>
    <div class="special_pagesa">
      <h6>Nga</h6>
      <span>100€</span>
    </div>
    <p>
      Come and Enroll in our Concealed Firearm Permit Course. Our class
      qualifies you to receive a CFP from Nevada and/or Florida.
    </p>
    <div class="buttons">
      <button>Rezrevoje tani</button>
      <button>Mëso më shumë</button>
    </div>
  </div>
</div>

<div class="comment_container">
  <h2>Eksperiencat</h2>
  <div class="slider">
  <?php
  if ($komentet) {
    foreach ($komentet as $komnet) {
  ?>
    <div class="box">
      <img src="<?php echo $komnet['image'];?>" alt="" />
      <div class="content">
        <h4><?php echo $komnet['title'];?></h4>
        <p><?php echo $komnet['content'];?></p>
      </div>
    </div>
    <?php
    }
  } else {
    echo "Error fetching data.";
  }
  ?>
  </div>
</div>

<?php
require_once "includes/footer.php";
?>