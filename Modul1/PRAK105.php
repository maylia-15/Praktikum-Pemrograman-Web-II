<?php
$list_hp = [
    "S22" => "Samsung Galaxy S22",
    "S22P" => "Samsung Galaxy S22+",
    "A03" => "Samsung Galaxy A03",
    "X5" => "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table { border: 1px solid black; }
        th, td {border: 1px solid black; padding: 4px 8px;}
        th { background-color: red; font-size: 24px; padding: 20px 5px; }
    </style>
</head>
<body>
    <table>
        <tr><th>Daftar Smartphone Samsung</th></tr>
        <?php foreach ($list_hp as $key => $val): ?>
            <tr><td><?php echo $val; ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>