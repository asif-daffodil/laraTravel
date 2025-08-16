@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Flight Details')

@section('content')
<!-- ================================
    START BREADCRUMB TOP BAR
================================= -->
    <section class="breadcrumb-top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-list breadcrumb-top-list">
              <ul class="list-items bg-transparent radius-none p-0">
                <li><a href="index.html">Home</a></li>
                <li>France</li>
                <li>New york to paris</li>
              </ul>
            </div>
            <!-- end breadcrumb-list -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end breadcrumb-top-bar -->
    <!-- ================================
    END BREADCRUMB TOP BAR
================================= -->
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-6 py-0">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">
                            <div class="btn-box">
                                <a class="theme-btn" data-fancybox="video"
                                    data-src="https://www.youtube.com/watch?v=IpVmKLpo-Sk" data-speed="700">
                                    <i class="la la-video-camera me-2"></i>Video
                                </a>
                                <a class="theme-btn" data-src="images/destination-img.jpg" data-fancybox="gallery"
                                    data-caption="Showing image - 01" data-speed="700">
                                    <i class="la la-photo me-2"></i>More Photos
                                </a>
                            </div>
                            <a class="d-none" data-fancybox="gallery" data-src="images/destination-img2.jpg"
                                data-caption="Showing image - 02" data-speed="700"></a>
                            <a class="d-none" data-fancybox="gallery" data-src="images/destination-img3.jpg"
                                data-caption="Showing image - 03" data-speed="700"></a>
                            <a class="d-none" data-fancybox="gallery" data-src="images/destination-img4.jpg"
                                data-caption="Showing image - 04" data-speed="700"></a>
                        </div>
                        <!-- end breadcrumb-btn -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START TOUR DETAIL AREA
    ================================= -->
    <section class="tour-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                <li>
                                    <a data-scroll="description" href="#description" class="scroll-link active">Flight
                                        Details</a>
                                </li>
                                <li>
                                    <a data-scroll="inflight-features" href="#inflight-features"
                                        class="scroll-link">Inflight Features</a>
                                </li>
                                <li>
                                    <a data-scroll="seat-selection" href="#seat-selection" class="scroll-link">Seat
                                        Selection</a>
                                </li>
                                <li>
                                    <a data-scroll="baggage" href="#baggage" class="scroll-link">Baggage</a>
                                </li>
                                <li>
                                    <a data-scroll="fare-rules" href="#fare-rules" class="scroll-link">Fare Rules</a>
                                </li>
                                <li>
                                    <a data-scroll="reviews" href="#reviews" class="scroll-link">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            <div id="description" class="page-scroll">
                                <div class="single-content-item pb-4">
                                    <h3 class="title font-size-26">New York to Paris</h3>
                                    <div class="d-flex align-items-center pt-2">
                                        <p class="me-2">One way flight</p>
                                        <p>
                                            <span class="badge text-bg-warning text-white font-weight-medium font-size-16">1
                                                Stop</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Flight Take off
                                                </h3>
                                                <span class="font-size-13">12 Jun 2020, 7:50 am</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <i class="la la-clock-o text-color font-size-22"></i>
                                                <span class="font-size-13 mt-n2">1H 40M</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Flight Landing
                                                </h3>
                                                <span class="font-size-13">13 Jun 2020, 5:50 am</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div
                                                class="single-feature-titles text-center border-top border-bottom py-3 mb-4">
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Total flight time:<span
                                                        class="font-size-13 d-inline-block ms-1 text-gray">13 Hours 40
                                                        min</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end col-lg-12 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-plane"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Airline
                                                    </h3>
                                                    <span class="font-size-13">Delta</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-user"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Flight Type
                                                    </h3>
                                                    <span class="font-size-13">Economy</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-refresh"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Fare Type
                                                    </h3>
                                                    <span class="font-size-13">Refundable</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-times"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Cancellation
                                                    </h3>
                                                    <span class="font-size-13">$78 / Person</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-exchange"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Flight Change
                                                    </h3>
                                                    <span class="font-size-13">$53 / Person</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-shopping-cart"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Seats & Baggage
                                                    </h3>
                                                    <span class="font-size-13">Extra Charge</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-gear"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Inflight Features
                                                    </h3>
                                                    <span class="font-size-13">Available</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-building"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Base Fare
                                                    </h3>
                                                    <span class="font-size-13">$320.00</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                    <i class="la la-money"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Taxes & Fees
                                                    </h3>
                                                    <span class="font-size-13">$300.00</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">About Delta Airlines</h3>
                                    <p class="py-3">
                                        Per consequat adolescens ex, cu nibh commune temporibus
                                        vim, ad sumo viris eloquentiam sed. Mea appareat
                                        omittantur eloquentiam ad, nam ei quas oportere
                                        democritum. Prima causae admodum id est, ei timeam
                                        inimicus sed. Sit an meis aliquam, cetero inermis vel ut.
                                        An sit illum euismod facilisis, tamquam vulputate
                                        pertinacia eum at.
                                    </p>
                                    <p class="pb-3">
                                        Cum et probo menandri. Officiis consulatu pro et, ne sea
                                        sale invidunt, sed ut sint blandit efficiendi. Atomorum
                                        explicari eu qui, est enim quaerendum te. Quo harum viris
                                        id. Per ne quando dolore evertitur, pro ad cibo commune.
                                    </p>
                                    <p>
                                        Sed scelerisque lectus sit amet faucibus sodales. Proin ut
                                        risus tortor. Etiam fermentum tellus auctor, fringilla
                                        sapien et, congue quam. In a luctus tortor. Suspendisse
                                        eget tempor libero, ut sollicitudin ligula. Nulla
                                        vulputate tincidunt est non congue. Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos. Phasellus at est imperdiet, dapibus
                                        ipsum vel, lacinia nulla.
                                    </p>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end description -->
                            <div id="inflight-features" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-30px">
                                    <h3 class="title font-size-20">Inflight Features</h3>
                                    <p class="pt-3">
                                        Maecenas vitae turpis condimentum metus tincidunt semper
                                        bibendum ut orci. Donec eget accumsan est. Duis laoreet
                                        sagittis elit et vehicula. Cras viverra posuere
                                        condimentum. Donec urna arcu, venenatis quis augue sit
                                        amet, mattis gravida nunc.
                                    </p>
                                    <div class="inflight-content-item pt-4">
                                        <div class="row">
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-wifi"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            WI-FI
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-music"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Entertainment
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-television"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Television
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-tree"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Air Conditioning
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-glass"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Drink
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-gamepad"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Games
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-coffee"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Coffee
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-glass"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Wines
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-shopping-cart"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Shopping
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-cutlery"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Food
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-bed"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Comfort
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-photo"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Magazines
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end inflight-content-item -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end inflight-features -->
                            <div id="seat-selection" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Select your Seats</h3>
                                    <p class="pt-3">
                                        Maecenas vitae turpis condimentum metus tincidunt semper
                                        bibendum ut orci. Donec eget accumsan est. Duis laoreet
                                        sagittis elit et vehicula.
                                    </p>
                                    <div class="cabin-type padding-top-30px">
                                        <div class="cabin-type-item seat-selection-item d-flex">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="images/seat1.png" alt="" />
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Standard advance seat selection</h3>
                                                <p class="font-size-15 pt-2">
                                                    Donec urna arcu, venenatis quis augue sit amet,
                                                    mattis gravida nunc. Integer faucibus, tortor a
                                                    tristique adipiscing, arcu metus luctus libero, nec
                                                    vulputate risus elit id nibh.
                                                </p>
                                            </div>
                                            <div class="cabin-price text-center">
                                                <p class="text-uppercase font-size-14">
                                                    Starting at<strong
                                                        class="mt-n1 text-black font-size-18 d-block">$15</strong>
                                                </p>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" class="form-check-input form-check-two"
                                                        id="selectChb1" />
                                                    <label for="selectChb1"
                                                        class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end cabin-type-item -->
                                    </div>
                                    <!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <div class="cabin-type-item seat-selection-item d-flex">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="images/seat2.png" alt="" />
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Standard advance seat selection</h3>
                                                <p class="font-size-15 pt-2">
                                                    Donec urna arcu, venenatis quis augue sit amet,
                                                    mattis gravida nunc. Integer faucibus, tortor a
                                                    tristique adipiscing, arcu metus luctus libero, nec
                                                    vulputate risus elit id nibh.
                                                </p>
                                            </div>
                                            <div class="cabin-price text-center">
                                                <p class="text-uppercase font-size-14">
                                                    Starting at<strong
                                                        class="mt-n1 text-black font-size-18 d-block">$15</strong>
                                                </p>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" class="form-check-input form-check-two"
                                                        id="selectChb2" />
                                                    <label for="selectChb2"
                                                        class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end cabin-type-item -->
                                    </div>
                                    <!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <div class="cabin-type-item seat-selection-item d-flex">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="images/seat3.png" alt="" />
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Standard advance seat selection</h3>
                                                <p class="font-size-15 pt-2">
                                                    Donec urna arcu, venenatis quis augue sit amet,
                                                    mattis gravida nunc. Integer faucibus, tortor a
                                                    tristique adipiscing, arcu metus luctus libero, nec
                                                    vulputate risus elit id nibh.
                                                </p>
                                            </div>
                                            <div class="cabin-price text-center">
                                                <p class="text-uppercase font-size-14">
                                                    Starting at<strong
                                                        class="mt-n1 text-black font-size-18 d-block">$15</strong>
                                                </p>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" class="form-check-input form-check-two"
                                                        id="selectChb3" />
                                                    <label for="selectChb3"
                                                        class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end cabin-type-item -->
                                    </div>
                                    <!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <div class="cabin-type-item seat-selection-item d-flex">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="images/seat4.png" alt="" />
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Standard advance seat selection</h3>
                                                <p class="font-size-15 pt-2">
                                                    Donec urna arcu, venenatis quis augue sit amet,
                                                    mattis gravida nunc. Integer faucibus, tortor a
                                                    tristique adipiscing, arcu metus luctus libero, nec
                                                    vulputate risus elit id nibh.
                                                </p>
                                            </div>
                                            <div class="cabin-price text-center">
                                                <p class="text-uppercase font-size-14">
                                                    Starting at<strong
                                                        class="mt-n1 text-black font-size-18 d-block">$15</strong>
                                                </p>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" class="form-check-input form-check-two"
                                                        id="selectChb4" />
                                                    <label for="selectChb4"
                                                        class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end cabin-type-item -->
                                    </div>
                                    <!-- end cabin-type -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end seat-selection -->
                            <div id="baggage" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Baggage</h3>
                                    <div class="contact-form-action padding-top-30px">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box">
                                                        <label class="label-text">From</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="City, airport or country name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box">
                                                        <label class="label-text">To</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="City, airport or country name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box">
                                                        <label class="label-text">Top Tier Status</label>
                                                        <div class="form-group select2-container-wrapper">
                                                            <div class="select-contain w-auto">
                                                                <select class="select-contain-select">
                                                                    <option value="1" selected="selected">
                                                                        Super elite 50k
                                                                    </option>
                                                                    <option value="2">Super elite 60k</option>
                                                                    <option value="3">Super elite 80k</option>
                                                                    <option value="4">Super elite 100k</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box">
                                                        <label class="label-text">Bag weight</label>
                                                        <div class="form-group select2-container-wrapper">
                                                            <div class="select-contain w-auto">
                                                                <select class="select-contain-select">
                                                                    <option value="1" selected="selected">
                                                                        20kgs (40lbs)
                                                                    </option>
                                                                    <option value="2">30kgs (60lbs)</option>
                                                                    <option value="3">40kgs (80lbs)</option>
                                                                    <option value="4">50kgs (100lbs)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Class of service</label>
                                                        <div class="form-group">
                                                            <span class="la la-briefcase form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="Economy class" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="chbocupying" />
                                                                <label for="chbocupying">Infant/child (0 to 11 years)
                                                                    occupying a
                                                                    seat (with own ticket)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="btn-box">
                                                        <button type="button" class="theme-btn">
                                                            View Baggage Allowance
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end contact-form-action -->
                                    <div class="baggage-feature-item py-4">
                                        <p class="pb-3">
                                            In this section you'll find information on baggage
                                            allowances, special equipment and sports items as well
                                            as restricted items. We've also included some tips to
                                            make your trip more enjoyable.
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-shopping-cart"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Carry-on Allowance
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Baggage Allowance
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Delayed Baggage
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Damaged Baggage
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Baggage Status
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Baggage Services
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-briefcase"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Baggage Tips
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-user-times"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Restricted Items
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-file"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Liability Limitations
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3">
                                                        <i class="la la-gift"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Lost and Found
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <h3 class="title font-size-20">Basic Information</h3>
                                    <p class="pt-3">
                                        Vestibulum ut iaculis justo, auctor sodales lectus. Donec
                                        et tellus tempus, dignissim maurornare, consequat lacus.
                                        Integer dui neque, scelerisque nec sollicitudin sit amet,
                                        sodales a erat. Duis vitae condimentum ligula. Integer eu
                                        mi nisl. Donec massa dui, commodo id arcu quis, venenatis
                                        scelerisque velit.
                                    </p>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end faq -->
                            <div id="fare-rules" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">
                                        Fare Rules for your Flight
                                    </h3>
                                    <div class="fare-feature-item padding-top-30px pb-2">
                                        <div class="row">
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Rules And Policies
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Flight Changes
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Refunds
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Airline Penalties
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Flight Cancellation
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 responsive-column">
                                                <div class="single-tour-feature d-flex align-items-center mb-3">
                                                    <div class="single-feature-icon icon-element ms-0 flex-shrink-0 me-2">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium">
                                                            Airline Terms Of Use
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end single-tour-feature -->
                                            </div>
                                            <!-- end col-lg-4 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <p>
                                        Maecenas vitae turpis condimentum metus tincidunt semper
                                        bibendum ut orci. Donec eget accumsan est. Duis laoreet
                                        sagittis elit et vehicula. Cras viverra posuere
                                        condimentum. Donec urna arcu, venenatis quis augue sit
                                        amet, mattis gravida nunc. Integer faucibus, tortor a
                                        tristique adipiscing, arcu metus luctus libero, nec
                                        vulputate risus elit id nibh.
                                    </p>
                                    <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFour">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseFour" aria-expanded="true"
                                                        aria-controls="faqCollapseFour">
                                                        <span class="ms-3">Flight cancellation charges</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFour" class="collapse show"
                                                aria-labelledby="faqHeadingFour" data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFive">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseFive" aria-expanded="false"
                                                        aria-controls="faqCollapseFive">
                                                        <span class="ms-3">WAmendment in higher class charges</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive"
                                                data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSix">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseSix" aria-expanded="false"
                                                        aria-controls="faqCollapseSix">
                                                        <span class="ms-3">Amendment in same class charges</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix"
                                                data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSeven">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#faqCollapseSeven" aria-expanded="false"
                                                        aria-controls="faqCollapseSeven">
                                                        <span class="ms-3">Rebooking/cancellation charges</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSeven" class="collapse" aria-labelledby="faqHeadingSeven"
                                                data-bs-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>
                                                        Mea appareat omittantur eloquentiam ad, nam ei
                                                        quas oportere democritum. Prima causae admodum id
                                                        est, ei timeam inimicus sed. Sit an meis aliquam,
                                                        cetero inermis vel ut. An sit illum euismod
                                                        facilisis Nullam id dolor id nibh ultricies
                                                        vehicula ut id elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end faq -->
                            <div id="reviews" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Reviews</h3>
                                    <div class="review-container padding-top-30px">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="review-summary">
                                                    <h2>4.5<span>/5</span></h2>
                                                    <p>Excellent</p>
                                                    <span>Based on 4 reviews</span>
                                                </div>
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-8">
                                                <div class="review-bars">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Service</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="70%">
                                                                            <div class="progressbar-line-item bar-bg-1">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Location</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="55%">
                                                                            <div class="progressbar-line-item bar-bg-2">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.7</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">
                                                                    Value for Money
                                                                </h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="40%">
                                                                            <div class="progressbar-line-item bar-bg-3">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Cleanliness</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="60%">
                                                                            <div class="progressbar-line-item bar-bg-4">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">3.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Facilities</h3>
                                                                <div
                                                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="50%">
                                                                            <div class="progressbar-line-item bar-bg-5">
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div>
                                                            <!-- end progress-item -->
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            <!-- end col-lg-8 -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div>
                            <!-- end reviews -->
                            <div class="review-box">
                                <div class="single-content-item padding-top-40px">
                                    <h3 class="title font-size-20">Showing 3 guest reviews</h3>
                                    <div class="comments-list padding-top-50px">
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team8.jpg" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="comment comment-reply-item">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team9.jpg" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team10.jpg" />
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center me-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus
                                                    moderatius ea ius, sed civibus vivendum imperdiet
                                                    ei, amet tritani sea id. Ut veri diceret fierent
                                                    mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div
                                                    class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#replayPopupForm">
                                                        <span class="la la-mail-reply me-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i
                                                                class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i
                                                                class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i
                                                                class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end comments -->
                                        <div class="btn-box load-more text-center">
                                            <button class="theme-btn theme-btn-small theme-btn-transparent"
                                                type="button">
                                                Load More Review
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end comments-list -->
                                    <div class="comment-forum padding-top-40px">
                                        <div class="form-box">
                                            <div class="form-title-wrap">
                                                <h3 class="title">Write a Review</h3>
                                            </div>
                                            <!-- form-title-wrap -->
                                            <div class="form-content">
                                                <div class="rate-option p-2">
                                                    <div class="row">
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Service</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst1" value="1" />
                                                                    <label for="lst1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst2" value="2" />
                                                                    <label for="lst2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst3" value="3" />
                                                                    <label for="lst3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst4" value="4" />
                                                                    <label for="lst4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="lst5" value="5" />
                                                                    <label for="lst5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Location</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l1" value="1" />
                                                                    <label for="l1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l2" value="2" />
                                                                    <label for="l2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l3" value="3" />
                                                                    <label for="l3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l4" value="4" />
                                                                    <label for="l4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="l5" value="5" />
                                                                    <label for="l5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Value for Money</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm1" value="1" />
                                                                    <label for="vm1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm2" value="2" />
                                                                    <label for="vm2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm3" value="3" />
                                                                    <label for="vm3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm4" value="4" />
                                                                    <label for="vm4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="vm5" value="5" />
                                                                    <label for="vm5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Cleanliness</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln1" value="1" />
                                                                    <label for="cln1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln2" value="2" />
                                                                    <label for="cln2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln3" value="3" />
                                                                    <label for="cln3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln4" value="4" />
                                                                    <label for="cln4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="cln5" value="5" />
                                                                    <label for="cln5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Facilities</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f1" value="1" />
                                                                    <label for="f1"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f2" value="2" />
                                                                    <label for="f2"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f3" value="3" />
                                                                    <label for="f3"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f4" value="4" />
                                                                    <label for="f4"></label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="f5" value="5" />
                                                                    <label for="f5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col-lg-4 -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                                <!-- end rate-option -->
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="input-box">
                                                                    <label class="label-text">Name</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-user form-icon"></span>
                                                                        <input class="form-control" type="text"
                                                                            name="text" placeholder="Your name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-box">
                                                                    <label class="label-text">Email</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-envelope-o form-icon"></span>
                                                                        <input class="form-control" type="email"
                                                                            name="email" placeholder="Email address" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="input-box">
                                                                    <label class="label-text">Message</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-pencil form-icon"></span>
                                                                        <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="btn-box">
                                                                    <button type="button" class="theme-btn">
                                                                        Leave a Review
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- end contact-form-action -->
                                            </div>
                                            <!-- end form-content -->
                                        </div>
                                        <!-- end form-box -->
                                    </div>
                                    <!-- end comment-forum -->
                                </div>
                                <!-- end single-content-item -->
                            </div>
                            <!-- end review-box -->
                        </div>
                        <!-- end single-content-wrap -->
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar single-content-sidebar mb-0">
                            <div class="sidebar-widget single-content-widget">
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <h3>Popular</h3>
                                        <p>
                                            <span class="text-form">From</span><span
                                                class="text-value ms-2 me-1">$399.00</span>
                                            <span class="before-price">$412.00</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" />
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Preferred class</label>
                                                <div class="form-group select2-container-wrapper">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="first">First class</option>
                                                            <option value="business">Business</option>
                                                            <option value="premium">Premium economy</option>
                                                            <option value="">Economy/Coach</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Adults <span>Age 18+</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0" />
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div>
                                    <!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Children <span>2-12 years old</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0" />
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div>
                                    <!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Infants <span>0-2 years old</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0" />
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div>
                                    <!-- end qty-box -->
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="btn-box pt-2">
                                    <a href="flight-booking.html" class="theme-btn text-center w-100 mb-2"><i
                                            class="la la-shopping-cart me-2 font-size-18"></i>Book
                                        Now</a>
                                    <a href="#" class="theme-btn text-center w-100 theme-btn-transparent"><i
                                            class="la la-heart-o me-2"></i>Add to Wishlist</a>
                                    <div class="d-flex align-items-center justify-content-between pt-2">
                                        <a href="#" class="btn theme-btn-hover-gray font-size-15"
                                            data-bs-toggle="modal" data-bs-target="#sharePopupForm"><i
                                                class="la la-share me-1"></i>Share</a>
                                        <p>
                                            <i class="la la-eye me-1 font-size-15 color-text-2"></i>3456
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Enquiry Form</h3>
                                <div class="enquiry-forum">
                                    <div class="form-box">
                                        <div class="form-content">
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="input-box">
                                                        <label class="label-text">Your Name</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="Your name" />
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Your Email</label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope-o form-icon"></span>
                                                            <input class="form-control" type="email" name="email"
                                                                placeholder="Email address" />
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Message</label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil form-icon"></span>
                                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <div class="custom-checkbox mb-0">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="agreechb" />
                                                                <label for="agreechb">I agree with
                                                                    <a href="#">Terms of Service</a> and
                                                                    <a href="#">Privacy Statement</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box">
                                                        <button type="button" class="theme-btn">
                                                            Submit Enquiry
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end contact-form-action -->
                                        </div>
                                        <!-- end form-content -->
                                    </div>
                                    <!-- end form-box -->
                                </div>
                                <!-- end enquiry-forum -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Why Book With Us?</h3>
                                <div class="sidebar-list">
                                    <ul class="list-items">
                                        <li>
                                            <i class="la la-dollar icon-element me-2"></i>No-hassle
                                            best price guarantee
                                        </li>
                                        <li>
                                            <i class="la la-microphone icon-element me-2"></i>Customer care available 24/7
                                        </li>
                                        <li>
                                            <i class="la la-thumbs-up icon-element me-2"></i>Hand-picked Tours &
                                            Activities
                                        </li>
                                        <li>
                                            <i class="la la-file-text icon-element me-2"></i>Free
                                            Travel Insureance
                                        </li>
                                    </ul>
                                </div>
                                <!-- end sidebar-list -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Get a Question?</h3>
                                <p class="font-size-14 line-height-24">
                                    Do not hesitate to give us a call. We are an expert team and
                                    we are happy to talk to you.
                                </p>
                                <div class="sidebar-list pt-3">
                                    <ul class="list-items">
                                        <li>
                                            <i class="la la-phone icon-element me-2"></i><a href="#">+ 61 23 8093
                                                3400</a>
                                        </li>
                                        <li>
                                            <i class="la la-envelope icon-element me-2"></i><a
                                                href="mailto:info@TravelVela.com">info@TravelVela.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end sidebar-list -->
                            </div>
                            <!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Organized by</h3>
                                <div class="author-content">
                                    <div class="d-flex">
                                        <div class="author-img">
                                            <a href="#"><img src="images/team8.jpg"
                                                    alt="testimonial image" /></a>
                                        </div>
                                        <div class="author-bio">
                                            <h4 class="author__title">
                                                <a href="#">royaltravelagency</a>
                                            </h4>
                                            <span class="author__meta">Member Since 2017</span>
                                            <span class="ratings d-flex align-items-center">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star-o"></i>
                                                <span class="ms-2">305 Reviews</span>
                                            </span>
                                            <div class="btn-box pt-3">
                                                <a href="#"
                                                    class="theme-btn theme-btn-small theme-btn-transparent">Ask a
                                                    Question</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-widget -->
                        </div>
                        <!-- end sidebar -->
                    </div>
                    <!-- end col-lg-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end single-content-box -->
    </section>
    <!-- end tour-detail-area -->
    <!-- ================================
        END TOUR DETAIL AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START RELATE TOUR AREA
    ================================= -->
    <section class="related-tour-area section-gap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">You might also like</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item flight-card flight--card">
                        <div class="card-img">
                            <img src="images/airline-img7.png" alt="flight-logo-img" />
                        </div>
                        <div class="card-body">
                            <div class="card-top-title d-flex justify-content-between">
                                <div>
                                    <h3 class="card-title font-size-17">Beijing</h3>
                                    <p class="card-meta font-size-14">One way flight</p>
                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                        <h6 class="font-weight-bold color-text">$350.00</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-top-title -->
                            <div class="flight-details py-3">
                                <div class="flight-time pb-3">
                                    <div class="flight-time-item take-off d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Take off
                                            </h3>
                                            <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                        </div>
                                    </div>
                                    <div class="flight-time-item landing d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Landing
                                            </h3>
                                            <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end flight-time -->
                                <p class="font-size-14 text-center">
                                    <span class="color-text-2 me-1">Total Time:</span>12 Hours
                                    30 Minutes
                                </p>
                            </div>
                            <!-- end flight-details -->
                            <div class="btn-box text-center">
                                <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item flight-card flight--card">
                        <div class="card-img">
                            <img src="images/airline-img8.png" alt="flight-logo-img" />
                        </div>
                        <div class="card-body">
                            <div class="card-top-title d-flex justify-content-between">
                                <div>
                                    <h3 class="card-title font-size-17">Paris</h3>
                                    <p class="card-meta font-size-14">Round flight</p>
                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                        <h6 class="font-weight-bold color-text">$650.00</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-top-title -->
                            <div class="flight-details py-3">
                                <div class="flight-time pb-3">
                                    <div class="flight-time-item take-off d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Take off
                                            </h3>
                                            <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                        </div>
                                    </div>
                                    <div class="flight-time-item landing d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Landing
                                            </h3>
                                            <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end flight-time -->
                                <p class="font-size-14 text-center">
                                    <span class="color-text-2 me-1">Total Time:</span>12 Hours
                                    30 Minutes
                                </p>
                            </div>
                            <!-- end flight-details -->
                            <div class="btn-box text-center">
                                <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item flight-card flight--card">
                        <div class="card-img">
                            <img src="images/airline-img9.png" alt="flight-logo-img" />
                        </div>
                        <div class="card-body">
                            <div class="card-top-title d-flex justify-content-between">
                                <div>
                                    <h3 class="card-title font-size-17">Dubai</h3>
                                    <p class="card-meta font-size-14">One way flight</p>
                                </div>
                                <div>
                                    <div class="text-end">
                                        <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                        <h6 class="font-weight-bold color-text">$350.00</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-top-title -->
                            <div class="flight-details py-3">
                                <div class="flight-time pb-3">
                                    <div class="flight-time-item take-off d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Take off
                                            </h3>
                                            <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                        </div>
                                    </div>
                                    <div class="flight-time-item landing d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="la la-plane"></i>
                                        </div>
                                        <div>
                                            <h3 class="card-title font-size-15 font-weight-medium mb-0">
                                                Landing
                                            </h3>
                                            <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end flight-time -->
                                <p class="font-size-14 text-center">
                                    <span class="color-text-2 me-1">Total Time:</span>12 Hours
                                    30 Minutes
                                </p>
                            </div>
                            <!-- end flight-details -->
                            <div class="btn-box text-center">
                                <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end related-tour-area -->
    <!-- ================================
        END RELATE TOUR AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
