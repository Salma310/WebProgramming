<?php
// deklarasi variabel dan pemberian nilai
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil."; // mencetak hasil penjumlahan menggunakan interpolasi string.
echo "<br>";
$benar = true;
$salah = false;
echo "Variabel benar : $benar, Variabel salah : $salah";
echo "<br>";

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "<br>";
echo "Selamat datang di " . NAMA_SITUS . " situs yang
didirikan pada tahun " .TAHUN_PENDIRIAN. ".";
?>