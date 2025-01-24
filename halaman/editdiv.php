<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Ubah</title>
</head>
<body>
   <a href="../admin/admin.php?page=Divisi">kembali</a>
   <br/>
   <br/>
   <h3>EDIT DATA KARYAWAN</h3>
   <?php
   include '../koneksi.php';
  $id = $_GET['id_divisi'];
   $data = mysqli_query($koneksi,"select * from divisi where id_divisi='$id'");
   while ($d = mysqli_fetch_array($data)) {
   	?>
   	<form method="post" action="editdiv_aksi.php">
   	<table>
   		<tr>
   			<td>id_divisi</td>
   			<td><input type="text" name="id_divisi" value="<?php echo $d['id_divisi']; ?>"></td>
   		</tr>
   		<tr>
   			<td>nama_divisi</td>
   			<td><input type="text" name="nama_divisi" value="<?php echo $d['nama_divisi']; ?>"></td>
   		</tr>
   		
       
   			<tr>
   				<td></td>
   				<td><input onclick="return confirm('data tersimpan')" type="submit" value="SIMPAN"></td>
   			</tr>
   		</table>
   	</form>
   	<?php
   }
   ?>
</body>
</html>