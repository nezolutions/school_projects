<?php 
$koneksi = mysqli_connect("localhost","root","","multi_user");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal: ".mysqli_connect_error();
}
echo "Koneksi database berhasil. ";
?>