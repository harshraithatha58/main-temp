<?php
require './_init.php';
session_start();
if (isset($_POST['LogIn'])) {
  $eMail = $_POST['eMail'];
  $PassWord = $_POST['PassWord'];
  $sql = "select password from `user` where email='$eMail'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];
    $password_varification = Password_verify($password, $hashed_password);
    $_SESSION['session_email'] = $eMail;


    header('location: ./dash_index.html');
    exit();
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="../assets/images/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../assets/css/aos.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>GIL Recruitment Portal | Login</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">
    
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="../index.html" class="logo menu-absolute m-0">GIL</a>

          



          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>


  <div class="untree_co-hero inner-page overlay">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Create</h1>

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="" method="post" class="form-box">
            <div class="row">
              <div class="col-12 mt-3">
              </div>
              <div class="col-12 mb-3">
                <input type="email" class="form-control" placeholder="Email" name="eMail">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="Password" name="PassWord">
              </div>
              <br><br><br><br>
              <div class="col-12">
                <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><button type="submit" class="btn btn-secondary" name="LogIn">
                    Login</button></p>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
  </div> <!-- /.untree_co-section -->

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-6 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>Whether you need short-term project support, seasonal staffing, or temporary expertise, Gil Recruitment Services is your go-to source for contract-based recruitment solutions. We're here to simplify the hiring process and ensure you have the right talent to accomplish your goals.
            </p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <h3>Projects</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Networking</a></li>
              <li><a href="#">Front-end</a></li>
              <li><a href="#">Back-end</a></li>
              <li><a href="#">Android developer</a></li>
              <li><a href="#">Program tester/debugger</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>CZMG BCA/MSC.IT COLLEGE</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">oetproject123@gmail.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p> class="copyright">Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script>. All Rights Reserved. &mdash; Designed with love by CZMG BCA College <!-- License information: https://untree.co/license/ -->
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.animateNumber.min.js"></script>
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.fancybox.min.js"></script>
  <script src="../assets/js/jquery.sticky.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/custom.js"></script>

</body>

</html>