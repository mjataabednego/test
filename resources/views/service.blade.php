@extends('pagelayouts')
@section('content')

  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(../assets/img/banner/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('hom')}} "><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Services Area
    ============================================= -->
    <div class="services-area about-area shape-less overflow-hidden default-padding">
        <div class="container">
            <div class="services-contents features-area text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/thumb/8.png" alt="Thumb">
                            </div>
                            <h5>harvest machines</h5>
                            <p>
                                Revolutionize your harvesting process with our modern tools.
                                request online for effortless convenience and streamlined efficiency. </p>
                            <a href="{{ route('machine')}} "><i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/thumb/11.png" alt="Thumb">
                            </div>
                            <h5>warehouses</h5>
                            <p>
                                Upgrade your warehousing experience with our flexible rental options. 
                                Gain efficiency through our hassle-free online booking system. </p>
                            <a href="{{ route('warehouse')}} "><i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/thumb/12.png" alt="Thumb">
                            </div>
                            <h5>Weather info</h5>
                            <p>
                                Empower your farming decisions with our advanced weather monitoring system.
                                 Access real-time weather data for informed and timely actions."

                            </p>
                            <a href="../assets2/index.html"><i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/thumb/13.png" alt="Thumb">
                            </div>
                            <h5>postharvest</h5>
                            <p>
                                "Elevate your postharvest processes with our comprehensive services.
                                 streamline your operations through our convenient booking platform.
                                 </p>
                                  <a href="{{ route('postharvest')}} "><i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area bg-gray overflow-hidden text-light">
        <div class="container">
            <div class="tesimonials-content default-padding">
                <div class="row">
                    <div class="col-lg-4 info">
                        <i class="flaticon-quotation"></i>
                        <h5>Testimonials</h5>
                        <h2>What our customers are talking about us</h2>
                        <a class="btn circle btn-theme effect btn-md" href="#">View All <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-7 offset-lg-1 testimonials">
                        <div class="testimonial-items">
                            <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>
                                            Lasted my coming uneasy marked so should. Gravity letters it 
                                            amongst herself dearest an windows by. Wooded ladies she basket 
                                            season age her uneasy saw. Discourse unwilling am no described 
                                            dejection incommode no listening of. Before nature his parish boy.
                                             guest man now heard but 
                                        </p>
                                        <h4>Junl Sarukh</h4>
                                        <span>Customer</span>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. guest man now heard but  
                                        </p>
                                        <h4>Anil Spia</h4>
                                        <span>Customer</span>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. guest man now heard but  
                                        </p>
                                        <h4>Paul Munni</h4>
                                        <span>Customer</span>
                                    </div>
                                </div>
                                <!-- End Carousel Content -->

                                <!-- Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                        <img src="../assets/img/team/images (8).jpeg" alt="Thumb">
                                    </li>
                                    <li data-target="#testimonial-carousel" data-slide-to="1">
                                        <img src="../assets/img/team/images (7).jpeg" alt="Thumb">
                                    </li>
                                    <li data-target="#testimonial-carousel" data-slide-to="2">
                                        <img src="../assets/img/team/3.jpg" alt="Thumb">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-area thumb-regular default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 thumb">
                    <img src="../assets/img/team/images (10).jpeg" alt="Thumb">
                </div>
                <div class="col-lg-6 info">
                    <h5>Why Choose Us</h5>
                    <h2 class="area-title">Quality food is the most important thing in our life</h2>
                    <p>
                        Another journey chamber way yet females man. Way extensive and dejection get delivered deficient sincerity gentleman age. Too end instrument possession contrasted motionless. Calling offence six joy feeling.
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-farmer-1"></i>
                                </div>
                                <div class="info">
                                    <h5>Qualified Staff</h5>
                                    <p>
                                        Parish any chatty can elinor direct is former plus 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-planting"></i>
                                </div>
                                <div class="info">
                                    <h5>Excellent Service</h5>
                                    <p>
                                        Parish any chatty can elinor direct is former plus 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area default-padding-bottom">
        <!-- Illustration -->
        <div class="illustration wow fadeInDown">
            <img src="../assets/img/thumb/5.png" alt="Illustration">
        </div>
        <!-- End Illustration -->
        <div class="container">
            <div class="fun-fact-items text-center">
                <h2 class="text-invisible">Achivement</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="687" data-speed="5000">687</div>
                            <span class="medium">Agriculture Products</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="655" data-speed="5000">655</div>
                            <span class="medium">Expert Farmers</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="450" data-speed="5000">450</div>
                            <span class="medium">Units of Cattle</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1200" data-speed="5000">1200</div>
                            <span class="medium">Hectares of farm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area bg-gray default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="../assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Gallery</h4>
                        <h2>Latest projects showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/1.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/1.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Natural Products</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/17.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/17.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Organic Solution</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/16.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/16.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Agriculture & Farming</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/12.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/12.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Harvest Innovation</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
@endsection