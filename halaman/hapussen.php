<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from absen where id='$id'");

header("location:../admin/admin.php?page=Absen");

?>