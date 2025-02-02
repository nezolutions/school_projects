<?php
include_once("koneksi.php");

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = "UPDATE tb_buku SET 
          judul_buku='$judul', 
          pengarang='$pengarang', 
          tahun_terbit='$tahun', 
          kategori='$kategori' 
          WHERE id_buku=$id";

$hasil = mysqli_query($con, $query);

if ($hasil) {
    header('location:index.php');
} else {
    echo "Update data gagal";
}
?>