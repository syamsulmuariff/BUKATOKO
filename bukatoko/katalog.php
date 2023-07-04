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
	<title>TOMORROW</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-color: #f8f8ff;">
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
<!--konten-->
<section class="konten">
	<div class="container">
		<h1 style="text-align: center; color: black; font-family: sans-serif; padding-bottom: 30px;">KATALOG BAJU</h1>
		<div class="row">
			<?php $ambil=$koneksi->query("SELECT * FROM produk");?>
			<?php while($perproduk = $ambil->fetch_assoc()){?>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" width="300">
				<div class="caption">
					<h3><?php echo $perproduk['nama_produk'];?></h3>
					<h5><?php echo number_format($perproduk['harga_produk']);?></h5>
					<a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
					<a href="detail.php?id=<?php echo $perproduk["id_produk"];?>" class="btn btn-default">detail</a>
				</div>
			</div>
		</div>
		<?php }?>

	</div>
	</div>
</section>
</body>
<footer style="background-color: black;padding-bottom: 40px; padding-top:40px;">
<div class="container-fluid text-center bg-dark ">
  <span style="color: white; background-color: black;">T O M O R R O W  Streetware &copy; 2021</span>
</div>

</footer>

</html>