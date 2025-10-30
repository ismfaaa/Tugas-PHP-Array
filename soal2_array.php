<?php

    $mahasiswa = [
        ["Jaka", "22001", "Informatika"],
        ["Sinta", "22002", "Sistem Informasi"],
        ["Budi", "22003", "Teknik Komputer"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 Array</title>
    <style>
        table {
            border:1px solid black;
        }
        th {
            border:1px solid black;
        }

        td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table cellpadding="2" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $mahasiswa[0][0]; ?></td>
            <td><?php echo $mahasiswa[0][1]; ?></td>
            <td><?php echo $mahasiswa[0][2]; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $mahasiswa[1][0]; ?></td>
            <td><?php echo $mahasiswa[1][1]; ?></td>
            <td><?php echo $mahasiswa[1][2]; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $mahasiswa[2][0]; ?></td>
            <td><?php echo $mahasiswa[2][1]; ?></td>
            <td><?php echo $mahasiswa[2][2]; ?></td>
        </tr>
    </table>
</body>
</html>