<?php
if(session_status() === PHP_SESSION_NONE)
    session_start();


include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

$username= $_POST['username'];
$password=$_POST['password']; 


$query="SELECT * FROM user WHERE username ='$username' AND password ='$password'";
  
//Melakukan Query
$result=mysqli_query($koneksi, $query);

//Memeriksa jumlah baris yang ditemukan
$cek=mysqli_num_rows($result);

if($cek>0){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['status'] = 'login';
    header("Location: home.html"); 
    ?>
    <?php
}else{
    ?>
    Anda gagal login. Silahkan login lagi
    <a href="login.php">Halaman Login</a><?php
    echo mysqli_error($koneksi);
}
?>