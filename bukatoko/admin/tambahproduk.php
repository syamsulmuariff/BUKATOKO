<h2>Tambah Produk</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>id</label>
		<input type="text" class="form-control" name="id">
	</div>
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>

	
</form>
<?php
if (isset($_POST['save'])) {

	$nama =$_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi,"../foto_produk/".$nama);
	$koneksi->query("INSERT INTO Produk
	(id_produk,nama_produk,harga_produk,foto_produk,deskripsi_produk)
	VALUES('$_POST[id]','$_POST[nama]','$_POST[harga]','$nama','$POST[deskripsi]') ");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>

