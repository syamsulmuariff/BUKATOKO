<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>daftar</title>
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
					<h3 class="panel-title">Daftar Pelanggan</h3>
				</div>
				<div class="panel-body" >
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-2">Nama</label>
							<div class="col-md-9">
								<input type="text"  class="form-control" name="nama" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Email</label>
							<div class="col-md-9">
								<input type="email"  class="form-control" name="email" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Password</label>
							<div class="col-md-9">
								<input type="text"  class="form-control" name="password" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Alamat</label>
							<div class="col-md-9">
								<textarea class="form-control" name="alamat" required></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Telp/HP</label>
							<div class="col-md-9">
								<input type="number" class="form-control" name="telepon" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-9 col-md-offset-2">
								<button class="btn btn-primary" name="daftar">Daftar</button>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST["daftar"])) {
						//mengambil isian 
						$nama = $_POST["nama"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$alamat = $_POST["alamat"];
						$telepon = $_POST["telepon"];

						//cek email yang digunakan

						$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
						$yangcocok = $ambil->num_rows;
						if ($yangcocok==1) {
							echo "<script>alert('pendaftaran gagal,email sudah ada');</script>";
							echo "<script>location='daftar.php';</script>";
						}
						else{

							$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan) VALUES('$email','$password','$nama','$telepon','$alamat')");

							echo "<script>alert('pendaftaran sukses , silahkan login');</script>";
							echo "<script>location='login.php';</script>";
						}


					}



					?>


				</div>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>