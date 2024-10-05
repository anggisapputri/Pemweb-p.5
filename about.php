<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>About Us</title>
    <style>
        .navbar-pink {
            background-color: #FFC0CB; 
        }
        .navbar-pink .nav-link {
            color: white !important;
        }
        .about-box {
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .about-header {
            padding: 10px;
            text-align: center;
        }
        .about-header h3 {
            margin: 0;
            color: #333;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .about-content {
            padding: 10px;
            color: #555;
            font-size: 1rem;
        }

        /* Footer di bagian bawah dan kecil */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 5px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            font-size: 0.8rem; /* Ukuran font kecil */
        }
        footer p {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-pink navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- About Box -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="about-box">
                    <div class="about-header">
                        <h3>About Us</h3>
                    </div>
                    <div class="about-content mt-3">
                        <p>Perkenalkan, saya Anggi Saputri Mahasiswa Aktif Informatika Universitas Pembangunan Jaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2024 Anggi Saputri_2022071042 Website.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
