<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src ="jquery-ui-1.13.2/jquery-ui.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
</head>
<body>
    <table>
    <tr>
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
    </tr>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => "Malang",
            'jenis_kelamin' => 'Perempuan'
        ];

        // foreach ($Listdosen as $arrayShow) {
        //     echo $arrayShow."<br>";
        // }
        echo "Nama          : {$Dosen ['nama']} <br>";
        echo "Domisili      : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

        echo "<tr>";
        echo "<td>".$Dosen ['nama']."</td>";
        echo "<td>".$Dosen ['domisili']."</td>";
        echo "<td>".$Dosen ['jenis_kelamin']."</td>";
        echo "</tr>";


    ?>
    </table>
</body>
</html>