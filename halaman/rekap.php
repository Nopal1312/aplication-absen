
<h2 style="margin-top: 50px;">Rekap Absensi</h2>
</br>
</br>
<div>
	<form method="post" action="">
	<input type="date" name="date">
	<input type="submit" name="date">

	</form>
</div>

<table class="table table-hover">
<tr>
    <th>id</th>
    <th>nama </th>
    <th>nama_divisi</th>
    <th>tanggal_masuk</th>
    <th>jammasuk</th>
    <th>tanggal Kluar</th>
    <th>jamkeluar</th>
    <th>Keterangan</th>
  </tr>
  <?php
      include '../koneksi.php'; 
      $data = mysqli_query($koneksi,"SELECT absen.id, karyawan.nama, karyawan.divisi, absen.tglmasuk, absen.jammasuk, absen.tglkeluar, absen.jamkeluar, absen.keterangan
      FROM `karyawan`
      left JOIN absen ON absen.nama=karyawan.nama
      ORDER BY karyawan.id,absen.tglmasuk;");
      if (isset($_POST['date']) ) {
      	$date = $_POST['date'];
      	$data = mysqli_query($koneksi,"SELECT absen.id, karyawan.nama, karyawan.divisi, absen.tglmasuk, absen.jammasuk, absen.tglkeluar, absen.jamkeluar, absen.keterangan
        FROM `karyawan`
        left JOIN absen ON absen.nama=karyawan.nama
        ORDER BY karyawan.id,absen.tglmasuk where absen.tglmasuk='$date' ORDER BY karyawan.id,absen.tglmasuk");
      }
      while ($d = mysqli_fetch_array($data)) {
      ?>
     

   
     <!-- SELECT * FROM `karyawan` left JOIN absen ON absen.id= karyawan.id ORDER BY karyawan.id,absen.tglmasuk; -->



      <tr>
  <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['divisi']; ?></td>
        <td><?php echo $d['tglmasuk']; ?></td>
        <td><?php echo $d['jammasuk']; ?></td>
        <td><?php echo $d['tglkeluar']; ?></td>
        <td><?php echo $d['jamkeluar']; ?></td>
        <td><?php 
        if ($d['keterangan'] == 'Hadir') {
          echo $d['keterangan'];
        } else {
          
          echo "Tidak Hadir";
        }
        
        
        ?></td>
      </td> 
      </tr>
      <?php
    }
    ?>

</table>



