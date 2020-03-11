<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		echo "<script> alert('Login Sebagai Admin'); </script>";
		echo "<script> window.location.href='admin.php'; </script>";

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pelanggan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelanggan";
		// alihkan ke halaman dashboard pegawai
		echo "<script> alert('Login Sebagai Pelanggan'); </script>";
		echo "<script> window.location.href='bookingsystem.php'; </script>";

	}else{

		// alihkan ke halaman login kembali
		echo "<script> alert('Username atau Password tidak sesuai!'); </script>";
		echo "<script> window.location.href='login.php'; </script>";
	}

	
}else{
	echo "<script> alert('Username atau Password tidak sesuai!'); </script>";
	echo "<script> window.location.href='login.php'; </script>";
}



?>