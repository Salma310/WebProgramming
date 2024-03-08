<?php
//pemberian nilai
$a = 10;
$b = 5;
// pemberian nilai dari hasil penjumlahan dan pengurangan
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
//mencetak nilai dari variabel dan ditambahkan <br> untuk baris baru
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
// untuk menampilkan informasi tipe data dan nilai dari variabel
var_dump($e);
// deklarasi variabel dengan nilai masing masing
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
//perhitungan rata rata dan disimpan ke variabel $rataRata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
// mencetak nilai dari variabel
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
// untuk menampilkan informasi tipe data dan nilai dari variabel $rataRata.
var_dump($rataRata);
"<br>";
//deklarasi variabel dengan nilai boolean
$apakahSiswaLulus = true;
"<br>";
$apakahSiswaSudahUjian = false;
"<br>";
//menampilkan informasi tipe data dan nilai dari variabel $apakahSiswaLulus dan $apakahSiswaSudahUjian.
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
"<br>";
// deklarasi variabel dengan nilai String
$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';
"<br>";
// Menggabungkan nilai dari variabel
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;
//mencetak nilai dari variabel 
echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
// Mendeklarasikan variabel $listMahasiswa sebagai array dengan beberapa elemen.
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
// mencetak elemen pertama dari array 
echo $listMahasiswa[0];
?>