<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
require 'functions.php';
 
// menangkap data yang dikirim dari form login
$Username = $_POST['Username'];
$Password = $_POST['Password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from users where username='$Username' and password='$Password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['Hak_akses']=="Admin"){
 
		// buat session login dan username
		$_SESSION['Username'] = $Username;
		$_SESSION['Hak_akses'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai Pengunjung
	}else if($data['Hak_akses']=="Pengunjung"){
		// buat session login dan username
		$_SESSION['Username'] = $Username;
		$_SESSION['Hak_akses'] = "Pengunjung";
		// alihkan ke halaman dashboard Pengunjung
		header("location:indexPengunjung.php");
 
    }else{
 
		// alihkan ke halaman login kembali
		header("location:Login.php");
	}	
}else{
	header("location:Login.php?pesan=gagal");
}
 
?>