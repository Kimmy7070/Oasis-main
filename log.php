<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="travel.css">
    


    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!----font awesome cdn link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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

<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="login-form">
                <h1>Oasis</h1>
        <form method="POST" action="loginBE.php">
  <div class="form-group">
    <label class="label_txt">Username</label>
    <!--<input type="text" name="username" class="form-control">-->
    <input type="text" name="username" require>
  </div>
  <div class="form-group">
    <label  class="label_txt">Password</label>
    <!--<input type="password" name="password" class="form-control">-->
    <input type="password" name="password" require>
  </div>
  <input type="submit" value="Login" class="btn btn-secondary" name="sub">
</form>
<P style="font-size: 12px; text-align: center; margin-top: 10px;">
<a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a></p>
<br>
<p>Don't have an account? <a href="signup.php">Sign up</a></p>
</div>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>


<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="travel.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>