<?php
include 'config.php';

// Cek apakah ID produk dikirim melalui URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Produk tidak ditemukan.");
}

$id_produk = $_GET['id'];
$query = "SELECT * FROM produk WHERE id_produk = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id_produk);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Produk tidak ditemukan.");
}

$row = $result->fetch_assoc();

// Nomor WhatsApp Business (Ganti dengan nomor Anda)
$nomor_wa = "6282164645997"; // Format: 62 (Kode Negara) + Nomor HP tanpa nol di awal

// Tidak perlu buat $pesan_wa dan $link_wa disini lagi, karena nanti dinamis via JavaScript
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/logo.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

    <title>Detail Produk - <?= htmlspecialchars($row['nama_produk']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar {
            background-color: #8B4513 !important;
        }
        .footer {
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        .contact-icons {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .contact-icons:hover {
            transform: scale(1.1);
        }
        .logo-circle, .contact-icons {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            transition: transform 0.3s ease-in-out;
        }
        .logo-circle:hover, .contact-icons:hover {
            transform: scale(1.1);
        }
        .navbar {
            width: 100%;
        }
        .banner-container {
            width: 100%;
            overflow: hidden;
        }
        .banner-image {
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
<!-- header -->
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="images/logo.png" alt="" style="height: 70px; border-radius: 50%;">
							</a>
						</div>
						<!-- logo -->

						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>We sale fresh fruits</p> -->
						<h1>PRODUK</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-md-6">
                <img src="images/<?= $row['gambar']; ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($row['nama_produk']); ?>">
            </div>

            <!-- Deskripsi Produk -->
            <div class="col-md-6">
                <h2><?= htmlspecialchars($row['nama_produk']); ?></h2>
                <p><?= nl2br(htmlspecialchars($row['deskripsi'])); ?></p>
                <h4 class="text-success fw-bold">Rp <?= number_format($row['harga'], 2, ',', '.'); ?></h4>

                <!-- --- Ubah di sini --- -->
                <form onsubmit="return redirectToWA(event);" target="_blank">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah:</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" value="1" min="1" required>
                    </div>
                    <a href="index.php" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                </form>
                <!-- --- Akhir Ubah di sini --- -->

            </div>
        </div>
    </div>
    <!-- Footer -->
<div class="footer">
    <div class="container">
        <p>&copy; <?= date("Y"); ?> Talas'O. All rights reserved.</p>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- --- Tambahkan script baru di sini --- -->
    <script>
    function redirectToWA(event) {
        event.preventDefault(); // Cegah form submit biasa

        const jumlah = document.getElementById('jumlah').value;
        const baseLink = "https://api.whatsapp.com/send";
        const nomor = "<?= $nomor_wa; ?>";
        const nama_produk = "<?= rawurlencode($row['nama_produk']); ?>";
        const harga_produk = "Rp <?= number_format($row['harga'], 2, ',', '.'); ?>";

        const pesan = `Halo, saya ingin memesan produk berikut:%0A%0A` +
                      `🛒 *${nama_produk}*%0A` +
                      `💰 Harga: ${harga_produk}%0A` +
                      `🧮 Jumlah: ${jumlah}%0A%0A` +
                      `Mohon informasinya lebih lanjut. Terima kasih!`;

        const link = `${baseLink}?phone=${nomor}&text=${pesan}`;
        window.open(link, '_blank'); // Buka link WhatsApp
        return false;
    }
    </script>
    <!-- --- Akhir Script Baru --- -->

</body>
</html>
