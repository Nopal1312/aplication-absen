<?php

    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link  rel="stylesheet" href="modelpetu.css">
        <link  rel="stylesheet" href="bulet.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Absen</title>
    </head>
    <body>
        <div class="navbar" style="position: fixed; z-index: 999;">
            <div class="jarak-navigasi">   
            
              
            </div>
        </div>
        <div class="flex">
            <div class="sidebar">
                <div class="header">
                 PT TATAKAN RAYA MANDIRI
                </div>
                <!-- <span></span> -->
                <hr style="font-weight: bold; margin-top: 21px;">
                <div class="menu-konten">
                    <ul>
                        <li><a href="petugas.php?page=Halaman"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2V2Z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
</svg> Halaman </a></li>
                        <br>
                        
                        <li><a href="petugas.php?page=Pegawai"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/> </svg> Pegawai </a></li>
                        <br>

                        <li><a href="petugas.php?page=Unit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
</svg> Unit </a></li>
           
                        <br>
                    </ul>
                </div>
                
            </div>
            
            <div class="main-kontent">
                <?php
                if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                case 'Halaman':
                include '../slide/halaman.php';
                break;
                
                case 'Pegawai':
                include '../slide/Pegawai.php';
                break;
                case 'Unit':
                include '../slide/unit.php';
                break;
                case 'Pesan':
                include '../slide/Pesan.php';
                break;
            

                
                
                default:
                echo "Maaf Gaada";
                break;
                }
                } else{
                include '../slide/halaman.php';
                }
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>