<?php
    include "koneksi.php";
    
    //Mengambil data dari form login
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    //Query untuk memeriksa kecocokan username dan password
    $query="SELECT * FROM user WHERE username ='$username' AND password ='$password'";
  
    //Melakukan Query
    $result=mysqli_query($connect, $query);

    //mengambil satu baris data dari hasil kueri yang telah dieksekusi sebelumnya
    $row=mysqli_fetch_assoc($result); // Disimpan di variabel $row sebagai array asosiatif

    //Memeriksa apakah login berhasil atau tidak
    if($row['level']==1){
        echo "Anda berhasil login. Silahkan menuju "?>
        <a href="homeAdmin.html">Halaman HOME Admin</a>
        <?php
    }else if($row['level']==2){
        echo "Anda berhasil login. Silahkan menuju "?>
        <a href="homeGuest.html">Halaman HOME Guest</a>
        <?php
    }else{
        echo "Anda gagal login. Silahkan ";?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>
