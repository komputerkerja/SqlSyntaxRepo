<?php
require_once 'DatabaseFunc.php';

if (isset($_GET['id'])) {
  $rows = showdataTables($_GET['id']);
} else {
  echo 'Somthing going wrong!';
  exit;
}

$namaTable = "Tables_in_" . $_GET['id'];

?>

<h3><?= $_GET['id']; ?></h3>
<ul>
  <?php foreach ($rows as $row) : ?>
  <li><?= $row[$namaTable]; ?></li>
  <?php endforeach; ?>
</ul>