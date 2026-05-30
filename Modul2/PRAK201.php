<!DOCTYPE html>
<html>
<head>
    <title>PRAK201</title>
</head>
<body>
    <form method="POST">
        Nama: 1 <input type="text" name="nama1" value="<?= isset($_POST['nama1']) ? $_POST['nama1'] : '' ?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?= isset($_POST['nama2']) ? $_POST['nama2'] : '' ?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?= isset($_POST['nama3']) ? $_POST['nama3'] : '' ?>"><br>
        <button type="submit" name="urutkan">Urutkan</button>
    </form>

    <?php
    if (isset($_POST['urutkan'])) {
        $n1 = $_POST['nama1'];
        $n2 = $_POST['nama2'];
        $n3 = $_POST['nama3'];

        if ($n1 <= $n2 && $n1 <= $n3) {
            echo "$n1<br>";
            if ($n2 <= $n3) { 
                echo "$n2<br>$n3"; 
            } else { 
                echo "$n3<br>$n2"; 
            }
        } elseif ($n2 <= $n1 && $n2 <= $n3) {
            echo "$n2<br>";
            if ($n1 <= $n3) { 
                echo "$n1<br>$n3"; 
            } else { 
                echo "$n3<br>$n1"; 
            }
        } else {
            echo "$n3<br>";
            if ($n1 <= $n2) { 
                echo "$n1<br>$n2"; 
            } else { 
                echo "$n2<br>$n1"; 
            }
        }
    }
    ?>
</body>
</html>