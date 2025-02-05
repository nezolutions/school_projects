<?php
// Memulai session
session_start();

// Menghapus semua session
session_destroy();

// Mengarahkan kembali ke halaman login (misalnya index.php) dengan pesan logout
header("Location: index.php?pesan=logout");
exit();
?>
