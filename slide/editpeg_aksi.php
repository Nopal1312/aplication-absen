<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$notlp = $_POST['notlp'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];


mysqli_query($koneksi,"update karyawan set nama='$nama',jk='$jk',notlp='$notlp',alamat='$alamat',divisi='$divisi' where id='$id'");

header("location:../petugas/petugas.php?page=Pegawai");

?>
