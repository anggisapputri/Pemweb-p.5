<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kontak</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-custom {
            background-color: #FFC0CB; 
        }
        .navbar-custom .nav-link {
            color: white;
        }
        .navbar-brand {
            font-family: 'Dancing Script', cursive; 
            font-size: 1.8rem; 
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            color: #333;
        }
        .custom-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            background-color: #FFC0CB;
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: #ff99aa;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Website</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Container -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h3 class="mb-4 text-center">Form Kontak</h3>
                    <form action="konfirmasi.php" method="POST">
                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" required placeholder="Masukkan Nama Anda">
                        </div>

                        <!-- Hobi -->
                        <div class="form-group">
                            <label>Hobi:</label>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="hobby[]" value="Lari"> Lari
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="hobby[]" value="Loncat"> Loncat
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="hobby[]" value="Renang"> Renang
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button class="btn btn-custom" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
