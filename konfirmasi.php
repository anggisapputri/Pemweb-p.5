<?php
// Fungsi untuk menghitung umur berdasarkan tanggal lahir
function hitungUmur($tgl_lahir) {
    $tanggal_lahir = new DateTime($tgl_lahir);
    $today = new DateTime();
    $umur = $today->diff($tanggal_lahir);
    return $umur->y;  // Mengembalikan umur dalam tahun
}

// Koneksi ke database
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kontak"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah form telah disubmit menggunakan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = isset($_POST['nama']) ? $_POST['nama'] : 'Tidak diisi';
    $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
    $tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';

    // Menghitung umur berdasarkan tanggal lahir
    $umur = !empty($tgl_lahir) ? hitungUmur($tgl_lahir) : 'Tidak diketahui';

    // Simpan data ke database
    if (!empty($nama) && !empty($hobbies) && !empty($tgl_lahir)) {
        $hobbies_str = implode(", ", $hobbies); 
        $sql = "INSERT INTO kontak (nama, hobby, tgl_lahir) VALUES ('$nama', '$hobbies_str', '$tgl_lahir')";

        if ($conn->query($sql) === TRUE) {
            $message = "Data berhasil disimpan.";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $message = "Data tidak lengkap.";
    }
} else {
    header("Location: kontak.php");
    exit();
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Konfirmasi Data</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .confirmation-box {
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="confirmation-box">
            <h2>Konfirmasi Data</h2>
            <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
            <p>Hobi: <?php echo htmlspecialchars(implode(', ', $hobbies)); ?></p>
            <p>Tanggal Lahir: <?php echo htmlspecialchars(date("d F Y", strtotime($tgl_lahir))); ?></p>
            <p>Berarti umur Anda sudah <?php echo $umur; ?> tahun.</p>
            <p><?php echo isset($message) ? $message : ''; ?></p>
            <div>
                <a href="kontak.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
