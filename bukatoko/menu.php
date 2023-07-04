 <!--navbar-->
<nav class="navbar navbar-nav ">
	<div class="container-fluid ">
		
		<ul class="nav navbar-nav">
			<li><a href="index.php">home</a></li>
			<li><a href="keranjang.php">keranjang</a></li>
			<?php if (isset($_SESSION["pelanggan"])):?>
				<li><a href="logout.php">logout</a></li>
			<?php else:?>
				<li><a href="login.php">login</a></li>
				<li><a href="daftar.php">daftar</a></li>
			<?php endif ?>
			<li><a href="#about">about us</a></li>
			<li><a href="checkout.php">checkout</a></li>

		</ul>

	</div>
</nav>