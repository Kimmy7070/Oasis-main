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
    <title>book now</title>

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
        <a href="userProfile.php">Home</a>
        <a href="package.php">Packages</a>
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

<div class="heading" style="background: url(./img/42.webp)">
    <h1>book now</h1>
</div>


<!--booking section starts-->

<section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>

        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>

        <div class="inputBox">
            <span>where to go :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>

        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>

        <div class="inputBox">
            <span>arrival :</span>
            <input type="date" name="arrivals">
        </div>

        <div class="inputBox">
            <span>departure :</span>
            <input type="date" name="leaving">
        </div>

    </div>
    <input type="submit" value="submit" class="btn" name="send">
    <input type="submit" value="cancel" class="btn" name="send">

    <div class="back"><a href="packages.php" class="btn">back</a></div>
</form>
</section>
<!--booking section ends-->

<!--footer section starts-->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
        <a href="userProfile.php"><i class="fas-fa-angle-right"></i>Home</a>
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
            <a href="#"><i class="fab fa-facebook"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
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