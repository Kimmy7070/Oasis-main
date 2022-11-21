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

    <!----dropdown brought--->
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
        <a href="book.php">book now</a>
        <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        echo $_SESSION["username"];?>
          </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends-->


<!--home section starts-->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(./img/43.webp)">
                <div class="content">
                    <span>luxury living</span>
                    <h3>discover a brand luxurious hotel</h3>
                    <a href="rooms.php" class="btn">our rooms</a>
                    <a href="hotel.php" class="btn">book now</a>
                </div>
            </div>

            <div class=" swiper-slide slide" style="background: url(./img/44.webp)">
                <div class="content">
                    <span>luxury living</span>
                    <h3>discover a brand luxurious hotel</h3>
                    <a href="rooms.php" class="btn">our rooms</a>
                    <a href="hotel.php" class="btn">book now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!--home section ends-->

<!--booking section starts-->

<section class="search">
    
    <form action="hotel.php" methot="post" class="book-form">
    
        <div class="flex">
    
            <div class="inputBox">
                <span>check-in :</span>
                <input type="date" name="arrival">
            </div>
    
            <div class="inputBox">
                <span>check-out :</span>
                <input type="date" name="leaving">
            </div>

            <div class="inputBox">
                <span>adults :</span>
                <input type="number" placeholder="adults" name="guests">
            </div>

            <div class="inputBox">
                <span>child :</span>
                <input type="number" placeholder="number of children" name="guests">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </section>
<!--booking section ends-->

<!--hotels section starts-->

<section class="packages">

    <h1 class="heading-title">explore hotels</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/46.webp" alt="">
            </div>
            <div class="content">
                <h3>hotel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/47.webp" alt="">
            </div>
            <div class="content">
                <h3>hotel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/48.webp" alt="">
            </div>
            <div class="content">
                <h3>hotel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="rooms.php" class="btn">load more</a></div>
</section>

<!--hotels section ends-->

<!--villa section starts-->

<section class="packages">

    <h1 class="heading-title">villas & resorts</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/49.webp" alt="">
            </div>
            <div class="content">
                <h3>villa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/50.webp" alt="">
            </div>
            <div class="content">
                <h3>villa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/52.webp" alt="">
            </div>
            <div class="content">
                <h3>villa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="rooms.php" class="btn">load more</a></div>
</section>

<!--villa section ends-->

<!--home stay section starts-->

<section class="packages">

    <h1 class="heading-title">home stays</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./img/53.webp" alt="">
            </div>
            <div class="content">
                <h3>stay</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/55.webp" alt="">
            </div>
            <div class="content">
                <h3>stay</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./img/56.webp" alt="">
            </div>
            <div class="content">
                <h3>stay</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="rooms.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="rooms.php" class="btn">load more</a></div>
    <div class="back"> <a href="userProfile.php" class="btn">back</a></div>
</section>

<!--home stay section ends-->

<!--service section starts-->
<section class="services">

    <h1 class="heading-title">our services</h1>
    
    <div class="box-container">
    
         <div class="box">
            <img src="./img/images/icon-2.png" alt="">
            <h3>food</h3>
         </div>
    
         <div class="box">
            <img src="./img/images/icon-2.png" alt="">
            <h3>laundry</h3>
         </div>
    
         <div class="box">
            <img src="./img/images/icon-3.png" alt="">
            <h3>rental cars</h3>
         </div>
    
         <div class="box">
            <img src="./img/images/icon-7.png" alt="">
            <h3>others</h3>
         </div>
    </div>
</section>
<!--service section ends-->      

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