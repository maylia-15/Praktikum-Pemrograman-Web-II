<?php
$jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;

if (isset($_POST['tambah'])) {
    $jumlah++;
} elseif (isset($_POST['kurang'])) {
    if ($jumlah > 0) $jumlah--;
}
?>

<html>
<body>
    <?php if ($jumlah == 0): ?>
        <form method="POST">
            Jumlah bintang <input type="number" name="jumlah" required><br>
            <button type="submit">Submit</button>
        </form>
    <?php else: ?>
        <p>Jumlah bintang <?= $jumlah ?></p>
        
        <?php
        $i = 0;
        while ($i < $jumlah) {
            echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='60px' style='margin-right: 5px;'>";
            $i++;
        }
        ?>
        
        <form method="POST" style="margin-top: 10px;">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>
</body>
</html>