<html>
<body>
    <form method="POST">
        Jumlah Peserta: <input type="number" name="jumlah"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 != 0) {
                echo "<span style='color: red; font-size: 24px; font-weight: bold;'>Peserta ke-$i</span><br><br>";
            } else {
                echo "<span style='color: green; font-size: 24px; font-weight: bold;'>Peserta ke-$i</span><br><br>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>