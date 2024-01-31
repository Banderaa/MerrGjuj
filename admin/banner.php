<?php
require_once 'includes/header.php';
require_once '../classes/Main.php';

$main = new Main();
$bannerat = $main->getBanerat();
?>

<a href="banner-add.php" class='btn_submit' style='margin:-15px;'>Add +</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  if ($bannerat) {
    foreach ($bannerat as $banner) {
  ?>
    <tr>
      <th scope="row"><?php echo $banner['id'];?></th>
      <td><img src="../<?php echo $banner['image'];?>" alt="" width="130px" height="80px"></td>
      <td><?php echo $banner['title'];?></td>
      <td><?php echo $banner['subtitle'];?></td>
      <td><a href="banner-update.php?id=<?php echo $banner['id'];?>">Update</a></td>
      <td><a href="banner-delete.php?id=<?php echo $banner['id'];?>">Delete</a></td>
    </tr>
    <?php
    }
  } else {
    echo "Error fetching data.";
  }
  ?>
  </tbody>
</table>
<p>nadi</p>

<?php
require_once 'includes/footer.php';
?>