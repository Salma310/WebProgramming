<?php
    $nama = @$_GET['nama']; 
    $usia = @$_GET['usia'];
    //tanda @ agar tidak ada peringatan error ketika key-nya kosong

    echo "Halo {$nama}! <br> Apakah benar anda berusia {$usia} tahun ?"
?>