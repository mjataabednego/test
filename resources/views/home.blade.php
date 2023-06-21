@extends('homelayouts')
@section('content')


   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-80">
        <div id="bootcarousel" class="carousel text-xl text-center text-light slide animate_text" data-ride="carousel">

            <!-- Indicators for slides -->
            <div class="carousel-indicator">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="carousel-indicators">
                                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bootcarousel" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(../assets/img/banner/3.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated zoomInLeft">Farm <strong>Company</strong></h2>
                                            <p class="animated slideInRight">
                                                 Investment in the future, preserving agricultural resources and ensuring their continued availability."
                                            </p>
                                            <a data-animation="animated slideInUp" class="animated-btn" href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(../assets/img/banner/4.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Post <strong>harvest</strong></h2>
                                            <p class="animated slideInRight">
                                                Where the final chapter of farming begins, preserving nature's bounty for future generations." </p>
                                            <a data-animation="animated slideInUp" class="animated-btn" href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area overflow-hidden default-padding bottom-less">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="text-invisible">
                            Services
                        </h1>
                        <h5>What we do</h5>
                        <h2>
                            Why Choose Our Fresh Organic Foods
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Our postharvest product is meticulously designed to extend the shelf life of your harvested crops.
                             With advanced technologies and precise formulations, we ensure that your produce stays fresh, 
                             flavorful, and market-ready for longer periods.
                      </p>
                        <a class="btn circle btn-md btn-theme effect" href="about-us.html">View All <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-box">
            <!-- Shape -->
            <div class="shape-illustration">
                <img src="../assets/img/shape/6.png" alt="Shape">
            </div>
            <!-- Shape -->
            <div class="container-full">
                <div class="services-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/1.jpg" alt="Thumb">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="flaticon-fertilizer"></i>
                                        </div>
                                        <div class="title">
                                            <h5><a href="#"><strong>Agriculture</strong> Products</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/2.jpg" alt="Thumb">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="flaticon-vegetable"></i>
                                        </div>
                                        <div class="title">
                                            <h5><a href="#"><strong>Fresh</strong> Vegetables</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/3.jpg" alt="Thumb">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="flaticon-honeycomb"></i>
                                        </div>
                                        <div class="title">
                                            <h5><a href="#"><strong>Oragnic</strong> Products</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/4.jpg" alt="Thumb">
                                    <div class="content">
                                        <div class="icon">
                                            <i class="flaticon-grain"></i>
                                        </div>
                                        <div class="title">
                                            <h5><a href="#"><strong>Dairy</strong> Products</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

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
                                    Where Nature's Secrets Unfold. Discover the beauty of sustainable agriculture, connect with the
                                     source of your food, and experience the harmony between humans and the land. Engage in a journey 
                                     of education, exploration, and appreciation as you step into the open farm and embrace a world of
                                      natural wonder." </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Created New Products</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter 
                                    thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man
                                     now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an 
                                     windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Farm Remodelacion</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Grainfarmers Formed</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Start of Agriculture</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2>Farming were cultivating</h2>
                                <p>
                                    One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows.
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

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 thumb">
                    <img src="../assets/img/about/3.jpg" alt="Thumb">
                </div>
                <div class="col-lg-6 info">
                    <h5>Why Choose Us</h5>
                    <h2 class="area-title">Quality food is the most important thing in our life</h2>
                      <p>
                        By choosing our postharvest product, you prioritize the preservation of your crops
                        ' nutritional value, appearance, and taste. Our innovative solutions optimize the
                         quality of your produce, making it stand out in the market and appealing to discerning customers.
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
                                        Our staff consists of skilled professionals 
                                        who possess extensive knowledge and expertise.
                                   
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
                                        Service excellence is not a destination; 
                                        it's a never-ending journey of consistently.
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

    <!-- Start Product 
    ============================================= -->
    <div class="offer-product-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Store</h4>
                        <h2>Deal Of This Week</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="rosw">
                <div class="csol-lg-12">
                    <div class="carousel-box">
                        <div class="bottom">
                            <div class="counter-class" data-date="2021-3-24 23:59:59"><!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                                <div class="item-list">
                                    <div class="counter-item">
                                        <div class="item">
                                            <h5><span class="counter-days"></span> Days</h5>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <h5><span class="counter-hours"></span> Hours</h5>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <h5><span class="counter-minutes"></span> Minutes</h5>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <h5><span class="counter-seconds"></span> Seconds</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offer-pro-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="row align-center">
                                    <div class="col-lg-6">
                                        <div class="thumb">
                                            <img src="../assets/img/thumb/16.jpg" alt="Product">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 info">
                                        <h2>Harvest Machine</h2>
                                        <h4 class="price"><del>$29</del> $20</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Doloremque quia quos culpa corrupti.
                                             Laudantium omnis corrupti, aliquam illo blanditiis soluta reiciendis corporis numquam,
                                              neque dolores maxime, sit laborum repudiandae fugiat? consectetur adipisicing elit
                                        </p>
                                        <a class="btn circle btn-theme border btn-md" href="machine.html"><i class="fas fa-shopping-cart"></i>Request now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="row align-center">
                                    <div class="col-lg-6">
                                        <div class="thumb">
                                            <img src="../assets/img/thumb/17.jpg" alt="Product">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 info">
                                        <h2>warehouses & Logistics</h2>
                                        <h4 class="price"><del>$29</del> $20</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Doloremque quia quos culpa corrupti. Laudantium omnis corrupti, aliquam illo blanditiis soluta reiciendis corporis numquam, neque dolores maxime, sit laborum repudiandae fugiat? consectetur adipisicing elit
                                        </p>
                                        <a class="btn circle btn-theme border btn-md" href="warehouse.html"><i class="fas fa-location"></i>Request service</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Faq 
    ============================================= -->
    <div class="faq-area bg-gray relative">
        <div class="container">
            <div class="faq-items">
                <div class="row align-center">

                    <div class="col-lg-4 thumb wow fadeInUp" data-wow-delay="550ms">
                        <img src="../assets/img/illustration/18.png" alt="Thumb">
                    </div>

                    <div class="col-lg-7 offset-lg-1 wow fadeInRight">
                        <div class="heading">
                            <h2 class="area-title">Work with Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius soluta facere eos veritatis nihil qui ipsa rem! Magni, sint eum. Excepturi natus ut, facere ipsam necessitatibus delectus quam blanditiis!
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
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement. Discourse unwilling am no described dejection incommode. 
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
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement. Discourse unwilling am no described dejection incommode.
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
                                                Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement. Discourse unwilling am no described dejection incommode.
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
                                        <a href="warehouse.html">warehouses</a>
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
                                        <a href="machine.html">harvesting machines</a>
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
                                        <a href="postharvest.html">Harvest Innovation</a>
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

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area default-padding-bottom">
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
                            <span class="medium">warehouses avaiable</span>
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

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area default-padding-bottom bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>From the blog</h4>
                        <h2>Latest News & Articles</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/blog/4.jpg" alt="Thumb">
                                <div class="date">January 25, 2021</div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Discovery incommode earnestly commanded if.</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share. 
                                </p>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><img src="../assets/img/team/4.jpg" alt="Author"> Met John</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/blog/5.jpg" alt="Thumb">
                                <div class="date">February 12, 2021</div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Expression acceptance imprudence particular</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share. 
                                </p>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><img src="../assets/img/team/5.jpg" alt="Author"> Mark Adam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../assets/img/blog/2.jpg" alt="Thumb">
                                <div class="date">March 18, 2021</div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Provided so as doubtful on striking required point</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share. 
                                </p>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><img src="../assets/img/team/6.jpg" alt="Author"> Paul Ahua</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection