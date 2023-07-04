<h2>Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>harga</th>
			<th>foto</th>
			<th>deskripsi</th>
			<th>aksi</th>




		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM produk");?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $pecah['id_produk'];?></td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td><?php echo $pecah['harga_produk'];?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk'];?>" width="50">
			</td>
			<td><?php echo $pecah['deskripsi_produk'];?></td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class="btn btn-warning">ubah</a>

			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">tambah data</a>