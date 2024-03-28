<!DOCTYPE html>
<html>
<head>
    <title>Regular Expression PHP</title>
</head>
<body>
    <?php
        $pattern = '/[a-z]/'; //Mencocokkan huruf kecil.
        $text = 'This is a Sample Text.';
        if (preg_match($pattern, $text)) {
            echo "Huruf kecil ditemukan!"; // adalah outputnya
        } else {
            echo "Tidak ada huruf kecil!";
        }

        echo "<hr>";

        $pattern = '/[0-9]+/'; //Mencocokkan satu atau lebih digit
        $text = 'There are 123 apples';
        if (preg_match($pattern, $text, $matches)){
            echo "Cocokkan : ".$matches[0];
        }else{
            echo "Tidak ada yang cocok!";
        }//output "Cocokkan : 123"

        echo "<hr>";

        $pattern = '/apple/'; 
        $replacement = 'banana';
        $text = 'I like apple pie';
        $new_text = preg_replace($pattern, $replacement, $text);
        echo $new_text; // Output "Ilike banana pie"

        echo "<hr>";

        $pattern = '/go*d/'; //Mencocokkan "god", "good", "goooood", dll
        $text = 'god is good';
        if (preg_match($pattern, $text, $matches)){
            echo "Cocokkan : ".$matches[0];
        } else{
            echo "Tidak ada yang cocok!";
        }

        echo "<hr>";

        //Soal 5.5 : script diatas diubah menggunakan '?'
        $pattern = '/colou?r/'; //Mencocokkan color
        $text = 'I like the color of the sky.';
        if (preg_match($pattern, $text, $matches)){
            echo "Cocokkan : ".$matches[0];
        } else{
            echo "Tidak ada yang cocok!";
        }

        echo "<hr>";

        // Soal 5.6: di ubah menggunakan `{n,m}`
        $pattern = '/jump{1,2}s/';
        $text = "The quick brown fox jumps over the lazy dog.";
        if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan (1-2 's'): " . $matches[0] . "\n";
        } else {
        echo "Tidak ada yang cocok!\n";
        }
    ?>
</body>
</html>