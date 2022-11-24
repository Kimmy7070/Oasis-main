<?php 
session_start ();
if(!isset($_SESSION["login"]))

	header("location:log.php");

if(!isset($_SESSION["username"]))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!----font awesome cdn link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

     <!-- dropdown linking -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--custom scc file link-->
    <link rel="stylesheet" href="travel.css">
</head>
<body>
<!--header section starts-->
<section class="header">
    <a href="UserProfile.php" class="logo">Oasis</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="book.php">book now</a>
        <a href="hotel.php">hotels</a>
        <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        echo $_SESSION["username"];?>
        </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
</div>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends-->

<div class="heading" style="background: url(./img/9.jpg)">
    <h1>packages</h1>
</div>


<!--package section starts-->

<section class="packages">

    <h1 class="heading-title">top activities</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/10.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>scuba diving</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/16.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>wildlife</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/19.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>rafting</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/25.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>paragliding</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/21.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>camping</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/22.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>camp fire</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/23.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>zip-lining</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/24.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>kayaking</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/26.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>jet-skiing</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/27.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>trekking</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/28.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>rock-climbing</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/29.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <P>off-road</P>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><span class="btn">load more</span></div>
    <div class="back"> <a href="packages.php" class="btn">back</a></div>
</section>

<!--package section ends-->



<!--footer section starts-->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
        <a href="index.php"><i class="fas-fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas-fa-angle-right"></i>About</a>
        <a href="packages.php"><i class="fas-fa-angle-right"></i>Packages</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas-fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas-fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas-fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas-fa-angle-right"></i>terms</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href=""><i class="fab fa-facebook"></i>facebook</a>
            <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas-fa phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas-fa phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas-fa envelope"></i> oasis@gmail.com</a>
            <a href="#"><i class="fas-fa-map"></i> kolkata , west-bengal, 600012</a>
        </div>

    </div>

    <div class="credit">created by<span> team phoenix</span> | all rights reserved! </div>

</section>
<!--footer section ends-->


<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="travel.js"></script>
</body>
</html>