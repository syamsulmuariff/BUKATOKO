<h2>Detail Pembelian</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM Pembelian JOIN pelanggan
 ON Pembelian.id_pelanggan=pelanggan.id_pelanggan 
 WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
<p>
	<?php echo $detail['telepon_pelanggan'];?><br>
	<?php echo $detail['email_pelanggan'];?>
</p>
<p>
	Tanggal :<?php echo $detail['tanggal_pembelian']; ?><br>
	Total :<?php echo $detail['total_pembelian']; ?>
</p>
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
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk
		WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()) { ?>
			<tr>
			<td><?php echo $pecah['id_produk'];?></td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td><?php echo $pecah['harga_produk'];?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td>
				<?php echo $pecah['harga_produk']*$pecah['jumlah'];?>
			</td>
		</tr>
		<?php }?>
		
	</tbody>
</table>