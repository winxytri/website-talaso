<?php
include 'config.php';
$query = "SELECT * FROM produk";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Website resmi Talas'O - Produk kue akar talas beneng">

	<title>Talas'O</title>

	<link rel="shortcut icon" type="image/png" href="images/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<!-- Header -->
<div class="top-header-area" id="sticker">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<div class="main-menu-wrap">
					<div class="site-logo">
						<a href="index.php">
							<img src="images/logo.png" alt="Talas'O" style="height: 100px; border-radius: 50%;">
						</a>
					</div>
					<nav class="main-menu">
						<ul>
							<li class="current-list-item"><a href="index.php">Home</a></li>
							<li><a href="produk.php">Produk</a></li>
							<li><a href="about.php">Tentang</a></li>
							<li><a href="contactus.php">Kontak</a></li>
							<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
						</ul>
						
					</nav>
					<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- search area -->
<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
						<h1>Selamat Datang di Talas'O</h1>
						<p class="subtitle">Kue akar kelapa dari bahan talas, lezat dan bergizi!</p>
						<a href="produk.php" class="boxed-btn mt-4">Lihat Produk</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


<!-- Produk Section -->
<div class="product-section mt-5 mb-5">
	<div class="container">
		<h2 class="text-center mb-5">Daftar Produk</h2>
		<div class="row">
			<?php while ($row = $result->fetch_assoc()) { ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<img src="images/<?= $row['gambar']; ?>" alt="<?= $row['nama_produk']; ?>">
						</div>
						<h3><?= $row['nama_produk']; ?></h3>
						<p class="product-price">Rp <?= number_format($row['harga'], 2, ',', '.'); ?> </p>
						<a href="pesan.php?id=<?= $row['id_produk']; ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- Footer -->
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="footer-box">
					<p>&copy; <?php echo date("Y"); ?> Talas'O. All rights reserved.</p>
					<div class="footer-icons">
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
