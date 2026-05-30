<?php
require 'Model.php';

$id = '';
$nama = '';
$nomor = '';
$alamat = '';
$tgl_daftar = date('Y-m-d\TH:i');
$tgl_bayar = date('Y-m-d');

if (isset($_GET['id_member'])) {
    $id = $_GET['id_member'];
    $member = getMemberById($id);
    $nama = $member['nama_member'];
    $nomor = $member['nomor_member'];
    $alamat = $member['alamat'];
    $tgl_daftar = date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar']));
    $tgl_bayar = $member['tgl_terakhir_bayar'];
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_member'];
    $nomor = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_mendaftar'])); 
    $tgl_bayar = $_POST['tgl_terakhir_bayar'];

    if (!empty($id)) {
        updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    }
    header("Location: Member.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Member</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="nama_member" value="<?= $nama; ?>" required></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" value="<?= $nomor; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required><?= $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Mendaftar</td>
                <td><input type="datetime-local" name="tgl_mendaftar" value="<?= $tgl_daftar; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td><input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_bayar; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Simpan</button>
                    <a href="Member.php" class="btn">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>