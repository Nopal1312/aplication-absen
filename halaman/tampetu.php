<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<title>absen</title>
</head>
<body>
<a href="../admin/admin.php?page=Petugas">kembali</a>
<br/>
<h3>Tambah Data Petugas</h3>
<form method="post" action="tampetu_aksi.php">
	<table>
		<tr>
			<td>id</td>
             <td><input type="number" name="id"></td>
		</tr>
		<tr>
			<td>kode</td>
             <td><input class="form-control" name="kode" required type="text" id="kode" placeholder="kode"></td>
		</tr>
		<tr>
			<td>nama_petugas</td>
             <td><input type="text" name="nama_petugas" required></td>
		</tr>

        <tr>
			<td>jk</td>
            <td><select name="jk">
            	<option>Laki-Laki</option>
            	<option>Perempuan</option>
            </select></td>
		</tr>

        
         <tr>
			<td>no_tlp</td>
             <td><input type="number" name="no_tlp"></td>
		</tr>

		<tr>
			<td ><input  type="submit" value="SIMPAN"></td>
		</tr>
		
	</table>
</form>
</body>
</html>

<!-- <script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

           
			var kode = $('#kode').val();		

				e.preventDefault();	

				

				
			}else{
				
			}

		});		
		
	});
    
	
</script> -->


<script src="../js/sweetalert2.all.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>