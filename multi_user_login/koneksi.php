<?php 
$koneksi = mysqli_connect("localhost","root","","multi_user_login");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal: ".mysqli_connect_error();
}
echo "Koneksi database berhasil. ";
?>