


<?php
include '../koneksi.php';
$nomer = $_POST['nomer'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$nama_divisi = $_POST['nama_divisi'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$keterangan = $_POST['keterangan'];



mysqli_query($koneksi,"update absen set nama='$nama',nama_divisi='$nama_divisi',jam_masuk='$jam_masuk',jam_keluar='$jam_keluar',keterangan='$keterangan' where id='$id'");

header("location:../admin/admin.php?page=Absen");

?>