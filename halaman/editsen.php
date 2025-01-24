<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Ubah</title>
</head>
<body>
   <a href="../admin/admin.php?page=Absen">kembali</a>
   <br/>
   <br/>
   <h3>EDIT ABSEN</h3>
   <?php
   include '../koneksi.php';
  $id = $_GET['id'];
   $data = mysqli_query($koneksi,"select * from absen where id='$id'");
   while ($d = mysqli_fetch_array($data)) {
   	?>
   	<form method="post" action="editsen_aksi.php">
   	<table>
   		<tr>
   			<td>id</td>
   			<td><input type="text" name="id" value="<?php echo $d['id']; ?>"></td>
   		</tr>
   		<tr>
   			<td>nama</td>
   			<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
   		</tr>
   		
           <tr>
			<td>nama_divisi</td>
             <td><select name="nama_divisi">
             <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi,"select * from divisi");
      while ($d = mysqli_fetch_array($data)) {
      ?>
            	<option> <?php echo $d['nama_divisi']; ?></option>
            <?php } ?>
             </select></td>
            
		</tr>

        <tr>
			<td>jam_masuk</td>
            <td><input type="DateTime" name="jam_masuk"></td>
		</tr>

        
         <tr>
			<td>jam_keluar</td>
             <td><input type="time" name="jam_keluar"></td>
		</tr>

        <tr>
			<td>keterangan</td>
             <td><select name="keterangan">
            	<option>Hadir</option>
            	<option>Sakit</option>
                <option>Alfa</option>
            </select></td>
		</tr>
       
   			<tr>
   				<td></td>
   				<td><input  type="submit" value="SIMPAN"></td>
   			</tr>
   		</table>
   	</form>
   	<?php
   }
   ?>
</body>
</html>