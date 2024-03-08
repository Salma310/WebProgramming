<?php
// array berisi nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus =[];
//mengiterasi setiap elemen dalam array $nilaiSiswa.
foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo"Daftar nilai siswa yang lulus: ". implode(', ', $nilaiLulus);
echo "<br> <br>";


// array daftar nama karyawan beserta tahun pengalaman kerja mereka.
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
// array menyimpan nama-nama karyawan yang memiliki pengalaman kerja lebih dari 5 tahun.
$karyawanPengalamanLimaTahun = [];
//  untuk mengiterasi setiap elemen dalam array $daftarKaryawan.
foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan [0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ', 
$karyawanPengalamanLimaTahun);
echo "<br> <br>";

$daftarNilai = [ 
    'Matematika' => [
        ['Alice', 85], 
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai [$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br> <br>";


//SOAL CERITA NO 5.4
// Array dua dimensi berisi nama dan nilai siswa
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
// Menghitung rata-rata nilai kelas
$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRata = $totalNilai / count($daftarNilai);
// Mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas ($rataRata):<br>";
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
    }
}
?>
