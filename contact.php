<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Talas'O</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Header */
        .contact-header {
            background: url('images/banner.jpg') center/cover no-repeat;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        /* Section Contact */
        .contact-container {
            padding: 50px 0;
        }

        .contact-info h5 {
            font-weight: bold;
            color: #6D4C41; /* Warna coklat */
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        /* Form */
        .contact-form {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
        }

        /* Social Media */
        .social-icons {
            margin-top: 30px;
            text-align: center;
        }

        .social-icons a {
            font-size: 30px;
            margin: 0 15px;
            color: #6D4C41;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #d2691e;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B4513;">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="index.php">
                <img src="images/logo.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
                Talas'O
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="contactus.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="produk.php">Daftar Produk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Header -->
    <div class="contact-header">
        Contact Us
    </div>

    <!-- Contact Section -->
    <div class="container contact-container">
        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-md-6 contact-info">
                <h5>Alamat</h5>
                <p>Jl. Talas Indah No. 123, Jakarta</p>

                <h5>Telepon</h5>
                <p>+62 812-3456-7890</p>

                <h5>Email</h5>
                <p>info@talas-o.com</p>

                <h5>Jam Operasional</h5>
                <p>Senin - Jumat: 08:00 - 20:00</p>
                <p>Sabtu - Minggu: 09:00 - 22:00</p>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://www.instagram.com/your_instagram" target="_blank">
                <img src="images/instagram.png" alt="Instagram" width="50">
            </a>
            <a href="https://wa.me/6281234567890" target="_blank">
                <img src="images/whatsapp.png" alt="WhatsApp" width="50">
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4" style="background-color: #8B4513; color: white;">
        <p>&copy; <?= date('Y'); ?> Talas'O. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
