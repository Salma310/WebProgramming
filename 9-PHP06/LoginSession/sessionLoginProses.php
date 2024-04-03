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
    if($cek>0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['status'] = 'login';
        ?>
        Anda berhasil login. Silahkan menuju
        <a href="homeSession.php">Halaman HOME</a><?php
    }else{
        ?>
        Anda gagal login. Silahkan login lagi
        <a href="sessionLoginForm.html">Halaman Login</a><?php
        echo mysqli_error($connect);
    }
?>