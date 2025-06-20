<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Flea Market</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- custom-style -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">


  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar custom-gradient-navbar">
      <div class="container">
      <a href="/" class="navbar-brand">Flea Market</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
         <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active"><a class="nav-link" href="#header-wrap">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#schedules">Schedules</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#google-map-area">Contact Us</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li> -->
            <li class="nav-item"><a class="nav-link" href="{{ url('login-register')}}">Login</a></li>
        </ul>
      </div>
     </div>
      </nav>
     <!-- Navbar End -->

     <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
       <div class="overlay"></div>
       <div class="container">
        <div class="row justify-content-center">
         <div class="col-lg-9 col-sm-12">
          <div class="contents text-center">
            <div class="icon">
              <i class="lni-store"></i>
            </div>
            <p class="banner-info">Your One-Stop Campus Marketplace</p>
            <h2 class="head-title">Welcome to MarketMate</h2>
            <p class="banner-desc">
              Book your flea market slots, showcase your products, and manage your sales – all in one place.
            </p>
            <div class="banner-btn">
              <a href="{{ url('login-register')}}" class="btn btn-common">Get Started</a>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
      <!-- Hero Area End -->
    </header>

    <!-- Header Area wrapper End -->

    <!-- Count Bar Start -->
    <section id="count" class="wow fadeInUp" data-wow-delay="0.3s">
      <div class="container">
       <div class="row justify-content-center">
      <div class="col-10">
        <div class="count-wrapper text-center">
          <h2 class="flea-market-heading">Flea Market Countdown</h2>
          <div class="time-countdown">
            <div id="clock" class="time-count"></div>
          </div>
        </div>
      </div>
      </div>
     </div>
    </section>

    <!-- Count Bar End -->


    <!-- Information Bar Start -->
    <section id="information-bar">
      <div class="container">
       <div class="row inforation-wrapper">
      <div class="col-lg-3 col-md-6 col-xs-12">
        <ul>
          <li><i class="lni-map-marker"></i></li>
          <li><span><b>Venue</b> Strathmore University</span></li> <!-- updated -->
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <ul>
          <li><i class="lni-calendar"></i></li>
          <li><span><b>Date & Time</b> 9AM - 5PM, May 21st</span></li> <!-- updated -->
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <ul>
          <li><i class="lni-mic"></i></li>
          <li><span><b>Vendors</b> 20+ Amazing Stalls</span></li> <!-- updated -->
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <ul>
          <li><i class="lni-user"></i></li>
          <li><span><b>Entry</b> Free for Everyone</span></li> <!-- updated -->
        </ul>
      </div>
      </div>
     </div>
    </section>

    <!-- Information Bar End -->


    <!-- product Section Start -->
    <section class="product-section">
     <h2 class="section-title">Our Featured Products</h2>
     <div class="product-wrapper">
      <!-- Start of Product Cards -->
     <div class="product-card">
      <img src="path/to/product1.jpg" alt="Product 1">
      <h4>Product 1</h4>
      <p>Description for product 1.</p>
      </div>
     <div class="product-card">
      <img src="path/to/product2.jpg" alt="Product 2">
      <h4>Product 2</h4>
      <p>Description for product 2.</p>
     </div>
     <div class="product-card">
      <img src="path/to/product3.jpg" alt="Product 3">
      <h4>Product 3</h4>
      <p>Description for product 3.</p>
     </div>
     <div class="product-card">
      <img src="path/to/product4.jpg" alt="Product 4">
      <h4>Product 4</h4>
      <p>Description for product 4.</p>
     </div>
     <div class="product-card">
      <img src="path/to/product5.jpg" alt="Product 5">
      <h4>Product 5</h4>
      <p>Description for product 5.</p>
     </div>
     <div class="product-card">
      <img src="path/to/product6.jpg" alt="Product 6">
      <h4>Product 6</h4>
      <p>Description for product 6.</p>
     </div>
      <!-- End of Product Cards -->
     </div>
     <div id="cta-button" class="cta-button">
     <a href="#" class="btn">Shop Now</a>
     </div>
    </section>
    <!-- product Section End -->

    <!-- Intro Section Start -->
    <section id="intro" class="intro section-padding">
      <div class="container">
     <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Should Join?</h2>
          <p class="wow fadeInDown" data-wow-delay="0.2s">Discover the features and benefits of our web app, built to enhance your experience. Whether you are new to tech or a seasoned user, this app is designed for everyone!</p>
        </div>
      </div>
     </div>
     <div class="row intro-wrapper">
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text mb-70">
          <i class="lni-microphone"></i>
          <h3>Seamless Communication</h3>
          <p>Stay connected with easy-to-use chat features that make communication efficient and fun.</p>
          <span class="count-number">01</span>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text">
          <i class="lni-users"></i>
          <h3>Interactive Community</h3>
          <p>Join a growing community of like-minded individuals and collaborate on exciting projects.</p>
          <span class="count-number">02</span>
        </div>
        <div class="border-shap left"></div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text mb-70">
          <i class="lni-bullhorn"></i>
          <h3>Stay Updated</h3>
          <p>Get real-time notifications and stay updated with the latest trends and updates.</p>
          <span class="count-number">03</span>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text mb-70">
          <i class="lni-heart"></i>
          <h3>Get Inspired</h3>
          <p>Explore new ideas, share your vision, and get inspired by others in the community.</p>
          <span class="count-number">04</span>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text mb-70">
          <i class="lni-cup"></i>
          <h3>Collaborate with Ease</h3>
          <p>Our web app simplifies the collaboration process, making it easier for teams to work together.</p>
          <span class="count-number">05</span>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="single-intro-text mb-70">
          <i class="lni-gallery"></i>
          <h3>Meet New Faces</h3>
          <p>Expand your network by meeting new people and connecting with professionals worldwide.</p>
          <span class="count-number">06</span>
        </div>
      </div>
      </div>
     </div>
    </section>
    <!-- Intro Section End -->
    
 <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              
              
            </div>
            <div class="footer-logo">
              <!-- <img src="assets/img/logo.png" alt=""> -->
            </div>
            <div class="social-icons-footer">
              <ul>
                <li class="facebook"><a target="_blank" href="3"><i class="lni-facebook-filled"></i></a></li>
                <li class="twitter"><a target="_blank" href="3"><i class="lni-twitter-filled"></i></a></li>
                <li class="pinterest"><a target="_blank" href="3"><i class="lni-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="site-info">
              <p>Designed and Developed by Rehana And Grace🫶🏼🫶🏼</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>      
      
  </body>
</html>
