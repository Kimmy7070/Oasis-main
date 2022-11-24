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
    <a href="userProfile.php" class="logo">Oasis</a>

    <nav class="navbar">
        <a href="userProfile.php">Home</a>
        <a href="package.php">Packages</a>
        <a href="hotel.php">hotels</a>
        <a href="book.php">book now</a>
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


<!--home 5star section starts-->

<section class="packages">

    <h1 class="heading-title">premium rooms</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/57.webp" alt="">
            </div>
            <div class="content">
                <h3>single</h3>
                <p>Rs 1900/night</p>
                <p>max: 1 person | bed: 1 single bed</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/63.webp" alt="">
            </div>
            <div class="content">
                <h3>twin</h3>
                <p>Rs 2500/night</p>
                <p>max: 2 person(s) | bed: twin beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/58.webp" alt="">
            </div>
            <div class="content">
                <h3>double</h3>
                <p>Rs 3000/night</p>
                <p>max: 2 person(s) | bed: 1 king-size/twin beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/60.webp" alt="">
            </div>
            <div class="content">
                <h3>triple</h3>
                <p>Rs 3900/night</p>
                <p>max: 3 person(s) | bed: 1 king-size with 1 single</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/61.webp" alt="">
            </div>
            <div class="content">
                <h3>quad</h3>
                <p>Rs 4400/night</p>
                <p>max: 4 person(s) | bed: 1 king-size with twin beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/62.webp" alt="">
            </div>
            <div class="content">
                <h3>queen</h3>
                <p>Rs 5000/night</p>
                <p>max: 4 person(s) | bed: 2 queen-sized beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    <div class="back"> <a href="hotel.php" class="btn">back</a></div>
</section>

<!--home 5star section ends-->

<!--home 3star section starts-->

<section class="packages">

    <h1 class="heading-title">economy rooms</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/64.webp" alt="">
            </div>
            <div class="content">
                <h3>single</h3>
                <p>Rs 1000/night</p>
                <p>max: 1 person | bed: 1 single bed</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/65.webp" alt="">
            </div>
            <div class="content">
                <h3>twin</h3>
                <p>Rs 2000/night</p>
                <p>max: 2 person(s) | bed: twin beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/66.webp" alt="">
            </div>
            <div class="content">
                <h3>double</h3>
                <p>Rs 2600/night</p>
                <p>max: 2 person(s) | bed: 1 king-size/twin beds<p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/67.webp" alt="">
            </div>
            <div class="content">
                <h3>triple</h3>
                <p>Rs 3000/night</p>
                <p>max: 3 person(s) | bed: 1 king-size with 1 single</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/68.webp" alt="">
            </div>
            <div class="content">
                <h3>quad</h3>
                <p>Rs 3700/night</p>
                <p>max: 4 person(s) | bed: 1 king-size with twin beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/69.webp" alt="">
            </div>
            <div class="content">
                <h3>queen</h3>
                <p>Rs 4000/night</p>
                <p>max: 4 person(s) | bed: 2 queen-sized beds</p>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

    </div>
    <div class="load-more"> <a href="rooms.php" class="btn">load more</a></div>
    <div class="back"> <a href="hotel.php" class="btn">back</a></div>
</section>

<!--home 3star section ends-->

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
            <a href="https://www.facebook.com/login"><i class="fab fa-facebook"></i>facebook</a>
            <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Flogin%2F%3F__coig_login%3D1"><i class="fab fa-instagram"></i>instagram</a>
            <a href="https://www.linkedin.com/login/"><i class="fab fa-linkedin"></i>linkedin</a>
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
