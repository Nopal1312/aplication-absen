<?php

include '../koneksi.php';
$nomer =  $_POST['nomer'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$nama_divisi = $_POST['nama_divisi'];
$tglmasuk = $_POST['tglmasuk'];
$jammasuk = $_POST['jammasuk'];
$tglkeluar = $_POST['tglkeluar'];
$jamkeluar = $_POST['jamkeluar'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi,"insert into absen values('$nomer','$id','$nama','$nama_divisi','$tglmasuk','$jammasuk','$tglkeluar','$jamkeluar','$keterangan')");

header("location:../admin/admin.php?page=Absen");
?>