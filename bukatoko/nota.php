<?php
session_start();
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nota pembelian</title>
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
<h2>Detail Pembelian</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
 ON pembelian.id_pelanggan=pelanggan.id_pelanggan 
 WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<div class="row">
	<div class="col-md-4">
		<h3>pembelian</h3>
		<strong> No.Pembelian: <?php echo $detail['id_pembelian'];?></strong><br>
		tanggal: <?php echo $detail['tanggal_pembelian'];?><br>
		Total: <?php echo number_format($detail['total_pembelian']);?>
	</div>
		<div class="col-md-4">
			<h3>Pelanggan</h3>
			<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
			<p><?php echo $detail['telepon_pelanggan'];?><br>
				<?php echo $detail['email_pelanggan'];?>
			</p>
		</div>
		<div class="col-md-4">
			<h3>Pengiriman</h3>
			<strong><?php echo $detail['nama_kota'];?></strong> <br>
			Ongkos Kirim: Rp. <?php echo number_format($detail['tarif']);?> 
		</div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama produk</th>
			<th>Harga</th>
			<th>jumlah</th>
			<th>subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()) { ?>
			<tr>
			<td><?php echo $pecah['id_produk'];?></td>
			<td><?php echo $pecah['nama'];?></td>
			<td>Rp.<?php echo number_format($pecah['harga']);?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td>
				Rp.<?php echo number_format($pecah['subharga']);?>
			</td>
		</tr>
		<?php }?>
		
	</tbody>
</table>

<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				Silahkan melakukan pembayaran Rp.<?php echo number_format( $detail['total_pembelian']); ?> Ke <br>
				<strong>BANK BCA 4260556334 AN. Tommorow</strong>
			</p>
		</div>
	</div>
</div>
</div>
</section>
</body>
</html>