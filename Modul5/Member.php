<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    deleteMember($_GET['hapus']);
    header("Location: Member.php");
}

$members = getMembers();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Member</h2>
    <a href="FormMember.php" class="btn">Tambah Member</a>
    <br><br>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($members as $m) : ?>
        <tr>
            <td><?= $m['nama_member']; ?></td>
            <td><?= $m['nomor_member']; ?></td>
            <td><?= $m['alamat']; ?></td>
            <td><?= $m['tgl_mendaftar']; ?></td>
            <td><?= $m['tgl_terakhir_bayar']; ?></td>
            <td>
                <a href="FormMember.php?id_member=<?= $m['id_member']; ?>" class="btn">Edit</a>
                <a href="Member.php?hapus=<?= $m['id_member']; ?>" class="btn" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="Buku.php" class="btn">Kelola Buku</a>
    <a href="Peminjaman.php" class="btn">Kelola Peminjaman</a>
</body>
</html>