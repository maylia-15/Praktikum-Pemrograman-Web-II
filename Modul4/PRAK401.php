<?php
$panjang = "";
$lebar = "";
$nilai = "";

if (isset($_POST['cetak'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];
}
?>

<form action="" method="post">
    Panjang: <input type="text" name="panjang" value="<?= $panjang ?>"><br>
    Lebar: <input type="text" name="lebar" value="<?= $lebar ?>"><br>
    Nilai: <input type="text" name="nilai" value="<?= $nilai ?>"><br>
    <button type="submit" name="cetak">Cetak</button>
</form>

<?php
if (isset($_POST['cetak'])) {
    $isiArr = explode(" ", $nilai);
    if (count($isiArr) == ($panjang * $lebar)) {
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        $count = 0;
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $isiArr[$count] . "</td>";
                $count++;
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    }
}
?>