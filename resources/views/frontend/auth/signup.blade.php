
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    
        <!-- External CSS libraries -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap-submenu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap-select.min.css')}}">
    
        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/initial.css')}}">
        <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('/frontend/css/skins/default.css')}}">
    
        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{ asset('/frontend/img/favicon.ico')}}" type="image/x-icon" >
    
        <!-- Google fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/ie10-viewport-bug-workaround.css')}}">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script  src="{{ asset('/frontend/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
        <script  src="{{ asset('/frontend/js/ie-emulation-modes-warning.js')}}"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script  src="{{ asset('/frontend/js/html5shiv.min.js')}}"></script>
        <script  src="{{ asset('/frontend/js/respond.min.js')}}"></script>
        <![endif]-->
    </head>
<body>
<div class="page_loader"></div>

<!-- Login section start -->
<div class="login-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    <a href="index.html" class="logo">
                        <img src="img/logos/logo.png" alt="logo">
                    </a>
                    <h3>Create an account</h3>
                    <form action="#" method="GET">
                        <div class="form-group clearfix">
                            <input name="name" type="text" class="form-control" placeholder="Full Name" aria-label="Full Name">
                        </div>
                        <div class="form-group clearfix">
                            <input name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                        </div>
                        <div class="form-group clearfix">
                            <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password">
                        </div>
                        <div class="form-group clearfix checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberme">
                                <label class="form-check-label" for="rememberme">
                                    I agree to the terms of service
                                </label>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn-md btn-theme w-100" style="background-color:blue;">Login</button>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <p>Already a member? <a href="/login">Login here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome to <span>Aqar sales </span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login section end -->

<!-- Full Page Search --><!-- Full Page Search -->

<script src="{{ asset('/frontend/js/jquery.min.js')}}"></script>
<script src="{{ asset('/frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/bootstrap-submenu.js')}}"></script>
<script  src="{{ asset('/frontend/js/rangeslider.js')}}"></script>
<script  src="{{ asset('/frontend/js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{ asset('/frontend/js/wow.min.js')}}"></script>
<script  src="{{ asset('/frontend/js/bootstrap-select.min.js')}}"></script>

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
