<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <p>pengabsenan</p>


   <h6> TES</h6>



  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form method="post" class="d-flex" role="search">
        <input type="text" name="carii" placeholder="nama" >
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>



   <div class="card"> 
  <div class="card-header">
    Absen Kantor
  </div>
  <div class="card-body">
  	<a href="../halaman/tamsen.php" button type="button" class="btn btn-success" >Tambah</button></a>
    <a href="../halaman/scan.php" button type="button" class="btn btn-primary">Scan Sekarang</a>
  	  
               <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col"> nama</th>
      <th scope="col">Nama Divisi</th>
      <th scope="col">tgl masuk</th>
      <th scope="col"> Jam Masuk</th>
      <th scope="col">tgl keluar</th>
      <th scope="col"> Jam Keluar</th>
      <th scope="col"> Keterangan</th>
     <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi,"select * from absen");
         if (isset($_POST['carii'])) {
               $carii = $_POST['carii'];
               $data = mysqli_query($koneksi, "Select * from absen where nama like '%$carii%'");
         }
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <tbody>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['nama_divisi']; ?></td>
        <td><?php echo $d['tglmasuk']; ?></td>
        <td><?php echo $d['jammasuk']; ?></td>
        <td><?php echo $d['tglkeluar']; ?></td>
        <td><?php echo $d['jamkeluar']; ?></td>
        <td><?php echo $d['keterangan']; ?></td>
        <td>
        	<!-- <a href="../halaman/editsen.php?id=<?php echo $d['id'];?>"><button type="button" class="btn btn-warning">Edit</button></a> -->
           <a onclick="return confirm('apakah ingin apus')" href="../halaman/hapussen.php?id=<?php echo $d['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
         
        </td>
      </tbody>
      <?php
      }
      ?>
    </tr>
  </thead>
</table>
  </div>
</div>
</body>
</html>