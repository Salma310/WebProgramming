<?php
//Koneksi ke database 
//$connect = mysqli_connect("localhost", "root", "", "prakwebdb",3306 );

// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "prakwebdb"; // Ganti dengan nama database Anda
$port = 3306; // Port database (opsional)

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname, $port);

//periksa koneksi
if(mysqli_connect_error()){
    die("Koneksi database gagal : ".mysqli_connect_error());
}
?>