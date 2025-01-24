<?php
include '../koneksi.php';
$tablekaryawan = mysqli_query ($koneksi,"select * from karyawan");
$datakaryawan = mysqli_num_rows($tablekaryawan);
$tablepetugas = mysqli_query ($koneksi,"select * from petugas");
$datapetugas = mysqli_num_rows($tablepetugas);
$tabledivisi = mysqli_query ($koneksi,"select * from divisi");
$datadivisi = mysqli_num_rows($tabledivisi);
$tableabsen = mysqli_query ($koneksi,"select * from absen");
$dataabsen = mysqli_num_rows($tableabsen);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
</style>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatibus ratione optio amet odio at fugiat totam? Perferendis asperiores perspiciatis nisi doloremque explicabo, accusantium quod natus laborum voluptatem animi molestiae.</p>
<h1>Dashboard</h1>
<p>beberapa fiturnya</p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>Karyawan</h3>
      <span class="font-bold text-title"><?php echo $datakaryawan; ?></span>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>Petugas</h3>
      <span class="font-bold text-title"><?php echo $datapetugas; ?></span>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-table"></i></p>
      <h3>Divisi</h3>
      <span class="font-bold text-title"><?php echo $datadivisi; ?></span>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-book"></i></p>
      <h3>Absen</h3>
      <span class="font-bold text-title"><?php echo $dataabsen; ?></span>
    </div>
  </div>
</div>



</body>
</html>
