<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Contoh Form dengan PHP</h2>
    <form method="post" action="form_lanjut.php">
        <label for="buah">Pilih Buah : </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit : </label> <br>
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

        <br>

        <label>Pilih Jenis Kelamin :</label> <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

        <br>
        <input type="submit" value="Submit">

    </form>

    <?php
    //Inisialisasi variabel
    $namaErr = "";
    $nama = "";

    //cek apakah form sudah disubmit 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];
        if(isset($_POST['warna'])){
            $selectedWarna = $_POST['warna'];
        }else{
            $selectedWarna = [];
        }

        $selectedJenisKelamin = $_POST['jenis_kelamin'];
        echo "Anda memilih buah : " . $selectedBuah. "<br>";

        if (!empty($selectedWarna)) {
            echo "Warna Favorit Anda : " . implode(", ", $selectedWarna). "<br>";
        }else{
            echo "Anda tidak memiliih warna favorit. <br>";
        }

        echo "Jenis kelamin Anda : ". $selectedJenisKelamin;}
    // }else{
    //     echo "Form belum disubmit/ Data tidak ada";
    // }
    ?>
    </form>
</body>
</html>