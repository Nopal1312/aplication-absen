<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<title>absen</title>
</head>
<body>
<a href="../admin/admin.php?page=Absen">kembali</a>
<br/>
<h3>PENGABSEN</h3>
<form method="post" action="tamsen_aksi.php">
	<table>
		<tr>
			<td>id</td>
             <td><input type="number" name="id"></td>
		</tr>
		<tr>
			<td>nama</td>
             <td><input type="text" name="nama" required></td>
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
			<td>tgl_masuk</td>
            <td><input type="date" name="tglmasuk"></td>
		</tr>


        <tr>
			<td>jam_masuk</td>
            <td><input type="time" name="jammasuk"></td>
		</tr>

        <tr>
			<td>tglkeluar</td>
            <td><input type="date" name="tglkeluar"></td>
		</tr>


         <tr>
			<td>jam_keluar</td>
             <td><input type="time" name="jamkeluar"></td>
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
			<td ><input  type="submit" value="SIMPAN"></td>
		</tr>
		
	</table>
</form>
</body>
</html>