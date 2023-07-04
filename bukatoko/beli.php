<?php
session_start();
//mendapatkan id_produk dari url
$id_produk = $_GET['id'];

//jika sudah ada produk di keranjang, maka produk jumalahnya di +1
if (isset($_SESSION['keranjang'][$id_produk])) {
	
	$_SESSION['keranjang'][$id_produk]+=1;
}
//selain itu bila belum ada di keranjang maka produk itu dianggap dibeli 1
else{

	$_SESSION['keranjang'][$id_produk]=1;
}

//larikan ke halaman keranjang

echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";




?>