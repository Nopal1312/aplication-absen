<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Ubah</title>
</head>
<body>
   <a href="../admin/admin.php?page=Petugas">kembali</a>
   <br/>
   <br/>
   <h3>EDIT DATA Petugas</h3>
   <?php
   include '../koneksi.php';
  $id = $_GET['id'];
   $data = mysqli_query($koneksi,"select * from petugas where id='$id'");
   while ($d = mysqli_fetch_array($data)) {
   	?>
   	<form method="post" action="editpetu_aksi.php">
   	<table>
   		<tr>
   			<td>id</td>
   			<td><input type="text" name="id" value="<?php echo $d['id']; ?>"></td>
   		</tr>

          <tr>
            <td>kode</td>
            <td><input type="text" name="kode" value="<?php echo $d['kode']; ?>"</td>
          </tr>

   		<tr>
   			<td>nama_petugas</td>
   			<td><input type="text" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>"></td>
   		</tr>
   		
          <tr>
            <td>jk</td>
            <td><select name="jk" value="<?php echo $d['jk']; ?>">
               <option>Laki-Laki</option>
               <option>Perempuan</option>
            </select></td>
         </tr>
           

          <tr>
            <td>no_tlp</td>
            <td><input type="number" name="no_tlp" value="<?php echo $d['no_tlp']; ?>"></td>
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