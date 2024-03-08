<?php
// pemberian nilai
$nilaiNumerik = 92;
// pengecekan kondisi dengan menggunakan struktur kontrol if-elseif-else.
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A <br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B <br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C <br>";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D <br>";
}
echo"<br>";

//pemberian nilai
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
// pengecekan kondisi menggunakan struktur kontrol while
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer<br>";
echo"<br>";

//menyimpan nilai variabel
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
//Struktur kontrol for digunakan untuk melakukan iterasi sebanyak $jumlahLahan, dimulai dari 1 hingga nilai $jumlahLahan.
for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";
echo"<br>";

//array yang berisi skor dari beberapa ujian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
//Struktur kontrol foreach digunakan untuk mengiterasi setiap elemen dalam array $skorUjian.
//Pada setiap iterasi, nilai skor dari elemen array disimpan dalam variabel $skor, 
//kemudian ditambahkan ke variabel $totalSkor.
foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";
echo"<br>";


// array berisi nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
//mengiterasi setiap elemen dalam array $nilaiSiswa.
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo"<br>";

// SOAL 4.6
// Daftar nilai dari 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
// Mengurutkan nilai dari yang terkecil ke terbesar
sort($nilaiSiswa);
// Menghapus dua nilai terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
// Menghapus dua nilai tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);
// Menghitung total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = array_sum($nilaiSiswa);
// Menampilkan hasil
echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo"<br>";


//SOAL 4.7
// Harga produk
$hargaProduk = 120000;
// Diskon yang ditawarkan (dalam persen)
$diskon = 20;
// Harga setelah diskon
if ($hargaProduk > 100000) {
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskon / 100));
} else {
    $hargaSetelahDiskon = $hargaProduk;
}
// Menampilkan hasil
echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ",", ".");
echo"<br>";
echo"<br>";


///SOAL 4.8
// Skor pemain
$skorPemain = 700;
// Total skor pemain
$totalSkor = "Total skor pemain adalah: $skorPemain";
// Menentukan apakah pemain mendapatkan hadiah tambahan
if ($skorPemain > 500) {
    $hadiahTambahan = "YA";
} else {
    $hadiahTambahan = "TIDAK";
}
// Menampilkan hasil
echo $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";



?>
