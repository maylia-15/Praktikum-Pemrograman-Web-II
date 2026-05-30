<?php
date_default_timezone_set('Asia/Makassar');

function getKoneksi() {
    $host = "sql312.infinityfree.com";
    $user = "if0_41986861";
    $pass = "CW4h9d66W2j";
    $db   = "if0_41986861_Modul5";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}
?>