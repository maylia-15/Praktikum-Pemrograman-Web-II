<?php
require 'Model.php';

$id = '';
$judul = '';
$penulis = '';
$penerbit = '';
$tahun = '';

if (isset($_GET['id_buku'])) {
    $id = $_GET['id_buku'];
    $buku = getBukuById($id);
    $judul = $buku['judul_buku'];
    $penulis = $buku['penulis'];
    $penerbit = $buku['penerbit'];
    $tahun = $buku['tahun_terbit'];
}

if (isset($_POST['submit'])) {
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];

    if (!empty($id)) {
        updateBuku($id, $judul, $penulis, $penerbit, $tahun);
    } else {
        insertBuku($judul, $penulis, $penerbit, $tahun);
    }
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Buku</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" value="<?= $judul; ?>" required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" value="<?= $penulis; ?>" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?= $penerbit; ?>" required></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit" value="<?= $tahun; ?>" style="width: 100%; padding: 10px 12px; border: 1px solid #e0e0e0; border-radius: 6px; box-sizing: border-box;" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Simpan</button>
                    <a href="Buku.php" class="btn">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>