<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .id-card {
            width: 300px;
            padding: 20px;
            background-color: wheat;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .employee-photo {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .employee-info {
            text-align: center;
        }

        .employee-info h2 {
            margin: 5px 0;
        }

        .employee-info p {
            margin: 0;
            color: #555;
        }

        .company-logo {
            max-width: 50px;
            margin-top: 10px;
        }
    </style>
    <title>ID Card</title>
</head>
<body>

<script type="text/javascript">

function arrayjsonbarcode(j){
	json=JSON.parse(j);
	arr=[];
	for (var x in json) {
		arr.push(json[x]);
	}
	return arr;
}

jsonvalor='<?php echo json_encode($codbarra) ?>';
valores=arrayjsonbarcode(jsonvalor);

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





<div class="id-card">
    <img src="logoaja.jpg" alt="" class="employee-photo">
    <body onload="window.print();">
    <div class="struk">
      <div class="judul"> PT TATAKAN RAYA MANDIRI</div>
      <p>Jln.Perjuangan,Martapura,Kalimantan Selatan no. 15|</p>
      <div class="keterangan">
      <table border="0">
          
           <?php
      include '../koneksi.php'; 
      $id = $_GET['id'];
      $data = mysqli_query($koneksi,"select * from karyawan where id= '$id' ");
      while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
              <td>Nama karyawan:</td>
              
            
            <td><?php echo $d['nama']; ?></td>
          </tr>
            <tr>
              <td>JK:</td>
           
          <td><?php echo $d['jk']; ?></td>
          </tr>
            <tr>
              <td>No TLP:</td>
           
          <td><?php echo $d['notlp']; ?></td>
         
          </tr>

          <tr>
              <td>Divisi:</td>
           
          <td><?php echo $d['divisi']; ?></td>
         
          </tr> 
          
          <tr>
            <td> Barcode</td>
        
            <?php 
   include '../koneksi.php';
$sql="SELECT * FROM absen";
$hasil=mysqli_query($koneksi,$sql);
//declaramos arreglo para guardar codigos
$codbarra=array();
?>
<tr>
<td><svg id='<?php echo "barcode".$fila['id']; ?>'></td>
<td><?php echo $fila['nama'] ?></td>                        
</tr>

          </tr>

          <tr>
        
              <td rowspan="4"></td>
 
          </tr>

  
          <?php } ?>
        </table>
    


        <?php 
   include '../koneksi.php';
$sql="SELECT * FROM absen";
$hasil=mysqli_query($koneksi,$sql);
//declaramos arreglo para guardar codigos
$codbarra=array();
?>
<?php 
while($fila=mysqli_fetch_assoc($hasil)):
$codbarra[]=(string)$fila['id']; 
                
        ?>
<tr>
<td><svg id='<?php echo "barcode".$fila['id']; ?>'></td>
<td><?php echo $fila['nama'] ?></td>                        
</tr>

<?php endwhile;?>








</div>
</body>
</html>
