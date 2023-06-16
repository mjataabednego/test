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
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
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
       
        <!-- Illustration -->
        <div class="container content">
            <div class="row">
                
                <div class="col-lg-6 info">
                    <div class="content wow fadeInLeft" data-wow-delay="300ms">
                        <h5>Who we are</h5>
                        <h2 class="area-title">Beautiful landscapes and the farmers Who bring us our food</h2>
                        <p>
                            Post-harvest activities are a crucial phase in the agricultural 
                            supply chain that encompasses various processes to handle, store, 
                            transport, and market harvested crops. Market connections form an
                             essential aspect of post-harvest activities, involving extensive 
                             market research to understand demand, trends, and prices. By 
                             identifying potential buyers, distributors, retailers, or 
                             processors, farmers can establish connections with the appropriate
                              market channels. Contracting plays a pivotal role in finalizing 
                            agreements with buyers 
                            or intermediaries, ensuring clear terms and conditions, pricing,
                             and delivery schedules are established.
                        </p>
                        <p>
                            Efficient transportation is vital to ensure that agricultural
                             produce reaches its destination promptly and in optimal 
                             condition. Logistics planning is crucial in determining
                            the most suitable mode of transportation based on factors
                            such as product type, distance, and market requirements.
                            Proper packaging and loading techniques safeguard the 
                            products during transportation, minimizing damage or 
                            spoilage. Utilizing transportation infrastructure, 
                            such as road networks, railways, ports, and airports,
                            facilitates the smooth movement of harvested crops. 
                         
                        </p>
                       
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
               

            </div>
        </div>
    </div>
    <!-- End About Area -->
@endsection