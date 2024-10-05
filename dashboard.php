<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
    <style>
        .navbar-pink {
            background-color: #FFC0CB; 
        }
        .navbar-pink .nav-link {
            color: white !important;
        }
        .dashboard-box {
            margin-top: 50px;
            padding: 40px;
            border-radius: 10px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .dashboard-box h1 {
            color: #333;
            font-weight: bold;
            font-size: 1.5rem; 
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 5px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            font-size: 0.8rem; 
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
                    <a class="nav-link active" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Box Dashboard -->
    <div class="container">
        <div class="dashboard-box">
            <h1>Selamat Datang Di Web Saya</h1>
        </div>
    </div>

    <!-- Footer kecil di bagian bawah -->
    <footer>
        &copy; 2024 Anggi Saputri_2022071042 Website.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
