<?php
include_once("koneksi.php");

// Periksa apakah parameter id telah diterima
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Buat query untuk menghapus data
    $query = "DELETE FROM tb_buku WHERE id_buku = $id";
    
    // Eksekusi query
    $hasil = mysqli_query($con, $query);
    
    if($hasil) {
        // Jika berhasil, arahkan kembali ke halaman index
        header("Location: index.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menghapus data buku. Error: " . mysqli_error($con);
    }
} else {
    // Jika tidak ada parameter id, kembalikan ke halaman index
    header("Location: index.php");
    exit();
}
?>
