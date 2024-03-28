<html>
    <head>
        <title>Empty Function</title>
    </head>
    <body>
        <?php
       $myArray = array(); //Array kosong
       if(empty($myArray)){
            echo "Array tidak terdefinisi atau kosong.";
       }else{
        echo "Array terdefinisi dan tidak kosong.";
       }

       echo "<br>";

       //tambahan
       if(empty($nonExsistentVar)){
            echo "Variabel tidak terdefinisi atau kosong.";
       }else{
            echo "Variabel  terdefinisi atau tidak kosong.";
       }
        

        ?>
    </body>
</html>
