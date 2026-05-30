<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    deleteBuku($_GET['hapus']);
    header("Location: Buku.php");
}

$buku = getBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Buku</h2>
    <a href="FormBuku.php" class="btn">Tambah Buku</a>
    <br><br>
    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($buku as $b) : ?>
        <tr>
            <td><?= $b['judul_buku']; ?></td>
            <td><?= $b['penulis']; ?></td>
            <td><?= $b['penerbit']; ?></td>
            <td><?= $b['tahun_terbit']; ?></td>
            <td>
                <a href="FormBuku.php?id_buku=<?= $b['id_buku']; ?>" class="btn">Edit</a>
                <a href="Buku.php?hapus=<?= $b['id_buku']; ?>" class="btn" onclick="return confirm('Yakin ingin menghapus data buku ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="Member.php" class="btn">Kelola Member</a>
    <a href="Peminjaman.php" class="btn">Kelola Peminjaman</a>
</body>
</html>