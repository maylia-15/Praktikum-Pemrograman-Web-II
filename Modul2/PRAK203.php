<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
    <style>
        input[type="radio"] {
            accent-color: blue;
        }
    </style>
</head>
<body>
    <form method="POST">
        Nilai: <input type="number" name="suhu" value="<?= isset($_POST['suhu']) ? $_POST['suhu'] : '' ?>" required><br>
        
        Dari:<br>
        <input type="radio" name="dari" value="C" <?= (isset($_POST['dari']) && $_POST['dari'] == "C") ? "checked" : "" ?>>Celcius<br>
        <input type="radio" name="dari" value="F" <?= (isset($_POST['dari']) && $_POST['dari'] == "F") ? "checked" : "" ?>>Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?= (isset($_POST['dari']) && $_POST['dari'] == "R") ? "checked" : "" ?>>Rheamur<br>
        <input type="radio" name="dari" value="K" <?= (isset($_POST['dari']) && $_POST['dari'] == "K") ? "checked" : "" ?>>Kelvin<br>
        
        Ke:<br>
        <input type="radio" name="ke" value="C" <?= (isset($_POST['ke']) && $_POST['ke'] == "C") ? "checked" : "" ?>>Celcius<br>
        <input type="radio" name="ke" value="F" <?= (isset($_POST['ke']) && $_POST['ke'] == "F") ? "checked" : "" ?>>Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?= (isset($_POST['ke']) && $_POST['ke'] == "R") ? "checked" : "" ?>>Rheamur<br>
        <input type="radio" name="ke" value="K" <?= (isset($_POST['ke']) && $_POST['ke'] == "K") ? "checked" : "" ?>>Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['suhu'];
        $dari = isset($_POST['dari']) ? $_POST['dari'] : '';
        $ke = isset($_POST['ke']) ? $_POST['ke'] : '';

        if (!$dari || !$ke) {
            echo "<h3>Silakan pilih satuan suhu!</h3>";
        } else {
            if ($dari == "C") { $c = $nilai; }
            elseif ($dari == "F") { $c = ($nilai - 32) * 5/9; }
            elseif ($dari == "R") { $c = $nilai * 5/4; }
            elseif ($dari == "K") { $c = $nilai - 273.15; }

            if ($ke == "C") { $hasil = $c; $unit = "°C"; }
            elseif ($ke == "F") { $hasil = ($c * 9/5) + 32; $unit = "°F"; }
            elseif ($ke == "R") { $hasil = $c * 4/5; $unit = "°R"; }
            elseif ($ke == "K") { $hasil = $c + 273.15; $unit = "K"; }

            echo "<h3>Hasil Konversi: " . number_format($hasil, 1) . " $unit</h3>";
        }
    }
    ?>
</body>
</html>