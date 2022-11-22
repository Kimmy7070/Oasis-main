<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SignUp </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="travel.css">
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
    <a href="index.php" class="logo">Oasis</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section ends-->

<form action="userRegistrationBE.php" method="POST">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="signup-form">
    <div class="form-group">

    <label class="label_txt">First Name</label>
    <input type="text" class="form-control" name="fname" required="">
  </div>
  <div class="form-group">
    <label  class="label_txt">Last Name</label>
    <input type="text" class="form-control" name="lname" required="">
  </div>
  <div class="form-group">
    <label  class="label_txt">Username</label>
    <input type="text" class="form-control" name="username" required="">
  </div>
  <div class="form-group">
    <label  class="label_txt">Email</label>
    <input type="email" class="form-control" name="email" required="">
  </div>
  <div class="form-group">
    <label  class="label_txt">Password</label>
    <input type="password" class="form-control" name="password" required="">
  </div>
  <input type="submit" class="btn" value="Register" name="submit">
  <p>Have an account? <a href="log.php">Log In</a></p>
</form>
</div>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>
</form>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="travel.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>