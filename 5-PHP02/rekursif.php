<?php

//Array bernama menu
$menu = [
    [
        "nama" => "Beranda" 
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                [   
                    "nama" => "Pantai"
                ],
                [
                    "nama" => "Gunung"
                ]
                ]   
            ]
        ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

//Fungsi untuk menampilkan var menu utama saja yaitu "nama"
// function tampilkanMenuBertingkat(array $menu){
//     echo "<ul>";
//     foreach($menu as $key => $item){
//         echo "<li>{$item['nama']}</li>";
//     echo "</ul>";
//     tampilkanMenuBertingkat($menu);
// }
// tampilkanMenuBertingkat($menu);



//Fungsi untuk menampilkan subMenu nya di var menu dengan nama "subMenu"
function tampilkanMenuBertingkat(array $menu, $indentation = 0) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>";
        echo str_repeat("&nbsp;&nbsp;", $indentation);
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $indentation + 1); //untuk menampilkan sub menu dalam array
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);

?>
