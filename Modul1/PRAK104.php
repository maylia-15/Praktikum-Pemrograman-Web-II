<?php
$smartphones = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table { border: 1px solid black; }
        th, td {border: 1px solid black; padding: 4px 8px;}
    </style>
</head>
<body>
    <table>
        <tr><th>Daftar Smartphone Samsung</th></tr>
        <?php foreach ($smartphones as $phone): ?>
            <tr><td><?php echo $phone; ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>