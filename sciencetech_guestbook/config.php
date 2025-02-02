<?php

// Konfigurasi attribut database
$host = "localhost";
$username = "root";
$password = "";
$db = "sciencetech_guestbook";

// Koneksi database mysql
$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
    die("Failed to connect database: " .$db);
}
?>