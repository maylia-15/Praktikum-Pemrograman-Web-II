<html>
<body>
    <form method="POST">
        Tinggi : <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar : <input type="text" name="url" value="<?= isset($_POST['url']) ? $_POST['url'] : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];
        $i = 0;

        echo "<br>";
        while ($i < $tinggi) {
            $j = 0;
            while ($j < $i) {
                echo "<img src='$url' style='width:30px; opacity:0;'>";
                $j++;
            }

            $k = 0;
            while ($k < ($tinggi - $i)) {
                echo "<img src='$url' width='30px' height='30px'>";
                $k++;
            }

            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>