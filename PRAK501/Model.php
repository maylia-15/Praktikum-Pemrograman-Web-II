<?php
require 'Koneksi.php';

function getMembers() {
    $conn = getKoneksi();
    $query = "SELECT * FROM member";
    $result = mysqli_query($conn, $query);
    $members = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $members[] = $row;
    }
    return $members;
}

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
              VALUES ('$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    return mysqli_query($conn, $query);
}

function deleteMember($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM member WHERE id_member = $id";
    return mysqli_query($conn, $query);
}

function getMemberById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM member WHERE id_member = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $query = "UPDATE member SET 
              nama_member = '$nama', 
              nomor_member = '$nomor', 
              alamat = '$alamat', 
              tgl_mendaftar = '$tgl_daftar', 
              tgl_terakhir_bayar = '$tgl_bayar' 
              WHERE id_member = $id";
    return mysqli_query($conn, $query);
}


function getBuku() {
    $conn = getKoneksi();
    $query = "SELECT * FROM buku";
    $result = mysqli_query($conn, $query);
    $buku = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $buku[] = $row;
    }
    return $buku;
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = getKoneksi();
    $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
              VALUES ('$judul', '$penulis', '$penerbit', $tahun)";
    return mysqli_query($conn, $query);
}

function deleteBuku($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM buku WHERE id_buku = $id";
    return mysqli_query($conn, $query);
}

function getBukuById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM buku WHERE id_buku = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = getKoneksi();
    $query = "UPDATE buku SET 
              judul_buku = '$judul', 
              penulis = '$penulis', 
              penerbit = '$penerbit', 
              tahun_terbit = $tahun 
              WHERE id_buku = $id";
    return mysqli_query($conn, $query);
}


function getPeminjaman() {
    $conn = getKoneksi();
    $query = "SELECT p.*, m.nama_member, b.judul_buku 
              FROM peminjaman p 
              JOIN member m ON p.id_member = m.id_member 
              JOIN buku b ON p.id_buku = b.id_buku";
    $result = mysqli_query($conn, $query);
    $peminjaman = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $peminjaman[] = $row;
    }
    return $peminjaman;
}

function insertPeminjaman($tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = getKoneksi();
    $query = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member, id_buku) 
              VALUES ('$tgl_pinjam', '$tgl_kembali', $id_member, $id_buku)";
    return mysqli_query($conn, $query);
}

function deletePeminjaman($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
    return mysqli_query($conn, $query);
}

function getPeminjamanById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function updatePeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $conn = getKoneksi();
    $query = "UPDATE peminjaman SET 
              tgl_pinjam = '$tgl_pinjam', 
              tgl_kembali = '$tgl_kembali', 
              id_member = $id_member, 
              id_buku = $id_buku 
              WHERE id_peminjaman = $id";
    return mysqli_query($conn, $query);
}
?>