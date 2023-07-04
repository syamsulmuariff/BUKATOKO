<?php
include "koneksi.php";
?>

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

<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1;?>
		<?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan");?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_pelanggan'];?></td>
			<td><?php echo $pecah['tanggal_pembelian'];?></td>
			<td><?php echo $pecah['total_pembelian'];?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian'];?>" class="btn btn-info">detail</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>