<?php
// Konfigurasi database
$host = "localhost"; // Nama host
$username = "root"; // Username database
$password = ""; // Password database (kosong untuk default XAMPP)
$database = "connection"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
