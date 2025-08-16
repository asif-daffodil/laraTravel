@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Destinations')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content text-center">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">
                                    Explore Tours By Destinations
                                </h2>
                            </div>
                            <span class="arrow-blink">
                                <i class="la la-arrow-down"></i>
                            </span>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 10" preserveaspectratio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START DESTINATION AREA
    ================================= -->
    <section class="destination-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img2.jpg" alt="destination-img" />
                            <span class="badge">new york</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="tour-details.html">Main Street Park</a>
                            </h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center me-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">50 Tours</p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img3.jpg" alt="destination-img" />
                            <span class="badge">chicago</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="tour-details.html">Chicago Cultural Center</a>
                            </h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center me-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">50 Tours</p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$68.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img4.jpg" alt="destination-img" />
                            <span class="badge">Hong Kong</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="tour-details.html">Lugard Road Lookout</a>
                            </h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center me-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">150 Tours</p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$79.00</span>
                                    <span class="price__num before-price">$89.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img5.jpg" alt="destination-img" />
                            <span class="badge">Las Vegas</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="tour-details.html">Planet Hollywood Resort</a>
                            </h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center me-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">50 Tours</p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$88.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="images/destination-img.jpg" alt="destination-img" />
                            <span class="badge">Shanghai</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="tour-details.html">Oriental Pearl TV Tower</a>
                            </h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center me-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">50 Tours</p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end destination-area -->
    <!-- ================================
        END DESTINATION AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
