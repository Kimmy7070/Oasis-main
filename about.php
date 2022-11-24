<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!----font awesome cdn link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

    <!--custom scc file link-->
    <link rel="stylesheet" href="travel.css">
</head>
<body>
<!--header section starts-->
<section class="header">
    <a href="userProfile.php" class="logo">Oasis</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="log.php">Login</a>
        <a href="signup.php">sign up</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends-->

<div class="heading" style="background: url(./img/6.jpg)" >
    <h1>about us</h1>
</div>


<!--about section starts-->

<section class="about">

    <div class="image">
        <img src="./img/8.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <P>We, at ‘Oasis’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.
        We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other fundamental travel administrations.</P>
        <div class="icons-container">
            <div class="icons">
                <i class="fas-fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas-fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas-fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>

</section>
<!--about section ends-->

<!--review section starts-->
<section class="reviews">
    <h1 class="heading-title">client reviews</h1>
    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="./img/12.jpg">
                <p>Well arranged amd coordinated Beautiful view of pangong lake and the scenic drives</p>
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>nick</h3>
                <span>traveler</span>
                <img src="./img/14.jpg">
                <p>Our tour with oasis was very good.the tour was well planned & our guide Mr Bijay was awesome. Thanks oasis for such a wonderful tour.</p>
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>shelly</h3>
                <span>traveler</span>
                <img src="./img/11.jpg">
                <p>Overall a good experience!</p>
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>nikita pai</h3>
                <span>traveler</span>
                <img src="./img/13.jpg">
                <p>Simply amazing and will travel again with you for sure. They even helped my old parents and took care of my family</p>
            </div>
        </div>
    </div>

    <div class="back"><a href="userProfile.php" class="btn">back</a></div>


</section>

<!--review section ends-->



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