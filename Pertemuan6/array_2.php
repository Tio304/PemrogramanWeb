<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 2px solid;
            text-align: center;
            padding: 8px;
        }

        th{
            background-color: #a7dbd8;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $Dosen = [
        'nama' => 'Kevin Arullah Herdiansyah',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Laki-laki'
    ];

    echo "<td>Nama : {$Dosen['nama']}";
    echo "<td>Domisili : {$Dosen['domisili']}";
    echo "<td>Jenis Kelamin : {$Dosen['jenis_kelamin']}";
    ?>
    </tbody>
</table>
</body>
</html>