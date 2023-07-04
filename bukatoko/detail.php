<?php session_start(); ?>
<?php 
include 'koneksi.php';
?>
<?php
$id_produk = $_GET["id"];

//ambl data

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk ='$id_produk'");
$detail = $ambil->fetch_assoc();



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Produk</title>
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

<section class="konten">
	<div class="container-fluid " style="padding-left: 120px;">
	<div class="row">
		<div class="col-md-4">
			<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" class="img-responsive" width ="500">
		</div>
		<div class="col-md-6">
			<h2><?php echo $detail["nama_produk"]; ?></h2>
			<h4>Rp. <?php echo number_format($detail["harga_produk"]); ?> </h4>
			<form method="post">
				<div class="form-group">
					<div class="input-group">
						<input type="number" name="jumlah" min="1" class="form-control">
						<div class="input-group-btn">
						<button class="btn btn-primary" name="beli">beli</button>
						</div>
						
					</div>
					
				</div>

			</form>

			<?php
			if (isset($_POST["beli"])) {
				//mendapatkan jumlah  yang di input
				$jumlah = $_POST["jumlah"];
				//masukkan dikeranjang
				$_SESSION["keranjang"][$id_produk] = $jumlah;

				echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
				echo "<script>location='keranjang.php';</script>";

			}



			?>
			<p><?php echo $detail["deskripsi_produk"]; ?></p>
		</div>
		
	</div>
</section>
</body>
</html>