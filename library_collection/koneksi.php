<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "library_collection";
$con = mysqli_connect($host, $username, $password, $db);

if (!$con) {
    error_log("\nGagal tersambung dengan database: " .$db);
} else {
    error_log("\nBerhasil tersambung dengan database: " .$db);
}
?>