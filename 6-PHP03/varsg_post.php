<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variabel Post</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name : <input type="text" name="fname">
        <input type="submit">
    </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else{
                echo $name;
            }
        }
        ?>
</body>
</html>