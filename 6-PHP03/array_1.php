<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Index</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen=["Elok NurHamdana", "Unggul Pamenang", "Bagas Nugraha"];

        echo $Listdosen[2]."<br>";
        echo $Listdosen[0]."<br>";
        echo $Listdosen[1]."<br>";

        foreach ($Listdosen as $arrayShow) {
            echo $arrayShow."<br>";
        }
    ?>
</body>
</html>