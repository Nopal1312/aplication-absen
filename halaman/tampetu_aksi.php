<?php

include '../koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_petugas = $_POST['nama_petugas'];
$jk = $_POST['jk'];
$no_tlp = $_POST['no_tlp'];


mysqli_query($koneksi,"insert into petugas values('$id','$kode','$nama_petugas','$jk','$no_tlp')");

header("location:../admin/admin.php?page=Petugas");
?>