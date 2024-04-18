<?php
// Panggil file koneksi database
include 'config/koneksi.php'; // Sesuaikan dengan nama file koneksi Anda

// Tangkap data yang dikirimkan dari formulir
$nama = $_POST['nama'];
$jns_kendaraan = $_POST['jns_kendaraan'];
$waktu = $_POST['waktu_booking'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$jns_layanan = $_POST['jns_layanan'];


// Buat query untuk menyimpan data ke database
$query = "INSERT INTO booking (nama, jenis, tanggal, alamat, no_telp, layanan) VALUES ('$nama', '$jns_kendaraan', '$waktu', '$no_telp', '$alamat', '$jns_layanan')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Booking berhasil.";
    echo "Kembali ke Halaman Utama <a href='home.html'>di sini</a>";
    //header("Location: login.php"); 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
