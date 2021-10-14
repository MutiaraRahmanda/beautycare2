<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauty Care</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/hvac/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/style.css') }}" type="text/css">

    <title>BeautyCare - Halaman Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/images/icon.png">

</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Offcanvas Menu Begin -->
    {{-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div> --}}
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <a class="navbar-brand" href="/" style="color: black"><img src ="assets/images/relax.png" width="30px">&nbsp;BeautyCare</a>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="navbar-nav ml-auto">
                                <ul class="header__top__widget">
                                    <li><a href="" class="nav-link" style="color: black">Login</a></li>
                                    <li><a href="/" class="nav-link" style="color: black">Home</a></li>
                                    <li><a href="customerbrands" class="nav-link" style="color: black">Treatments</a></li>
                                    <li><a href="customercar" class="nav-link" style="color: black">Doctor</a></li>
                                    <li><a href="" class="nav-link" style="color: black">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

    <!-- Content -->
    @yield('content')
    <!-- Content End -->

    <!-- Footer Section Begin -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">BeautyCare</h2>
                <p class="ftco-heading-3">Selamat datang di website Klinik BeautyCare, kami adalah klinik perawatan kulit wajah dan badan yang didirikan oleh Modav. Di Klinik BeautyCare kami menyadari bahwa setiap individu memiliki jenis dan masalah kulit yang berbeda-beda.</p>
                <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Popular</h2>
                <ul class="list-unstyled">
                  <li class="ftco-heading-3">Acne Clear Treatment</a></li>
                  <li class="ftco-heading-3">Bright Glow Skin Booster</a></li>
                  <li class="ftco-heading-3">Korean Glow Laser</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Quick</h2>
                <ul class="list-unstyled">
                  <li class="ftco-heading-3"><a href="">Home</a></li>
                  <li class="ftco-heading-3"><a href="">Treatments</a></li>
                  <li class="ftco-heading-3"><a href="">Doctor</a></li>
                  <li class="ftco-heading-3"><a href="">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><a href="https://www.google.com/maps/place/No+Jl.+Soekarno+Hatta+No.32,+Jatimulyo,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65141/@-7.944854,112.6172683,17z/data=!3m1!4b1!4m5!3m4!1s0x2e78827585d057ad:0x2a203682bd43f108!8m2!3d-7.944854!4d112.619457"><span class="icon icon-map-marker"></span><span class="text">Jl. Sukarno Hatta No 32, Malang
                    </span></li>
                    <li><a href="https://web.whatsapp.com"><span class="icon icon-phone"></span><span class="text">081375685166
                    </span></a></li>
                    <li><a href="https://myaccount.google.com/?utm_source=sign_in_no_continue"><span class="icon icon-envelope"></span><span class="text">modav@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p class="mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());

                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Modav</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/hvac/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/hvac/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/hvac/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/hvac/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/hvac/main.js') }}"></script>

<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
