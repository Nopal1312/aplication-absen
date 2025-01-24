<?php

include '../koneksi.php';

$id = $_GET['id_divisi'];

mysqli_query($koneksi,"delete from divisi where id_divisi='$id_divisi'");

header("location:../petugas/petugas.php?page=Unit");

?>