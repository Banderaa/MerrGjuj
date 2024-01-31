<?php
require_once 'includes/header.php';
require_once '../classes/Paketat.php';

$main = new Paketat();
$paketat = $main->getPaketat();
?>

<a href="paketat-add.php" class='btn_submit' style='margin:-15px;'>Add +</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  if ($paketat) {
    foreach ($paketat as $paketa) {
  ?>
    <tr>
      <th scope="row"><?php echo $paketa['id'];?></th>
      <td><img src="../<?php echo $paketa['image'];?>" alt="" width="80px" height="80px"></td>
      <td><?php echo $paketa['title'];?></td>
      <td><a href="paketat-update.php?id=<?php echo $paketa['id'];?>">Update</a></td>
      <td><a href="paketat-delete.php?id=<?php echo $paketa['id'];?>">Delete</a></td>
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