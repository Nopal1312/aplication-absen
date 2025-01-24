<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah</title>
</head>
<body>
   <a href="../petugas/petugas.php?page=Pegawai">kembali</a>
   <br/>
   <br/>
   <h3>EDIT DATA KARYAWAN</h3>
   <?php
   include '../koneksi.php';
  $id = $_GET['id'];
   $data = mysqli_query($koneksi,"select * from karyawan where id='$id'");
   while ($d = mysqli_fetch_array($data)) {
   	?>
   	<form method="post" action="editpeg_aksi.php">
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
            <td>jk</td>
            <td><select name="jk" value="<?php echo $d['jk']; ?>">
               <option>Laki-Laki</option>
               <option>Perempuan</option>
            </select></td>
         </tr>
           

          <tr>
            <td>notlp</td>
            <td><input type="number" name="notlp" value="<?php echo $d['notlp']; ?>"></td>
         </tr>


   		<tr>
   			<td>alamat</td>
   			<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
   		</tr>
   		
   		
   		<tr>
   			<td>divisi</td>
   			<td><select name="divisi" value="<?php echo $d['divisi']; ?>">
   				 <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi,"select * from divisi");
      while ($d = mysqli_fetch_array($data)) {
      ?>
                <option> <?php echo $d['nama_divisi']; ?></option>
            <?php } ?>
   			</select></td>
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