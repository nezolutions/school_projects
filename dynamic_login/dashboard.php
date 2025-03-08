<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang di Dashboard, <?php echo $username; ?>!</h1>
    <p>Ini adalah halaman dashboard Anda. Anda bisa menambahkan lebih banyak konten sesuai kebutuhan.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
