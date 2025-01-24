<?php

include '../koneksi.php';

$idp= $_POST['idp'];
// $nama_divisi = $_POST['nama_divisi'];

//   mysqli_query($koneksi,"INSERT into absen select null,karyawan.id, karyawan.nama, divisi.nama_divisi, now(), null, 'Hadir' FROM karyawan INNER JOIN divisi on divisi.id_divisi = karyawan.divisi WHERE karyawan.id ='$idp' ");


 mysqli_query($koneksi,"INSERT into absen 
 select karyawan.id,
 karyawan.nama,
 divisi.nama_divisi,
 DATE(now()),TIME(now()),
 null,null,
 'Hadir' FROM karyawan
 INNER JOIN divisi on divisi.id_divisi = karyawan.divisi WHERE karyawan.id ='$idp'
 ON DUPLICATE KEY UPDATE absen.tglkeluar = DATE(now()) , jamkeluar =TIME(now());");
 

   
   
header("location:scan.php");  
?>