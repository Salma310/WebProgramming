<html>
    <head></head>
    <body>
    <?php
        session_start();

        if($_SESSION['status'] == 'login'){
            echo "Selamat datang <br>".$_SESSION['username'];
            ?>
            <br><a href="sessionLogout.php">Log Out</a>
        <?php
        }else{
            echo "Anda belum login. Silahkan "?>
            <a href="sessionLoginForm.html">Log In</a>
        <?php
        }
    ?>
    </body>
</html>