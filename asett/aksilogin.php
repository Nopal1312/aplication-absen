<?php 

session_start();

include '../koneksi.php';

$username = $_POST['email'];
$password = $_POST['pass'];


$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password' ");


$cek = mysqli_num_rows($login);


if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['hak']=="admin") {
		
     $_SESSION['username'] = $username;
     $_SESSION['hak'] = "admin";

     header("location:../admin/admin.php");

	}else if ($data['hak']=="petugas") {
		
        $_SESSION['username'] = $username;
     	$_SESSION['hak'] = "petugas";
       
     header("location:../petugas/petugas.php");

	}else if ($data['hak']=="karyawan") {
		
        $_SESSION['username'] = $username;
     	$_SESSION['hak'] = "karyawan";
       
     header("location:../karyawan/karyawanbuat.php");

	}else{
      
      header("location:index.php?pesan=gagal");
		    //  header("location:../admin/admin.php");


	}	
}else{
	 header("location:index.php?pesan=gagal");
	    //  header("location:../admin/admin.php");

}

 

 ?>