<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamic_login";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
error_log('Koneksi berhasil.');
?>
