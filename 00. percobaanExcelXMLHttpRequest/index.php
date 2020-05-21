<?php
require_once 'MyClass/DatabaseFunc.php';
//$query = 'CREATE DATABASE usermysqltest';
//$query = 'create table user(id int(11) unsigned auto_increment primary key not null,username varchar(25) not null,email varchar(100) not null)';

//$query = 'SELECT COUNT(id) FROM mahasiswa';
//var_dump($row['COUNT(id)']);

//$query = 'SELECT SUM(id) FROM mahasiswa';
//var_dump($row['SUM(id)']);

//$query = 'SELECT AVG(id) FROM mahasiswa';
//var_dump($row['SVG(id)']);

// MENAMPILKAN NAMA-NAMA KOLOM
// $conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
// $query = 'SHOW COLUMNS FROM mahasiswa FROM db_mahasiswa';
// $result = mysqli_query($conn, $query);
// $rows = [];
// while ($row = mysqli_fetch_assoc($result)) {
//   $rows[] = $row;
// }
// foreach ($rows as $row) {
//   echo '' . $row['Field'] . '<br>';
// }


// MENAMBAH DATA BARU
// $conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
// $query = "INSERT INTO karyawan VALUES ('','Rahmat Xilva','komputerrumah100@gmail.com','2020-05-03')";
// $result = mysqli_query($conn, $query);


// SUMIFS MENGHASILKAN ARRAY
// $conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
// $query = "SELECT nama,tanggal,penjualan, IF(tanggal>='2020-01-01' AND tanggal<='2020-01-20' AND nama='ronal',penjualan,0) FROM penjualan";
// $result = mysqli_query($conn, $query);
// $rows = [];
// while ($row = mysqli_fetch_assoc($result)) {
//   $rows[] = $row;
// }
// $hasil = "IF(tanggal>='2020-01-01' AND tanggal<='2020-01-20' AND nama='ronal',penjualan,0)";
// foreach ($rows as $row) {
//   var_dump($row[$hasil]);
// }


// MEMBUAT TABLE BARU
// if (createNewTable('mynewtable') == 0) {
//   echo 'Succsess!';
// } else {
//   echo 'Failed!';
// }
// if (deleteTable('mynewtable') == 0) {
//   echo 'Succsess!';
// } else {
//   echo 'Failed!';
// }
$showDatabase = showdataBase('db_mahasiswa');



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/mystyle.css">
  <title>Hello, world!</title>
</head>

<body>

  <div class="container">

    <h1 id="header">SQL Syntax Using PHP</h1>

    <div class="formdiv">
      <button id="addNew">+</button>
      <form action="" method="POST">
        <div class="textcenterall">
          <h3>Create new table</h3>
          <input type="text" class="namaTable" id="namaTable">
          <button id="create">Create</button>
          <hr>
        </div>
        <ul></ul>
      </form>
    </div>

    <div class="showTable">
      <h3>Show Database</h3>
      <hr>
      <ul>
        <?php foreach ($showDatabase as $db) : ?>
        <li><?= $db['Database']; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="tampilTable"></div>

  </div>

  <script src="js/script.js"></script>
</body>

</html>