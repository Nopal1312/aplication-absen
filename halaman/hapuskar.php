<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from karyawan where id='$id'");

header("location:../admin/admin.php?page=Karyawan");

?>