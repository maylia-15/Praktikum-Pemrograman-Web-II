<?php
$host = "sql312.infinityfree.com";
$user = "if0_41986861";
$pass = "CW4h9d66W2j";
$db   = "if0_41986861_Modul5";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql_member = "CREATE TABLE IF NOT EXISTS member (
    id_member INT PRIMARY KEY AUTO_INCREMENT,
    nama_member VARCHAR(250),
    nomor_member VARCHAR(15),
    alamat TEXT,
    tgl_mendaftar DATETIME,
    tgl_terakhir_bayar DATE
)";
if (mysqli_query($conn, $sql_member)) {
    echo "Tabel 'member' berhasil dibuat.<br>";
}

$sql_buku = "CREATE TABLE IF NOT EXISTS buku (
    id_buku INT PRIMARY KEY AUTO_INCREMENT,
    judul_buku VARCHAR(500),
    penulis VARCHAR(500),
    penerbit VARCHAR(250),
    tahun_terbit INT
)";
if (mysqli_query($conn, $sql_buku)) {
    echo "Tabel 'buku' berhasil dibuat.<br>";
}

$sql_peminjaman = "CREATE TABLE IF NOT EXISTS peminjaman (
    id_peminjaman INT PRIMARY KEY AUTO_INCREMENT,
    tgl_pinjam DATE,
    tgl_kembali DATE,
    id_member INT,
    id_buku INT,
    FOREIGN KEY (id_member) REFERENCES member(id_member) ON DELETE CASCADE,
    FOREIGN KEY (id_buku) REFERENCES buku(id_buku) ON DELETE CASCADE
)";
if (mysqli_query($conn, $sql_peminjaman)) {
    echo "Tabel 'peminjaman' berhasil dibuat.<br>";
}

echo "<br>Selesai! Sekarang kamu bisa membuka halaman Member.php";
?>