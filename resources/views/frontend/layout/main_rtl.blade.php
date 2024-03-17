<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>عقار سيل </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/fonts/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/frontend/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/frontend/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/frontend/css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/initial.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('/frontend/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('/frontend/img/logos/App Icon.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lateef:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{ asset('/frontend/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="direction: rtl;">
<div class="page_loader"></div>

<!-- Top header 3 start -->
<!-- Top header start -->
{{-- <header class="top-header th10 d-none d-lg-block d-md-block" id="top-header-1" style=" background-color: #0d6efd;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-7">
                <div class="list-inline">
                    <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i>Need Support? +00-4X6-634-781</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="signup.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header sticky-header header-fixed" id="main-header-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="index.html">
                <img src="{{ asset('/frontend/img/logos/Full Logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button" style=" background-color: #0d6efd;">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href=""  class="nav-link submit-property " > ابحث بالخريطة <i class="fa fa-map"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href=""  class="nav-link submit-property "> حاسب التكلفة <i class="fa fa-calculator"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href=""  class="nav-link submit-property "><i class="fa fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link submit-property btn-5" style=" background-color: #0d6efd; color:aliceblue;">اضافة عقار  <i class="fa fa-plus"></i> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
<body>
    <div class="page_loader"></div>
    @yield('content')
</body>
<!-- Footer start -->
<footer class="footer-1">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            360 Harvest St, North Subract, London. United States Of Amrica.
                        </li>
                        <li>
                            <a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071">+1 347-465-0659</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Properties Types</h4>
                    <ul class="links">
                        <li>
                            <a>Apartment</a>
                        </li>
                        <li>
                            <a>Restaurant</a>
                        </li>
                        <li>
                            <a>My Houses</a>
                        </li>
                        <li>
                            <a>Villa & Condo</a>
                        </li>
                        <li>
                            <a>Family House</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Quick Links</h4>
                    <ul class="links">
                        <li>
                            <a>About Us</a>
                        </li>
                        <li>
                            <a>Services</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">© 2022 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<script src="{{ asset('/frontend/js/jquery.min.js')}}"></script>
<script src="{{ asset('/frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/bootstrap-submenu.js')}}"></script>
<script  src="{{ asset('/frontend/js/rangeslider.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{ asset('/frontend/js/wow.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/bootstrap-select.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.easing.1.3.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.scrollUp.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
   integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
   crossorigin=""></script>
   <script>
   var map = L.map('map').setView([29.342274585850735, 48.01916934758884], 13);
   L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
    }).addTo(map);
    // var marker = L.marker([29.342274585850735, 48.01916934758884]).addTo(map);
</script>
<script  src="{{ asset('/frontend/js/dropzone.js')}}"></script>
<script  src="{{ asset('/frontend/js/slick.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.filterizr.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.countdown.js')}}"></script>
<script  src="{{ asset('/frontend/js/maps.js')}}"></script>
<script  src="{{ asset('/frontend/js/sidebar.js')}}"></script>
<script  src="{{ asset('/frontend/js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{ asset('/frontend/js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{ asset('/frontend/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>