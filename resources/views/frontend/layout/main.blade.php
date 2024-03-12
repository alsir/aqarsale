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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
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
<body>
<div class="page_loader"></div>

<!-- Top header 3 start -->
<div class="top-header-3 d-none d-lg-block" id="top-header-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="top-logo">
                    <a href="index.html"><img src="{{ asset('/frontend/img/logos/Full Logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="top-header-inner">
                    <div class="top-contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <div class="content">
                            <p>Our Location</p>
                            <a href="https://www.google.com/maps/search/25%2F7+Barden,+London/@51.5287718,-0.2416803,11z/data=!3m1!4b1" target="blank">25/7 Barden, London</a>
                        </div>
                    </div>
                    <div class="top-contact-item">
                        <i class="bi bi-envelope-open"></i>
                        <div class="content">
                            <p>Online Support</p>
                            <a href="mailto:info@fetoxe2.com">info@rana.com</a>
                        </div>
                    </div>
                    <div class="top-contact-item tci2">
                        <i class="bi bi-telephone-inbound"></i>
                        <div class="content">
                            <p>Free Contact</p>
                            <a href="tel:+55-4XX-634-7071">+00-4X6-634-781</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top header 3 end -->

<!-- Main header start -->
<header class="main-header sticky-header header-fixed main-header-5" id="main-header-6">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos mr-auto" href="index.html">
                <img src="{{ asset('/frontend/img/logos/logo-2.png')}}" alt="logo" class="logo-photo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav w-100 justify-content-start">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Index
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.html">Index 1</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Index 2</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Index 3</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Index 4</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Index 5 (Map)</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Index 6 (Video)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Listings
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="grid-view.html">Grid View 1</a></li>
                                    <li><a class="dropdown-item" href="grid-view-2.html">Grid View 2</a></li>
                                    <li><a class="dropdown-item" href="grid-view-3.html">Grid View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing List</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="list-view.html">List View 1</a></li>
                                    <li><a class="dropdown-item" href="list-view-2.html">List View 2</a></li>
                                    <li><a class="dropdown-item" href="list-view-3.html">List View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing Half</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="map-view.html">Map View 1</a></li>
                                    <li><a class="dropdown-item" href="map-view-2.html">Map View 2</a></li>
                                    <li><a class="dropdown-item" href="map-view-3.html">Map View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Single Property</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="single-property.html">Single Property 1</a></li>
                                    <li><a class="dropdown-item" href="single-property-2.html">Single Property 2</a></li>
                                    <li><a class="dropdown-item" href="single-property-3.html">Single Property 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink11">
                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                            <li><a class="dropdown-item" href="agent-detail.html">Agent Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About 1</a>
                                            <a class="dropdown-item" href="about-2.html">About 2</a>
                                            <a class="dropdown-item" href="services-1.html">Services 1</a>
                                            <a class="dropdown-item" href="services-2.html">Services 2</a>
                                            <a class="dropdown-item" href="property-comparison.html">Property Comparison</a>
                                            <a class="dropdown-item" href="search-brand.html">Property Brands</a>
                                            <a class="dropdown-item" href="list-view.html">Property List</a>
                                            <a class="dropdown-item" href="grid-view.html">Property Grid</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="pricing-tables.html">Pricing Tables 1</a>
                                            <a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables 2</a>
                                            <a class="dropdown-item" href="pricing-tables-3.html">Pricing Tables 3</a>
                                            <a class="dropdown-item" href="typography.html">Typography 1</a>
                                            <a class="dropdown-item" href="typography-2.html">Typography 2</a>
                                            <a class="dropdown-item" href="faq.html">Faq 1</a>
                                            <a class="dropdown-item" href="faq-2.html">Faq 2</a>
                                            <a class="dropdown-item" href="faq-3.html">Faq 3</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="gallery-1.html">Gallery 1</a>
                                            <a class="dropdown-item" href="gallery-2.html">Gallery 2</a>
                                            <a class="dropdown-item" href="gallery-3.html">Gallery 3</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="icon.html">Icon</a>
                                            <a class="dropdown-item" href="404.html">Pages 404</a>
                                            <a class="dropdown-item" href="404-2.html">Pages 404 2</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="my-profile.html">My profile</a>
                                            <a class="dropdown-item" href="my-property.html">My Property</a>
                                            <a class="dropdown-item" href="favorited-property.html">Favorited Property</a>
                                            <a class="dropdown-item" href="submit-property.html">Submit Property</a>
                                            <a class="dropdown-item" href="change-password.html">Change Password</a>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="signup.html">Register</a>
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-full-grid.html">Full Grid</a></li>
                                    <li><a class="dropdown-item" href="blog-grid-sidebar.html">With Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-full-list.html">Full List</a></li>
                                    <li><a class="dropdown-item" href="blog-list-sidebar.html">With Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="blog-detail.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink8">
                            <li><a class="dropdown-item" href="contact.html">Contact 1</a></li>
                            <li><a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
                            <li><a class="dropdown-item" href="contact-3.html">Contact 3</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link h-icon"><i class="fa fa-plus"></i> Submit Property</a>
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
                        <li>
                            <a>Properties Details</a>
                        </li>
                        <li>
                            <a>My Account</a>
                        </li>
                        <li>
                            <a> Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="subscribe-box-2">
                        <form class="form-inline d-flex" action="#" method="GET">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName4" placeholder="Your Email">
                            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
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

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

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
<script  src="{{ asset('/frontend/js/leaflet.js')}}"></script>
<script  src="{{ asset('/frontend/js/leaflet-providers.js')}}"></script>
<script  src="{{ asset('/frontend/js/leaflet.markercluster.js')}}"></script>
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