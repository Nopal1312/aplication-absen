<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from petugas where id='$id'");

header("location:../admin/admin.php?page=Petugas");

?>