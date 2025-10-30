<?php
    $nilai = [
        ["nama" => "Jaka", "tugas" => 80, 'uts' => 75, "uas" => 85 ],
        ["nama" => "Sinta", "tugas" => 90, "uts" => 88, "uas" => 92],
        ["nama" => "Budi", "tugas" => 70, "uts" => 65, "uas" => 78]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            list-style: none;
        }
        hr {
            width: 30%;
            border-top: 2px dashed black;
            margin-left: 0; 
        }
    </style>
</head>
<body>
<?php foreach($nilai as $n): ?>
    <ul>
        <li>Nama: <?=$n["nama"] ?></li>
        <li>Nilai Tugas: <?=$n["tugas"] ?></li>
        <li>Nilai UTS: <?=$n["uts"] ?></li>
        <li>Nilai UAS: <?=$n["uas"] ?></li>
        <hr>
    </ul>
<?php endforeach;?>
</body>
</html>

<!-- Selesai -->