<?php

include '../koneksi.php';

$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['nama_divisi'];

mysqli_query($koneksi,"insert into divisi values('$id_divisi','$nama_divisi')");

header("location:../petugas/petugas.php?page=Unit");
?>