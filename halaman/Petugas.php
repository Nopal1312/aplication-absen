<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- <script src="../js/jquery.min.js"></script>
  <script src="../js/JsBarcode.all.min.js"></script>
  <script src="../js/bootstrap.min.js"></script> -->
  <title>Tambah Petugas</title>

</head>

<body>

  <!-- <h6 style="margin-top: 50px;" center> Data Karyawan</h6> -->

  </br>

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <form method="post" class="d-flex" role="search">
        <input type="text" name="carii" placeholder="">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>



  <div class="card">
    <div class="card-header">
      Data Petugas
    </div>
    <div class="card-body">
      <a href="../halaman/tampetu.php"> <button type="button" class="btn btn-info">Tambah Petugas</button></a>

      </br>
      </br>


      <table class="table">
        <thead>
          <th>No</th>
          <th>kode</th>
          <th>nama_petugas</th>
          <th>jk</th>
          <th>notlp</th>
          <tr>
        </thead>
        <tbody>

        <!-- Cari -->
        <?php
        include '../koneksi.php';
        $data = mysqli_query($koneksi, "select * from petugas");
        if (isset($_POST['carii'])) {
          $carii = $_POST['carii'];
          $data = mysqli_query($koneksi, "Select * from petugas where nama_petugas like '%$carii%'");
        }
        while ($d = mysqli_fetch_array($data)) {
          ?>

            <?php
            include '../koneksi.php';
            $hasil = mysqli_query($koneksi, "SELECT * FROM petugas");

            $codbarra = array();
            ?>
            <?php
            while ($fila = mysqli_fetch_assoc($hasil)):
              $codbarra[] = (string) $fila['kode'];
              ?>
              <tr>

                <td><?php echo $d['id']; ?></td>
                <td><svg id='<?php echo "barcode" . $fila['kode']; ?>'></td>
                <td><?php echo $d['nama_petugas']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['no_tlp']; ?></td>

                <td>
                  <a href="../halaman/editpetu.php?id=<?php echo $d['id']; ?>"><button type="button"
                      class="btn btn-warning">Edit</button></a>
                  <a onclick="return confirm('apakah ingin apus')"
                    href="../halaman/hapuspetu.php?id=<?php echo $d['id']; ?>"><button type="button"
                      class="btn btn-danger">Hapus</button></a>
                  <a href="../halaman/cetakpetu.php?id=<?php echo $d['id']; ?>"><button type="button"
                      class="btn btn-info">Cetak Petugas</button></a>
                </td>

              </tr>
            <?php endwhile; ?>
          </tbody>
          <?php
        }
        ?>
      </table>

      <script type="text/javascript">

        function arrayjsonbarcode(j) {
          json = JSON.parse(j);
          arr = [];
          for (var x in json) {
            arr.push(json[x]);
          }
          return arr;
        }

        jsonvalor = '<?php echo json_encode($codbarra) ?>';
        valores = arrayjsonbarcode(jsonvalor);

        for (var i = 0; i < valores.length; i++) {

          JsBarcode("#barcode" + valores[i], valores[i].toString(), {
            format: "codabar",
            lineColor: "#000",
            width: 2,
            height: 30,
            displayValue: true
          });
        }

      </script>

    </div>
  </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>