<?php
    //Memasukkan file koneksi.php
    include "koneksi.php";

    //Mengambil data dari form login
    $username= $_POST['username'];
    $password=md5($_POST['password']); 


    //Query untuk memeriksa kecocokan username dan password
    $query="SELECT * FROM user WHERE username ='$username' AND password ='$password'";
  
    //Melakukan Query
    $result=mysqli_query($connect, $query);

    //Memeriksa jumlah baris yang ditemukan
    $cek=mysqli_num_rows($result);

    //Memeriksa apakah login berhasil atau tidak
    if($cek){
        echo "Anda berhasil login. Silahkan menuju "?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    }else{
        echo "Anda gagal login. Silahkan ";?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>