<?php
require 'Model.php';

$id = '';
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d', strtotime('+7 days')); 
$id_member = '';
$id_buku = '';

$members = getMembers();
$bukus = getBuku();

if (isset($_GET['id_peminjaman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman = getPeminjamanById($id);
    $tgl_pinjam = $peminjaman['tgl_pinjam'];
    $tgl_kembali = $peminjaman['tgl_kembali'];
    $id_member = $peminjaman['id_member'];
    $id_buku = $peminjaman['id_buku'];
}

if (isset($_POST['submit'])) {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];

    if (!empty($id)) {
        updatePeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
    } else {
        insertPeminjaman($tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
    }
    header("Location: Peminjaman.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: inherit;
            background-color: #ffffff;
        }
        select:focus {
            outline: none;
            border-color: #fbc02d;
            box-shadow: 0 0 5px rgba(253, 216, 53, 0.3);
        }
    </style>
</head>
<body>
    <h2>Form Peminjaman</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali" value="<?= $tgl_kembali; ?>" required></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>
                    <select name="id_member" required>
                        <option value="" disabled selected>Pilih Member</option>
                        <?php foreach ($members as $m) : ?>
                            <option value="<?= $m['id_member']; ?>" <?= ($id_member == $m['id_member']) ? 'selected' : ''; ?>>
                                <?= $m['nama_member']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Buku</td>
                <td>
                    <select name="id_buku" required>
                        <option value="" disabled selected>Pilih Buku</option>
                        <?php foreach ($bukus as $b) : ?>
                            <option value="<?= $b['id_buku']; ?>" <?= ($id_buku == $b['id_buku']) ? 'selected' : ''; ?>>
                                <?= $b['judul_buku']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Simpan</button>
                    <a href="Peminjaman.php" class="btn">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>