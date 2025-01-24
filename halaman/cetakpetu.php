<!DOCTYPE html>
<html>
  <head>
    <title>KARTU PETUGAS</title>
    <style>
      /* Style untuk struk */
      .struk {
        border: 1px solid #000;
        padding: 50px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        width: 300px;
      }
      .judul {
        text-align: center;
        font-size: 16px;
        font-weight: bold;
      }
      .keterangan {
        margin-top: 10px;
      }
      .keterangan table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
      }
      .keterangan td {
        /* border: 1px solid #000; */
        padding: 5px;
        /* text-align: center; */
        text-align: left;

      }
      .total {
        margin-top: 10px;
        text-align: right;
      }
      td{
        text-align: left;
      }

    </style>
  </head>
  <body onload="window.print();">
    <div class="struk">
      <div class="judul"> PT TATAKAN RAYA MANDIRI</div>
      <p>Jln.Perjuangan,Martapura,Kalimantan Selatan no. 15|</p>
      <div class="keterangan">
        <table border="0">
          
          <?php
      include '../koneksi.php'; 
      $id = $_GET['id'];
      $data = mysqli_query($koneksi,"select * from petugas where id= '$id' ");
      while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
              <td>Nama Petugas:</td>
              
            
            <td><?php echo $d['nama_petugas']; ?></td>
          </tr>
            <tr>
              <td>JK:</td>
           
          <td><?php echo $d['jk']; ?></td>
          </tr>
            <tr>
              <td>No TLP:</td>
           
          <td><?php echo $d['no_tlp']; ?></td>
         
          </tr>
          
          <tr>
        
              <td rowspan="4"></td>
               
             

          </tr>
  
          <?php } ?>
        </table>
        <h3>barcode</h3>
        <p align="right">nopal</p>
        <div class="total"><tr>
  
      
      </tr>
    </div>
      </div>
    </div>
  </body>
</html>