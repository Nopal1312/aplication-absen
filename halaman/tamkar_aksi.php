<?php

include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$notlp = $_POST['notlp'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];

mysqli_query($koneksi,"insert into karyawan values('$id','$nama','$jk','$notlp','$alamat','$divisi')");

header("location:../admin/admin.php?page=Karyawan");
?>