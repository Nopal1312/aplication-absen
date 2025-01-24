<?php
include '../koneksi.php';
$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['nama_divisi'];


mysqli_query($koneksi,"update divisi set nama_divisi='$nama_divisi' where id_divisi='$id_divisi'");

header("location:../petugas/petugas.php?page=Unit");

?>
