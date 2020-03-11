<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","multi_user");
	
function registrasi($data) {
	global $conn;
	//stripslashes = menghilangkan karakter back slash ('/')
	//strtolower = mengubah semua karakter menjadi kecil semua 
	$username = strtolower(stripslashes($data["username"]));
	$nama = strtolower(stripslashes($data["nama"]));
	$level = strtolower(stripslashes($data["level"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('username sudah terdaftar!')
		</script>";
		return false;
	}
		
	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$password', '$level')");
	
	return mysqli_affected_rows($conn);
}
?>