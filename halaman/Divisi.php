 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <p>ini divisi</p>


   <h6> BEBERAPA DIVISI</h6>



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
    Divisi Kantor
  </div>
  <div class="card-body">
  	<a href="../halaman/tamdiv.php" button type="button" class="btn btn-success" >Tambah</button></a>
  	  
               <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Divisi</th>
     <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi,"select * from divisi");
         if (isset($_POST['carii'])) {
               $carii = $_POST['carii'];
               $data = mysqli_query($koneksi, "Select * from divisi where nama_divisi like '%$carii%'");
         }
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <tbody>
        <td><?php echo $d['id_divisi']; ?></td>
        <td><?php echo $d['nama_divisi']; ?></td>
        <td>
        	<a href="../halaman/editdiv.php?id_divisi=<?php echo $d['id_divisi'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
           <a onclick="return confirm('apakah ingin apus')" href="../halaman/hapusdiv.php?id_divisi=<?php echo $d['id_divisi'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
         
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