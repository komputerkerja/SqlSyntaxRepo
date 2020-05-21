<?php
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


$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
$query = "SELECT nama,tanggal,penjualan, IF(tanggal>='2020-01-01' AND tanggal<='2020-01-20' AND nama='ronal',penjualan,0) FROM penjualan";
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

var_dump(count($rows));

if (mysqli_errno($conn) == 0) {
  echo 'Sucses<br>';
} else {
  echo "Failed!<br>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello, world!</title>
</head>

<body>

  <h1 id="header">SQL Syntax Using PHP</h1>



</body>

</html>