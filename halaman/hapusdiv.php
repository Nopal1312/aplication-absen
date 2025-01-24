<?php

include '../koneksi.php';

$id_divisi = $_GET['id_divisi'];

mysqli_query($koneksi,"delete from divisi where id_divisi='$id_divisi'");

header("location:../admin/admin.php?page=Divisi");

?>