<?php

include '../koneksi.php';

$idp= $_POST['idp'];






    mysqli_query($koneksi,"INSERT into absen select null,karyawan.id, karyawan.nama, divisi.nama_divisi, now(), null, 'Hadir' FROM karyawan INNER JOIN divisi on divisi.id_divisi = karyawan.divisi WHERE karyawan.id ='$idp' ");




// mysqli_query($koneksi,"UPDATE absen
// SET jam_keluar = CURRENT_TIME()
// WHERE id IN ($idp);
// ");

header("location:karyawanbuat.php");
?>