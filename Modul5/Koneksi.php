<?php
date_default_timezone_set('Asia/Makassar');

function getKoneksi() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "prak501"; 

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}
?>