<?php
session_start();
$con=mysqli_connect("localhost","root","","agroconnect");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['register_btn']))
{
    $aadhar=$_POST['aadhar_no'];
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile_no'];

    $query="insert into register(aadhar,fullname,password,mobile)values('$aadhar','$fullname','$password','$mobile')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      $_SESSION['fullname']=$fullname;
      echo "<script>alert('Registered successfully.')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>AgroConnect</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">

    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.html" class="nav-brand"><img src="img/core-img/new-logo.jpeg" alt="" style="margin-top:0px; margin-left:150px; height:70px;width:120px;"></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li ><a href="index.html">Home</a></li>
                  <li><a href="#contact-area">Contact</a></li>


            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="login">
    <div class="login-header">
      <h1>Register</h1>
    </div>
    <form method="post" action="">
    <div class="login-form">
      <h3>Aadhar no.</h3>
      <input type="text" placeholder="Enter your 12-digit Aadhar no." name="aadhar_no" maxlength="12" required/>
      <h3>Full Name:</h3>
      <input type="text" placeholder="Enter your full name" name="fullname" required/><br>

      <h3>Password</h3>
      <input type="password" placeholder="Enter password" name="password" required/><br>
      <h3>Mobile no.</h3>
      <input type="text" placeholder="Enter your mobile no." name="mobile_no" maxlength="10" required /><br>


      <input type="submit" value="Register" name="register_btn"/>
      <br>
      <a class="sign-up" href="login.php">Sign In instead?</a>
      <br>

    </div>
  </form>
  </div>



    <footer class="footer-area" id="contact-area">
      <!-- Main Footer Area -->
      <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container">
          <div class="row">

            <!-- Single Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-80">
                <a href="#" class="foo-logo d-block mb-30"><img src="img/core-img/new-logo.jpeg" alt=""></a>
                <p style="bold">Investments in agriculture are the best weapons against hunger and poverty, and they have made life better for billions of people.</p>
                <div class="contact-info">
                  <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>Rajasthan, India</span></p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info.agroconnect@gmail.com</span></p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i><span>+91-9458218619</span></p>
                </div>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
            <h5 class="widget-title" style="color:white;">WHERE WE ARE</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.7096383650714!2d74.65889401435399!3d26.400566888306223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be172836cdae9%3A0x649b156f6ec78963!2sGovernment%20women%20engineering%20College%20Ajmer!5e0!3m2!1sen!2sin!4v1578395051383!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-80">
                <h5 class="widget-title">STAY CONNECTED</h5>
                <!-- Footer Social Info -->
                <div class="footer-social-info">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <span>Facebook</span>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <span>Twitter</span>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                    <span>Pinterest</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Copywrite Area  -->

      </div>
    </footer>

  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
  <script>


  </script>
</body>

</html>
