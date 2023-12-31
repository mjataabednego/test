@extends('pagelayouts')
@section('content')

  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(../assets/img/banner/7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="../assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-3">
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
                                    <img src="../assets/img/gallery/2.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/2.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
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
                                    <img src="../assets/img/gallery/10.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/10.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
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
                                    <img src="../assets/img/gallery/3.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/3.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Harvest Innovation</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/gallery/4.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/4.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
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
                                    <img src="../assets/img/gallery/9.jpg" alt="Thumb">
                                    <a href="../assets/img/gallery/9.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Organic Solution</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
@endsection