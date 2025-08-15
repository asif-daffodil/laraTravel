@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Gallery')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-10">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content text-center">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">
                                    Discover TravelVela's Luxury Living
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
        START GALLERY AREA
    ================================= -->
    <section class="gallery-area section-bg section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Gallery Masonry</h2>
                        <p class="sec__desc pt-2">
                            We used bootstrap grid layout format You can change grid format
                            from 2 to 5 responsive-columns
                        </p>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px grid-masonry">
                <div class="grid-masonry-item grid-masonry-item-width-1 col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img5.jpg" data-caption="Showing image 1">
                            <img src="images/img5.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item grid-masonry-item-width-2 col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img29.jpg" data-caption="Showing image 2">
                            <img src="images/img29.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img30.jpg" data-caption="Showing image 3">
                            <img src="images/img30.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item grid-masonry-item-width-3 col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img31.jpg" data-caption="Showing image 4">
                            <img src="images/img31.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img32.jpg" data-caption="Showing image 5">
                            <img src="images/img32.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item grid-masonry-item-width-4 col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img33.jpg" data-caption="Showing image 6">
                            <img src="images/img33.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="grid-masonry-item col-lg-4">
                    <div class="gallery-card">
                        <a class="d-block" data-fancybox="gallery" href="images/img34.jpg" data-caption="Showing image 7">
                            <img src="images/img34.jpg" />
                        </a>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end gallery-area -->
    <!-- ================================
        END GALLERY AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
