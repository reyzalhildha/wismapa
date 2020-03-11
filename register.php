<?php
include 'functions.php';

	if(isset($_POST["register"])) {
		if(registrasi($_POST) > 0){
			echo "<script>
				        alert('user baru berhasil ditambahkan');
				        window.location.href='login.php';
			      </script>";
		} else {
			echo mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  
</head>

<body>

  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <h1 class="logo__text" style="text-align: center">Kembali Ke Halaman Utama ? <a href="index.php">Clik Me</a></h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Selamat Datang.</h1>
      <h2 class="heading--secondary">Ingin Booking Wisma? DAFTARKAN diri anda SEGERA</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="" target="_blank"><fa class="fa fa-instagram"></fa></a></li>
        <li><a href="" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="" id="registration" method="post">

      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="Joko Widodo" required />
      </div>

       <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="ppsdma.aparatur" required />
      </div>


      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
     
      <div class="form-group">
        <label for="level">Jabatan</label>
        <select class="form-control" id="level" name="level">
          <option></option>
          <option value="pelanggan">Pelanggan</option>
        </select>
      </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" name="register" href="login.php"/>
          </li>
          <li>
            <a class="signup__link" href="login.php">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
</body>
	
	
</html>
