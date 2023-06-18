<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.live/themeforest/farmi/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 15:58:31 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Farmi - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>PostHarvest_finalyrProject</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   

    
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-user"></i>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                
                                <li>
                                    <li><a href="{{ route('login')}}"><i class="fas fa-user"></i> login</a></li>
                                    <li><a href="{{ route('login')}}"><i class="fas fa-book"></i> Register</a></li>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="button"><a href="{{ route('login')}}"><i class="fas fa-user"></i> login</a></li>
                        <li class="button"><a href="{{ route('login')}}"><i class="fas fa-pen"></i> Register</a></li>
                                              
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    
                    </ul>
                    
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('hom')}}">
                        <img src="../assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                        <img src="../assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp"> 
                        <li><a href="{{ route('hom')}}">Home</a></li>
                        <li><a href="{{ route('about')}}">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('service')}}">Services</a></li>
                                <li><a href="{{ route('team')}}">Farmers</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('gallery')}}">Gallery</a></li>
                        <li><a href="{{ route('blog')}}">Blog</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')

     <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="../assets/img/shape/2.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <a href="index-2.html">
                            <img  src="../assets/img/logo-light.png" alt="Logo">
                        </a>
                            <p>
                                Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new to the point.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> Subscribe</button>  
                            </form>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="#">News & Media</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Volunteers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../assets/img/thumbs/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Meant widow equal an share least part. </a>
                                        <div class="meta-title">
                                            <span class="post-date">12 Feb, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="../assets/img/thumbs/5.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                        <div class="meta-title">
                                            <span class="post-date">18 Mar, 2019</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Address: </strong>
                                        shaban robert street posta Dar es salaam
                                    </li>
                                    <li>
                                        <strong>Email: </strong>
                                        <a href="mailto:info@validtheme.com">mjataabednego@gmail.com</a>
                                    </li>
                                    <li>
                                        <strong>Phone: </strong>
                                        <a href="#"> +255 7133 48149</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Itme -->
                </div>
            </div>
        </div>
       </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js "></script>
    <script src="assets/js/popper.min.js "></script>
    <script src="assets/js/bootstrap.min.js "></script>
    <script src="assets/js/jquery.appear.js "></script>
    <script src="assets/js/jquery.easing.min.js "></script>
    <script src="assets/js/jquery.magnific-popup.min.js "></script>
    <script src="assets/js/modernizr.custom.13711.js "></script>
    <script src="assets/js/owl.carousel.min.js "></script>
    <script src="assets/js/wow.min.js') "></script>
    <script src="assets/js/progress-bar.min.js "></script>
    <script src="assets/js/isotope.pkgd.min.js "></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js "></script>
    <script src="assets/js/YTPlayer.min.js "></script>
    <script src="assets/js/loopcounter.js "></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.live/themeforest/farmi/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 15:59:27 GMT -->
</html>