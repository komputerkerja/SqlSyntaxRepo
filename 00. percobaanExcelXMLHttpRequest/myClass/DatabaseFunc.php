<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('TB_MAHASISWA', 'mahasiswa');
define('TB_PENJUALAN', 'penjualan');


function dbConnection($dbname)
{
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, $dbname);
  return $conn;
}

function showAllData($dbname)
{
  $conn = dbConnection($dbname);
  $query = "SELECT * FROM " . TB_PENJUALAN;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function sumifsPenjualan($date1, $date2, $dbname)
{
  $conn = dbConnection($dbname);
  $query = "SELECT nama,tanggal,penjualan, IF(tanggal>='" . $date1 . "' AND tanggal<='" . $date2 . "' ,penjualan,0) FROM " . TB_PENJUALAN;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function createNewTable($tableName, $dbname)
{
  $conn = dbConnection($dbname);
  $query = "create table " . $tableName .
    "(id int(11) unsigned auto_increment primary key not null," .
    "username varchar(25) not null," .
    "email varchar(100) not null)";

  mysqli_query($conn, $query);
  return mysqli_error($conn);
}

function deleteTable($tableName, $dbname)
{
  $conn = dbConnection($dbname);
  $query = "DROP TABLE " . $tableName . "";
  mysqli_query($conn, $query);
  return mysqli_error($conn);
}



function showdataBase($dbname)
{
  $conn = dbConnection($dbname);
  $query = "SHOW DATABASES";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function showdataTables($dbname)
{
  $conn = dbConnection($dbname);
  $query = "SHOW TABLES";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}