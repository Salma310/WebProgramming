<?php
// pemberian nilai pada
$a = 10;
$b = 5;
// operator aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
// Menggunakan echo untuk mencetak nilai dari variabel 
echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "Hasil $a + $b = $hasilTambah <br>";
echo "Hasil $a - $b = $hasilKurang <br>";
echo "Hasil $a x $b = $hasilKali <br>";
echo "Hasil $a : $b = $hasilBagi <br>";
echo "Sisa bagi $a dengan $b adalah $sisaBagi <br>";
echo "Hasil perpangkatan $a pangkat $b adalah $pangkat <br>";
echo "<br>";
// operator pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
// Menggunakan echo untuk mencetak nilai dari variabel 
echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "$a == $b maka "; var_dump($hasilSama);
echo "<br>";
echo "$a != $b maka "; var_dump($hasilTidakSama);
echo "<br>";
echo "$a < $b maka "; var_dump($hasilLebihKecil);
echo " = 5 lebih kecil <br>";
echo "$a > $b maka "; var_dump($hasilLebihBesar);
echo "<br>";
echo "$a <= $b maka "; var_dump($hasilLebihKecilSama);
echo "<br>";
echo "$a >= $b maka "; var_dump($hasilLebihBesarSama);
echo "<br>";
echo "<br>";
// operator logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
//Menggunakan echo untuk mencetak nilai dari variabel 
echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "$a && $b = $hasilAnd ", var_dump($hasilAnd) , "<br>";
echo "$a || $b = $hasilOr ", var_dump($hasilOr) ,"<br>";
echo "!$a = $hasilNotA ", var_dump($hasilNotA);
echo "<br>";
echo "!$b = $hasilNotB ", var_dump($hasilNotB);
echo "<br>";
echo "<br>";
// operator penugasan
$op1 = $a + $b;
$op2 = $a - $b;
$op3 = $a * $b;
$op4 = $a / $b;
$op5 = $a % $b;
//Menggunakan echo untuk mencetak nilai dari variabel 
echo "Diketahui a = $a dan b = $b, maka: <br>";
echo "Hasil dari $a += $b adalah $op1 <br>";
echo "Hasil dari $a -= $b adalah $op2 <br>";
echo "Hasil dari $a *= $b adalah $op3 <br>";
echo "Hasil dari $a /= $b adalah $op4 <br>";
echo "Hasil dari $a %= $b adalah $op5 <br>";
echo "<br>";
// identik dan tidak identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
// Menggunakan echo untuk mencetak nilai dari variabel 
echo "$a apakah identik dengan $b? Jawab: ",
var_dump($hasilIdentik), "<br>";
echo "$a apakah identik dengan $b? Jawab: ", 
var_dump($hasilTidakIdentik), " <br>";
echo "<br>";


// SOAL Cerita N0 3.6
echo "============================== Soal Restoran =============================<br>";

// Jumlah total kursi di restoran
$totalKursi = 45;

// Jumlah kursi yang telah ditempati oleh pelanggan pada suatu malam
$kursiTerisi = 28;

// Menghitung jumlah kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi yang masih kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "Sebuah restoran memiliki $totalKursi kursi di dalamnya. <br>";
echo "Pada suatu malam, $kursiTerisi kursi telah ditempati oleh pelanggan. <br>";
echo "Jumlah kursi yang masih kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: $persentaseKosong %";

?>

