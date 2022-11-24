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

<div class="heading" style="background: url(./img/9.webp)">
    <h1>packages</h1>
</div>

<!--package section starts-->

<section class="packages">

    <h1 class="heading-title">explore india</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/30.webp" alt="">
            </div>
            <div class="content">
                <h3>goa</h3>
                <p>3N | 4D</p>
                <p>Rs 14,800/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/31.webp" alt="">
            </div>
            <div class="content">
                <h3>new delhi</h3>
                <p>3N | 4D</p>
                <p>Rs 18,400/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/32.webp" alt="">
            </div>
            <div class="content">
                <h3>Mumbai</h3>
                <p>4N | 5D</p>
                <p>Rs 19,000/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/33.webp" alt="">
            </div>
            <div class="content">
                <h3>rajasthan</h3>
                <P>9N | 10D</P>
                <p>Rs 20,800/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/34.webp" alt="">
            </div>
            <div class="content">
                <h3>tamil nadu</h3>
                <P>9N | 10D</P>
                <p>Rs 21,600/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/35.webp" alt="">
            </div>
            <div class="content">
                <h3>kashmir</h3>
                <P>10N | 11D</P>
                <p>Rs 24,700/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/36.webp" alt="">
            </div>
            <div class="content">
                <h3>andaman and nicobar</h3>
                <P>7N | 8D</P>
                <p>Rs 29,500/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/37.webp" alt="">
            </div>
            <div class="content">
                <h3>kerala</h3>
                <P>9N | 10D</P>
                <p>Rs 25,800/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/38.webp" alt="">
            </div>
            <div class="content">
                <h3>himachal pradesh</h3>
                <P>11N | 12D</P>
                <p>Rs 27,500/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/39.webp" alt="">
            </div>
            <div class="content">
                <h3>andhra pradesh</h3>
                <P>9N | 10D</P>
                <p>Rs 25,800/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/40.webp" alt="">
            </div>
            <div class="content">
                <h3>arunachal pradesh</h3>
                <P>9N | 10D</P>
                <p>Rs 28,500/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/41.webp" alt="">
            </div>
            <div class="content">
                <h3>leh ladakh</h3>
                <P>10N | 11D</P>
                <p>Rs 28,700/- per person</p>
                <a href="book.php" class="btn">know more</a>
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    <div class="back"><a href="userProfile.php" class="btn">back</a></div>
</section>

<!--package section ends-->
<!--footer section starts-->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
        <a href="userProfile.php"><i class="fas-fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas-fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas-fa-angle-right"></i>Packages</a>
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
