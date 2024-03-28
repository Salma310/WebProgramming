<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection</title>
</head>
<body>

    <!-- <form method="post" action="html_aman.php">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
        </form> -->
    <?php
    // cek apakah form sudah di submit dan data 'input' sudah ada
    if (isset($_POST['input'])) {
        $input = $_POST['input'];

        // Melakukan sanitasi input dengan htmlspecialchars
        $input = htmlspecialchars($input, ENT_QUOTES,'UTF-8');

        // Menampilkan input yang telah disanitasi
        echo "<p>Input yang Anda masukkan: $input</p>";

        }else{
            echo "<p>Silahkan masukkan data pada formulir!</p>";
        }

    // cek apakah form sudah di submit dan data 'input' sudah ada
    if (isset($_POST['input'])) {
        //memeriksa apakah input adalah email yang valid
        $email =  $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //pengolahan email yang aman/valid
            // Sanitasi email untuk mencegah karakter berbahaya
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

            echo "Data Email berhasil dimasukkan";

        }else{
            //Menangani input yang tidak valid
            echo "Input 'email' yang anda masukkan tidak valid!";
        }
    }else{
        echo "<p>Silahkan masukkan email pada formulir!</p>";
    }
    ?>
</body>
</html>
