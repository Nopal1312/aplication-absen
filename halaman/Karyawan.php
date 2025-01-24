<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah Karyawan</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body >
       
       <!-- <h6 style="margin-top: 50px;" center> Data Karyawan</h6> -->

   </br>

      <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form method="post" class="d-flex" role="search">
        <input type="text" name="carii" placeholder="id" >
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>



       <div class="card">
  <div class="card-header">
   Data Karyawan 
  </div>
  <div class="card-body">
          <a href="../halaman/tamkar.php"> <button type="button" class="btn btn-info">Tambah Karyawan</button></a>
   </br>
   </br>
 
   
   <table class="table">
      <thead>
       <th>id</th>
          <th>nama</th>
          <th>jk</th>
          <th>notlp</th>
          <th>alamat</th>
          <th>divisi</th>
      </thead>
        <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi,"select * from karyawan INNER JOIN divisi on divisi.id_divisi = karyawan.divisi");
         if (isset($_POST['carii'])) {
               $carii = $_POST['carii'];
               $data = mysqli_query($koneksi, "Select * from karyawan INNER JOIN divisi on divisi.id_divisi = karyawan.divisi where nama like '%$carii%'");
          }
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <tbody>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jk']; ?></td>
        <td><?php echo $d['notlp']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['nama_divisi']; ?></td>
        <td>
            <a href="../halaman/editkar.php?id=<?php echo $d['id'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
            <a  onclick="return confirm('apakah ingin apus')" href="../halaman/hapuskar.php?id=<?php echo $d['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            <a href="../halaman/cetakkar.php?id=<?php echo $d['id']; ?>"><button type="button"
                      class="btn btn-info">Cetak Karyawan</button></a>
        </td>
      </tbody>
      <?php
      }
      ?>
    </table>
   
  </div>
</div>




   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>