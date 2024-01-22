<?php
require_once "includes/header.php";
require_once 'classes/Main.php';

$main = new Main();
$paketat = $main->getPaketat();
?>

<div class="experiences">
  <h2>Poligoni MerrGjuj</h2>
  <h3>Eksperiencat të cilat mund ti provoni</h3>
  <br />
  <div class="boxes">
  <?php
  if ($paketat) {
    foreach ($paketat as $paketa) {
  ?>
    <div class="box">
      <a href="detajet-e-paketes.php?id=<?php echo $paketa['id'];?>">
        <img src="<?php echo $paketa['image'];?>" alt="" />
        <h4><?php echo $paketa['title'];?></h4>
        <p><?php echo $paketa['content'];?></p>
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


<?php
require_once "includes/footer.php";
?>