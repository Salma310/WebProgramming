<?php

$pesan = "Saya Arek Malang";
//echo strrev($pesan) . "<br>"; // untuk menjadikan kata di kalimat yg ada di var pesan terbalik

#ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
#ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev ($pesan), $pesanPerKata);
#gabungkan kembali array menjadi string dengan perintah implode
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

?>