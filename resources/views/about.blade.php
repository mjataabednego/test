@extends('pagelayouts')
@section('content')

  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(../assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('hom')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-content-area overflow-hidden inc-shape default-padding">
        <!-- Illustration -->
        <div class="illustration">
            <img src="../assets/img/shape/4.png" alt="Illustration">
        </div>
        <!-- Illustration -->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 info">
                    <div class="content wow fadeInLeft" data-wow-delay="300ms">
                        <h5>Who we are</h5>
                        <h2 class="area-title">Beautiful landscapes and the farmers Who bring us our food</h2>
                        <p>
                            Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr lovers of on.
                        </p>
                        <a class="btn circle btn-theme border btn-md" href="{{route('more')}}">More About</a>
                    </div>
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="8600" data-speed="5000">8600</div>
                                    <div class="operator">+</div>
                                </div>
                                <span class="medium">Tons of harvesta</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Organic Product</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="wow fadeInRight" data-wow-delay="700ms" src="../assets/img/newpic/new/images (7).jpeg" alt="Thumb">
                        <img class="wow fadeInUp" data-wow-delay="1000ms" src="../assets/img/newpic/new/images (8).jpeg" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Faq 
    ============================================= -->
    <div class="faq-area bg-gray default-padding-top">
        <div class="container">
            <div class="faq-items">
                <div class="row align-center">

                    <div class="col-lg-4 thumb wow fadeInUp" data-wow-delay="550ms">
                        <img src="../assets/img/illustration/p.png" alt="Thumb">
                    </div>

                    <div class="col-lg-7 offset-lg-1 wow fadeInRight">
                        <div class="heading">
                            <h2 class="area-title">Work with Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Exercitationem eius soluta facere eos veritatis nihil qui ipsa 
                                rem! Magni, sint eum. Excepturi natus ut, facere ipsam necessitatibus 
                                delectus quam blanditiis!
                            </p>
                        </div>
                        <div class="faq-content default-padding-bottom">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Do I need a business plan?
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Continue building numerous of at relation in margaret. 
                                                Lasted engage roused mother an am at. Other early while
                                                 if by do to. Missed living excuse as be. Cause heard fat 
                                                 above first time achivement. Discourse unwilling am no
                                                  described dejection incommode. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How long should a business plan be?
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother 
                                                an am at. Other early while if by do to. Missed living excuse as be. Cause heard
                                                 fat above first time achivement. Discourse unwilling am no described dejection
                                                  incommode.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Where do I start?
                                      </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Continue building numerous of at relation in margaret.
                                                 Lasted engage roused mother an am at. Other early while 
                                                 if by do to. Missed living excuse as be. Cause heard fat
                                                  above first time achivement. Discourse unwilling am no 
                                                  described dejection incommode.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->

    <!-- Start History 
    ============================================= -->
    <div class="history-area default-padding text-center bg-dark text-light">
        <!-- Shape -->
        <div class="fixed-shape-center" style="background-image: url(../assets/img/shape/12.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>how we started</h4>
                        <h2>The Openfield Timeline</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="history-items">
                <div class="row">
                    <div class="carousel slide" data-ride="carousel" id="timeline-carousel" data-interval="5000000">

                         <!-- Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <div class="timeline-carousel owl-carousel owl-theme">
                                <li data-target="#timeline-carousel" data-slide-to="0" class="active">
                                    <h4>1870</h4>
                                </li>
                                <li data-target="#timeline-carousel" data-slide-to="1">
                                    <h4>1916</h4>
                                </li>
                                <li data-target="#timeline-carousel" data-slide-to="2">
                                    <h4>2002</h4>
                                </li>
                                <li data-target="#timeline-carousel" data-slide-to="3">
                                    <h4>2004</h4>
                                </li>
                                <li data-target="#timeline-carousel" data-slide-to="4">
                                    <h4>2018</h4>
                                </li>
                                <li data-target="#timeline-carousel" data-slide-to="5">
                                    <h4>2021</h4>
                                </li>
                            </div>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2>Open Farm</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. 
                                    Possible procured her trifling laughter thoughts property she met way.
                                    Companions shy had solicitude favourable own. Which could saw guest man
                                    now heard but. Lasted my coming uneasy marked so should. Gravity letters 
                                    it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Created New Products</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible
                                     procured her trifling laughter thoughts property she met way. Companions
                                    shy had solicitude favourable own. Which could saw guest man now heard
                                    but. Lasted my coming uneasy marked so should. Gravity letters it 
                                    amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Farm Remodelacion</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible 
                                    procured her trifling laughter thoughts property she met way. Companions
                                    shy had solicitude favourable own. Which could saw guest man now heard but.
                                    Lasted my coming uneasy marked so should. Gravity letters it amongst herself
                                    dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Grainfarmers Formed</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured
                                    her trifling laughter thoughts property she met way. Companions shy had solicitude
                                    favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked
                                    so should. Gravity letters it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Start of Agriculture</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her
                                    trifling laughter thoughts property she met way. Companions shy had solicitude favourable 
                                    own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity
                                    letters it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Farming were cultivating</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling
                                    laughter thoughts property she met way. Companions shy had solicitude favourable own. Which 
                                    could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters 
                                    it amongst herself dearest an windows.
                                </p>
                            </div>
                        </div>
                        <!-- End Carousel Content -->

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="../assets/img/shape/brush-up.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </div>
    <!-- End History Area -->

    <!-- Start Partner 
    ============================================= -->
    <div class="partner-area text-center default-padding-top">
        <div class="container">
            <div class="partner-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="partner-carousel owl-carousel owl-theme">
                            <img src="../assets/img/clients/1.png" alt="Partner">
                            <img src="../assets/img/clients/2.png" alt="Partner">
                            <img src="../assets/img/clients/3.png" alt="Partner">
                            <img src="../assets/img/clients/4.png" alt="Partner">
                            <img src="../assets/img/clients/5.png" alt="Partner">
                            <img src="../assets/img/clients/6.png" alt="Partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area default-padding">
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
        <div class="container-fluid">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-4">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/2.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/2.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
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
                                    <img src="../assets/img/blog/7.jpg" alt="Thumb">
                                    <a href="../assets/img/blog/7.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{ route('warehouse')}}">warehouses</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/blog/10.jpeg" alt="Thumb">
                                    <a href="../assets/img/blog/10.jpeg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{ route('machine')}}">harvesting machines</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/10.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/10.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="about">Harvest Innovation</a>
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