<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
    <style>
        input {
            accent-color: blue;
        }
    </style>
</head>
<body>
    <form method="POST">
        Nilai: <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $n = $_POST['nilai'];
        
        echo "<h2>Hasil: ";
    
        if ($n == 0) { 
            echo "Nol"; 
        } elseif ($n > 0 && $n < 10) { 
            echo "Satuan"; 
        } elseif ($n >= 10 && $n < 20) { 
            echo "Belasan"; 
        } elseif ($n >= 20 && $n < 100) { 
            echo "Puluhan"; 
        } elseif ($n >= 100 && $n < 1000) { 
            echo "Ratusan"; 
        } else { 
            echo "Anda Menginput Melebihi Limit Bilangan"; 
        }
        
        echo "</h2>";
    }
    ?>
</body>
</html>