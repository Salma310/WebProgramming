<?php
//Menggunakan filter_input untuk validasi input

$user_input = filter_input(INPUT_POST, 'user_input', FILTER_SANITIZE_STRING);

//Menggunaakan htmlspesialchars untuk menghindari HTML injection saat menampilkan data
echo '<div>'.htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8'). '</div>';

?>