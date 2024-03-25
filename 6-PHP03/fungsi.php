<?php
    //membuat fungsi 
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    echo "Umur saya adalah ".hitungUmur(2004,2024). "tahun";

    echo "<hr>";


    //function perkenalan($nama, $salam) {
    function perkenalan($nama, $salam="Assalamualaikum") {

        //echo "Assalamualaikum, ";
        //echo "Perkenalkan, nama saya Elok <br/>";

        echo $salam. ", ";
        echo "Perkenalkan, nama saya " .$nama. " <br/>";

        //memanggil fungsi lain
        echo "Saya berusia ".hitungUmur(2004,2024). " tahun<br/>";

        echo "Senang berkenalan dengan Anda<br/>";

    }


    //memanggil fungsi yang sudah dibuat
    //perkenalan();
    perkenalan("Hamdana", "Hallo");

    echo "<hr>";

    $saya = "Elok";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    //perkenalan($saya, $ucapanSalam);
    perkenalan($saya);
?>