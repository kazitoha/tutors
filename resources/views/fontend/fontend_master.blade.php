<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tutors Bd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/fontend_asset/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/fontend_asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/fontend_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/fontend_asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/fontend_asset/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('public/fontend_asset/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/fontend_asset/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/fontend_asset/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tutors BD. - v1.1.1
  * Template URL: https://bootstrapmade.com/Tutors BD.-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1>Tutors BD<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
           @php 
              $url=Route::current()->uri;
           @endphp

          <li><a href="{{url('/')}}">Home</a></li>
          @if($url == "/")
           <li><a href="#search_tutors">SEARCH TUTORS</a></li>
          @endif
          @if(!session('user_data'))
          <li><a href="{{route('user.login')}}" class="btn btn-outline-danger  btn-sm">Login</a></li>
          <li><a href="{{route('user.register')}}" class="btn btn-outline-danger  btn-sm">Register</a></li>
          @else(session('user_data'))
           <li><a href="{{url('user/dashboard')}}" class="btn btn-outline-danger">Profile</a></li>   
           <li><a href="{{route('user.log.out')}}" class="btn btn-outline-danger">Logout</a></li>   

          @endif
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

    @yield('fontend_main')



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Tutors BD.</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Tutors BD.</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Tutors BD.-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('public/fontend_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/fontend_asset/js/main.js')}}"></script>

</body>

</html>