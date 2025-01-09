<?php
session_start();

// Cek apakah user sudah login
if(!isset($_SESSION['session_username'])){
    header("location: login.php");
    exit();
}

// Koneksi database (gunakan konfigurasi yang sama dengan login.php)
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "connection";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);

// Ambil username yang sedang login
$username = $_SESSION['session_username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anggota</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Selamat Datang, <?php echo $username; ?></h2>
                <hr>
                <p>Ini adalah halaman anggota yang hanya bisa diakses setelah login.</p>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
