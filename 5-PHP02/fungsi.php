<?php
 function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. " <br/>";
    
   //memanggil fungsi lain
   echo "Saya berusia ". hitungUmur(2004,2023) . " tahun<br/>";
   echo "Senang berkenalan dengan anda<br/>";
 }

 //memanggil fungai yang sudah dibuat
 perkenalan("Hamdana", "Hallo");

 echo "<hr>";

 $saya = "Elok";
 $ucapanSalam = "Selamat Pagi";

 //perkenalan($saya, $ucapanSalam);
 perkenalan($saya);  // memanggil lagi tanpa mengisi parameter salam
 
 //membuat fungsi
 function hitungUmur($thn_lahir, $thn_sekarang) {
      $umur = $thn_sekarang - $thn_lahir;
      return $umur;
 }


 echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun"; 

 ?>