<?php
if(session_status() === PHP_SESSION_NONE)
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/page.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>
<body>
  <section>
    <div class="container flex">
      <div class="left">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="image/gallery-1.png" alt="">
            </div>
            <div class="item">
                <img src="image/gallery-2.png" alt="">
            </div>
            <div class="item">
                <img src="image/gallery-4.png" alt="">
            </div>
        </div>
        <div class="button">
          <button><a href="index.html"> Login</a></button><br>
          <button><a href="register.html"> Register</a></button>
        </div>
      </div>
      <div class=" right">
        <div class="logo">
          <img src="image/autocar.jpg" alt="">
        </div>

        <h1>Log In</h1>
        <p>Log in to continue for booking.</p>

        <form action="cek_login.php" method="post">

            <?php 
            if(isset($_SESSION['_flashdata'])){
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                echo get_flashdata($key);
                }
            }
            ?>

            <div class="box">
                <input type="text" name="username" required>
                <label>Username</label>
                <!-- <input type="email" placeholder="Email Address"> -->
                <i class="far fa-envelope"></i>
            </div>
            <div class="box">
                <input type="password" name="password" required>
                <label>Password</label>
                <!-- <input type="email" placeholder="Password"> -->
                <i class="far fa-lock"></i>
            </div>
            <div class="box">
                <button>Log In</button>
                <a href="#">Forget Password</a>
            </div>
        </form>
        
        <!-- <div class="social">
          <h3>Or Login With:</h3>
          <div class="icon">
            <img src="https://img.icons8.com/color/48/000000/facebook-circled--v1.png" />
            <img src="https://img.icons8.com/color/48/000000/twitter-circled--v1.png" />
            <img src="https://img.icons8.com/color/48/000000/linkedin-circled--v2.png" />
            <img src="https://img.icons8.com/color/48/000000/pinterest--v1.png" />
            <img src="https://img.icons8.com/color/48/000000/github--v1.png" />
          </div>
        </div> -->
      </div>
    </div>

  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      items: 1
    })
  </script>
</body>
</html>
