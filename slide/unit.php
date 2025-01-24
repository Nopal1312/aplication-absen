
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   


   <h6>BEBERAPA UNIT DI KANTOR INI</h6>


   <div class="card"> 
  <div class="card-header">
    Divisi Kantor
  </div>

  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form method="post" class="d-flex" role="search">
        <input type="text" name="carii" placeholder="id">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="card-body">
  	<a href="../slide/tamunit.php" button type="button" class="btn btn-success" >Tambah</button></a>
  	  
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
        	<a href="../slide/editunit.php?id_divisi=<?php echo $d['id_divisi'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
           <a onclick="return confirm('apakah ingin apus')" href="../slide/hapusunit.php?id=<?php echo $d['id_divisi'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
         
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