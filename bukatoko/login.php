<?php
session_start();
//koneksi database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login pelanggan</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="container-fluid"><a class="active navbar-brand " href="#" style="color: white; font-size: 25px; ">TOMORROW
      </a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	<?php include 'menu.php'; ?>
</ul>
</div>
</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Pelanggan</h3>
					
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control">
							
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							
						</div>
						<button class="btn btn-primary" name="login">login</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>


<?php
if (isset($_POST["login"])) 
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

	$akunyangcocok = $ambil->num_rows;
	if ($akunyangcocok==1) {
		$akun =  $ambil->fetch_assoc();

		$_SESSION["pelanggan"] = $akun;
		echo "<script>alert('suskes login')</script>";
		echo "<script>location='katalog.php'</script>";
	}
	else{

		echo "<script>alert('anda gagal login periksa akun anda')</script>";
		echo "<script>location='login.php'</script>";

	}
}


?>
</body>
</html>