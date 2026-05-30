<html>
<body>
    <form method="POST">
        <input type="text" name="input" value="<?= isset($_POST['input']) ? $_POST['input'] : '' ?>" required>
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        $panjang = strlen($input); 
        $karakter = str_split($input); 

        echo "<h2>Input:</h2>";
        echo "$input";
        echo "<h2>Output:</h2>";

        foreach ($karakter as $char) {
            echo strtoupper($char);
            
            $i = 1;
            while ($i < $panjang) {
                echo strtolower($char);
                $i++;
            }
        }
    }
    ?>
</body>
</html> 