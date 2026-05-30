<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    deletePeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php");
}

$peminjaman = getPeminjaman();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Peminjaman</h2>
    <a href="FormPeminjaman.php" class="btn">Tambah Peminjaman</a>
    <br><br>
    <table>
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Nama Member</th>
            <th>Judul Buku</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($peminjaman as $p) : ?>
        <tr>
            <td><?= $p['tgl_pinjam']; ?></td>
            <td><?= $p['tgl_kembali']; ?></td>
            <td><?= $p['nama_member']; ?></td>
            <td><?= $p['judul_buku']; ?></td>
            <td>
                <a href="FormPeminjaman.php?id_peminjaman=<?= $p['id_peminjaman']; ?>" class="btn">Edit</a>
                <a href="Peminjaman.php?hapus=<?= $p['id_peminjaman']; ?>" class="btn" onclick="return confirm('Yakin ingin menghapus data peminjaman ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="Member.php" class="btn">Kelola Member</a>
    <a href="Buku.php" class="btn">Kelola Buku</a>
</body>
</html>