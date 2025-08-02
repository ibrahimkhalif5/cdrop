<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CDROP</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets/img/slider/logo.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center" style="background-color: #263F5E; ">
      <div class="container d-flex justify-content-center justify-content-md-between">
        
        <div class="contact-info d-flex align-items-center">
        
        <!-- Uncomment the line below if you also wish to use an image logo -->
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">hadi.adan@cdrop.org</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 722166441 /
+252 770854769/+252615656330/
020 200 8989</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente" style="background-color: #e7eceeff;">

      <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">CDROP &nbsp; 
            <img src="{{asset('assets/img/slider/logo.png')}}" alt=""></a>
        <!-- Uncomment the line below if you also wish to use an image logo -->

        <nav id="navmenu" class="navmenu" >
          <ul>
            <li><a href="/" class="active">Home</a></li>
            <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/about_us">Background</a></li>
                <li><a href="/team">Our Teams</a></li>

              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Our Programs</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/wash">Water, Sanitation, and  &amp; Hygiene (WASH)</a></li>
                <li><a href="/agriculture">Agriculture, Food Security, and  &amp; Livelihoods</a></li>
                <li><a href="/education">Education and Development</a></li>
                <li><a href="/youth">Youth and Women  &amp; Empowerment</a></li>
                <li><a href="/health">Health and   &amp; Nutrition</a></li>
                <li><a href="/security">Peace, Security and   &amp; Governance</a></li>
                <li><a href="/humanitarian">Humanitarian Emergencies    &amp; Support</a></li>
                <li><a href="/gbv">Gender-Based Violence (GBV)     &amp; Advocacy</a></li>

              </ul>
            </li>
            <!-- <li><a href="/donation">Donate</a></li> -->
            <li><a href="/contact_us">Contact Us</a></li>
            <li class="dropdown"><a href="#"><span>Media Desk</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="/downloads">Resources</a></li>
                <!-- <li><a href="/careers">Careers/Jobs</a></li>
                <li><a href="/tenders">Tenders</a></li> -->
                <li><a href="/gallery">Gallery</a></li>

              </ul>
            </li>

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div><a href="index.html" class="logo d-flex align-items-center">

      </a>
    </div><a href="index.html" class="logo d-flex align-items-center">

    </a>
  </header>

  @yield('content')

  <footer id="footer" class="footer position-relative" style="background-color: #294665;">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>CDROP Head Office</p>
            <p>Kago Star Plaza
Suite 22, Off Mai Mahiu Road.
Nairobi West Kenya</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+254 722166441 /
+252 770854769/+252615656330/
020 200 8989</span><br>
              <strong>Email:</strong> <span>hadi.adan@cdrop.org/
info@cdrop.org</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Fri:</strong>&nbsp;8<span>AM - 5PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright ||&nbsp;</span>&nbsp;<b>CDROP ||&nbsp;</b><span>All Rights Reserved</span></p>

    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>