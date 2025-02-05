<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("Location: halaman_admin.php");
        exit();
    } elseif ($data['level'] == "pegawai") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("Location: halaman_pegawai.php");
        exit();
    } elseif ($data['level'] == "pengurus") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pengurus";
        header("Location: halaman_pengurus.php");
        exit();
    } else {
        header("Location: index.php?pesan=gagal");
    }
} else {
    header("Location: index.php?pesan=gagal");
}
?>