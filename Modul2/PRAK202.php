<!DOCTYPE html>
<html>
<style>
    .error { color: red; }
    input[type="radio"] {
            accent-color: blue;
        }
</style>

<body>
    <?php
    $namaErr = $nimErr = $jkErr = "";
    $nama = $nim = $jk = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) { $namaErr = "nama tidak boleh kosong"; } 
        else { $nama = $_POST["nama"]; }
        
        if (empty($_POST["nim"])) { $nimErr = "nim tidak boleh kosong"; } 
        else { $nim = $_POST["nim"]; }
        
        if (empty($_POST["jk"])) { $jkErr = "jenis kelamin tidak boleh kosong"; } 
        else { $jk = $_POST["jk"]; }
    }
    ?>

    <form method="post">
        Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
        <span class="error">* <?php echo $namaErr;?></span><br>
        Nim: <input type="text" name="nim" value="<?php echo $nim;?>">
        <span class="error">* <?php echo $nimErr;?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $jkErr;?></span><br>
        <input type="radio" name="jk" value="Laki-laki" <?php if($jk=="Laki-laki") echo "checked";?>>Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if($jk=="Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($nama && $nim && $jk) {
        echo "<h3>Output:</h3>";
        echo "$nama<br>$nim<br>$jk";
    }
    ?>
</body>
</html>