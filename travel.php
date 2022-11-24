<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!----font awesome cdn link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="travel.css">
</head>
<body>

<!--header section starts-->
<section class="header">
    <a href="userProfile.php" class="logo">Oasis</a>

    <nav class="navbar">
        <a href="travel.php">Home</a>
        <a href="packages.php">Packages</a>
        <a href="about.php">About</a>
        <a href="book.php">Book Now</a>
        <a href="log.php">Login/SignUp</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends-->

<!--home section starts-->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(./img/18.webp)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>plan your escape</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class=" swiper-slide slide" style="background: url(./img/20.webp)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the colourful world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./img/15.webp)">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!--home section ends-->

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>get instant discount on bookings above Rs 20,000/-</h3>
        <p>hurry up, book now</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer section ends-->

<!--service section starts-->
<section class="services">

<h1 class="heading-title">our services</h1>

<div class="box-container">

     <div class="box">
        <img src="./img/images/icon-2.webp" alt="">
        <h3>adventure</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-2.webp" alt="">
        <h3>tour guide</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-3.webp" alt="">
        <h3>rental cars</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-4.webp" alt="">
        <h3>flights</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-5.webp" alt="">
        <h3>airport taxies</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-6.webp" alt="">
        <h3>trains</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-7.webp" alt="">
        <h3>hotels</h3>
     </div>

     <div class="box">
        <img src="./img/images/icon-7.webp" alt="">
        <h3>others</h3>
     </div>
</div>
</section>
<!--service section ends-->       

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>flat 15% off on international flights</h3>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer section ends-->

<!--home about section starts-->

<section class="home-about">
    <div class="image">
        <img src="./img/5.webp" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>We, at ‘Oasis’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.
        We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other fundamental travel administrations.</p>
        <a href="about.php" class="btn">read more</a>   
    </div>
</section>
<!--home about section ends-->

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>book now to get 5% off on domestic flights</h3>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!--home offer section ends-->

<!--home packages section starts-->

<section class="home-packages">

    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/4.webp" alt="">
            </div>

            <div class="content">
                <h3>darjeeling</h3>
                <p>2N | 3D</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/1.webp" alt="">
            </div>

            <div class="content">
                <h3>Agra</h3>
                <p>2N | 3D</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/2.webp" alt="">
            </div>

            <div class="content">
                <h3>sikkim</h3>
                <p>3N | 4D</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"> <a href="packages.php" class="btn">load more</a></div>

</section>
<!--home packages section ends-->

<!--home offer section starts-->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>hurry up and book now to get upto 50% off on travels anywhere across the world</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!--home offer section ends-->

<!--footer section starts-->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
        <a href="travel.php"><i class="fas-fa-angle-right"></i>Home</a>
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
            <a href="#"><i class="fas-fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas-fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas-fa-envelope"></i> oasis@gmail.com</a>
            <a href="#"><i class="fas-fa-map"></i> kolkata , west-bengal, 600012</a>
        </div>

    </div>

    <div class="credit">created by<span> team phoenix</span> | all rights reserved | </div>

</section>
<!--footer section ends-->


<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="travel.js"></script>
</body>
</html>
