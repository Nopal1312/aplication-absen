<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama_petugas = $_POST['nama_petugas'];
$jk = $_POST['jk'];
$no_tlp = $_POST['no_tlp'];



mysqli_query($koneksi,"update petugas set nama_petugas='$nama_petugas',jk='$jk',no_tlp='$no_tlp' where id='$id'");

header("location:../admin/admin.php?page=Petugas");

?>
