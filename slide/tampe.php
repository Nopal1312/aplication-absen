<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<title>absen</title>
</head>
<body>
<a href="../petugas/petugas.php?page=Pegawai">kembali</a>
<br/>
<h3>Tambah Data Karyawan</h3>
<form method="post" action="tampe_aksi.php">
	<table>
		<tr>
			<td>id</td>
             <td><input type="number" name="id"></td>
		</tr>
		<tr>
			<td>nama</td>
             <td><input type="text" name="nama"></td>
		</tr>

        <tr>
			<td>jk</td>
            <td><select name="jk">
            	<option>Laki-Laki</option>
            	<option>Perempuan</option>
            </select></td>
		</tr>

        
         <tr>
			<td>notlp</td>
             <td><input type="number" name="notlp"></td>
		</tr>

		<tr>
			<td>alamat</td>
             <td><input type="text" name="alamat"></td>
		</tr>
		
		
		<tr>
			<td>divisi</td>
            <td><select name="divisi">
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
			<td ><input  type="submit" value="SIMPAN"></td>
		</tr>
		
	</table>
</form>
</body>
</html>