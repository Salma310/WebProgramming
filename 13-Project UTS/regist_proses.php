<?php
// Panggil file koneksi database
include 'config/koneksi.php'; // Sesuaikan dengan nama file koneksi Anda

// Tangkap data yang dikirimkan dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// // Enkripsi password sebelum disimpan ke database
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Buat query untuk menyimpan data ke database
$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
   // echo "Registrasi berhasil. Silakan login <a href='login.php'>di sini</a>.";
    header("Location: login.php"); 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
