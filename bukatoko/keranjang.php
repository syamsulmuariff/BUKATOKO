<?php
session_start();

include 'koneksi.php';

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu')</script>";
	echo "<script>location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>keranjang belanja</title>
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
	<div class="container">
		<h1>Keranjang Belanja</h1>
		<hr>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Subharga</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor = 1;?>
			<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
			<!-- menampilkan produk yang sedang diulang berdasarkan id produk-->
			<?php
			$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
			$pecah = $ambil->fetch_assoc();
			$subharga = $pecah["harga_produk"]*$jumlah;

			?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah["nama_produk"]; ?></td>
				<td>Rp. <?php echo number_format($pecah["harga_produk"]);?></td>
				<td><?php echo $jumlah; ?></td>
				<td>Rp. <?php echo number_format($subharga);?></td>
				<td>
					<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php endforeach ?>
			
		</tbody>
	</table>
	<a href="katalog.php" class="btn btn-default">Lanjutkan Belanja</a>
	<a href="checkout.php" class="btn btn-primary">Checkout</a>



	</div>
</section>
</body>
</html>