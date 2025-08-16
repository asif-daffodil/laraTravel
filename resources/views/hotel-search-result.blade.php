@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Hotel Search Result')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-7">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="search-result-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Hotel Search Result</h2>
                            </div>
                            <div class="search-fields-container margin-top-30px">
                                <div class="contact-form-action">
                                    <form action="#" class="row">
                                        <div class="col-lg-3 col-sm-6 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Where would like to go?</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Destination" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Check in - Check out</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Room Type</label>
                                                <div class="form-group select2-container-wrapper">
                                                    <div class="select-contain select-contain-shadow w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="0">Select Type</option>
                                                            <option value="1">Single</option>
                                                            <option value="2">Double</option>
                                                            <option value="3">Triple</option>
                                                            <option value="4">Quad</option>
                                                            <option value="5">Queen</option>
                                                            <option value="6">King</option>
                                                            <option value="7">Twin</option>
                                                            <option value="8">Double-double</option>
                                                            <option value="9">Studio</option>
                                                            <option value="10">Suite</option>
                                                            <option value="11">Mini Suite</option>
                                                            <option value="12">President Suite</option>
                                                            <option value="13">President Suite</option>
                                                            <option value="14">Apartments</option>
                                                            <option value="15">Connecting rooms</option>
                                                            <option value="16">Murphy Room</option>
                                                            <option value="17">Accessible Room</option>
                                                            <option value="18">Cabana</option>
                                                            <option value="19">Adjoining rooms</option>
                                                            <option value="20">Adjacent rooms</option>
                                                            <option value="21">Villa</option>
                                                            <option value="22">Executive Floor</option>
                                                            <option value="23">Smoking room</option>
                                                            <option value="24">Non-Smoking Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="input-box">
                                                <label class="label-text">Guests and Rooms</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#"
                                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-auto-close="outside">
                                                            <span class="adult" data-text="Adult"
                                                                data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child"
                                                                data-text-multi="Children">0 Child</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Rooms</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="room_number"
                                                                            value="0" class="qty-input" />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="adult_number"
                                                                            value="0" />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="child_number"
                                                                            value="0" />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                    </form>
                                </div>
                                <!-- end contact-form-action -->
                                <div class="advanced-wrap">
                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                        data-bs-toggle="collapse" href="#collapseTwo" role="button"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        More option <i class="la la-angle-down ms-1"></i>
                                    </a>
                                    <div class="pt-3 collapse" id="collapseTwo">
                                        <div class="slider-range-wrap">
                                            <div class="price-slider-amount padding-bottom-20px">
                                                <label for="amount" class="filter__label">Price:</label>
                                                <input type="text" id="amount" class="amounts" readonly="" />
                                            </div>
                                            <!-- end price-slider-amount -->
                                            <div id="slider-range"></div>
                                            <!-- end slider-range -->
                                        </div>
                                        <!-- end slider-range-wrap -->
                                        <div class="checkbox-wrap padding-top-30px">
                                            <h3 class="title font-size-15 pb-3">
                                                Hotel Facilities
                                            </h3>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c1" />
                                                <label for="c1">Air Conditioning</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c2" />
                                                <label for="c2">Airport Transport</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c3" />
                                                <label for="c3">Fitness Center</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c4" />
                                                <label for="c4">Flat Tv</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c5" />
                                                <label for="c5">Heater</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c6" />
                                                <label for="c6">Internet - wi-fi</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c7" />
                                                <label for="c7">Parking</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c8" />
                                                <label for="c8">Pool</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c9" />
                                                <label for="c9">Restaurant</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c10" />
                                                <label for="c10">Smoking Room</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c11" />
                                                <label for="c11">Spa & Sauna</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block me-4">
                                                <input type="checkbox" class="form-check-input" id="c12" />
                                                <label for="c12">Washer & Dryer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-filter-search-btn">
                                    <a href="flight-search-result.html"
                                        class="theme-btn w-100 text-center margin-top-20px">Modify Search</a>
                                </div>
                            </div>
                            <!-- end search-fields-container -->
                        </div>
                        <!-- end search-result-content -->
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
        START CARD AREA
    ================================= -->
    <section class="card-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">5 Hotels found</h3>
                                <p class="font-size-14">
                                    <span class="me-1 pt-1">Book with confidence:</span>No hotel
                                    booking fees
                                </p>
                            </div>
                        </div>
                        <!-- end filter-top -->
                        <div class="filter-bar d-flex align-items-center justify-content-between">
                            <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                                <div class="filter-option">
                                    <h3 class="title font-size-16">Filter by:</h3>
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#"
                                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Filter Price
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="slider-range-wrap">
                                                    <div class="price-slider-amount padding-bottom-20px">
                                                        <label for="amount" class="filter__label">Price:</label>
                                                        <input type="text" id="amount" class="amounts" />
                                                    </div>
                                                    <!-- end price-slider-amount -->
                                                    <div id="slider-range"></div>
                                                    <!-- end slider-range -->
                                                </div>
                                                <!-- end slider-range-wrap -->
                                                <div class="btn-box pt-4">
                                                    <button class="theme-btn theme-btn-small theme-btn-transparent"
                                                        type="button">
                                                        Apply
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- end dropdown-item -->
                                        </div>
                                        <!-- end dropdown-menu -->
                                    </div>
                                    <!-- end dropdown -->
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#"
                                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Review Score
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="checkbox-wrap">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="r1" />
                                                        <label for="r1">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <span
                                                                    class="color-text-3 font-size-13 ms-1">(55.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="r2" />
                                                        <label for="r2">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span
                                                                    class="color-text-3 font-size-13 ms-1">(40.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="r3" />
                                                        <label for="r3">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span
                                                                    class="color-text-3 font-size-13 ms-1">(23.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="r4" />
                                                        <label for="r4">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span
                                                                    class="color-text-3 font-size-13 ms-1">(12.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="r5" />
                                                        <label for="r5">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span class="color-text-3 font-size-13 ms-1">(590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end dropdown-item -->
                                        </div>
                                        <!-- end dropdown-menu -->
                                    </div>
                                    <!-- end dropdown -->
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#"
                                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Facilities
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="checkbox-wrap">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb1" />
                                                        <label for="catChb1">Pet Allowed</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb2" />
                                                        <label for="catChb2">Groups Allowed</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb3" />
                                                        <label for="catChb3">Tour Guides</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb4" />
                                                        <label for="catChb4">Access for disabled</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb5" />
                                                        <label for="catChb5">Room Service</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb6" />
                                                        <label for="catChb6">Parking</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb7" />
                                                        <label for="catChb7">Restaurant</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="catChb8" />
                                                        <label for="catChb8">Pet friendly</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end dropdown-item -->
                                        </div>
                                        <!-- end dropdown-menu -->
                                    </div>
                                    <!-- end dropdown -->
                                </div>
                            </div>
                            <!-- end filter-bar-filter -->
                            <div class="select-contain select2-container-wrapper">
                                <select class="select-contain-select">
                                    <option value="1">Short by default</option>
                                    <option value="2">Popular Hotel</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                    <option value="5">A to Z</option>
                                </select>
                            </div>
                            <!-- end select-contain -->
                        </div>
                        <!-- end filter-bar -->
                    </div>
                    <!-- end filter-wrap -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar mt-0">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Search Hotels</h3>
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="input-box">
                                            <label class="label-text">Destination / hotel name</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" name="text"
                                                    placeholder="Destination, hotel name"
                                                    value="Dubai, United Arab Emirates" />
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Check in - Check out</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange"
                                                    value="2025-08-02 - 2025-08-04" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item">
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Rooms</label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                        </div>
                                        <input type="text" name="qtyInput" value="1" />
                                        <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- end qty-box -->
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Adults <span>18+</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                        </div>
                                        <input type="text" name="qtyInput" value="2" />
                                        <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- end qty-box -->
                                <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                    <label class="font-size-16">Children <span>2-12 years old</span></label>
                                    <div class="qtyBtn d-flex align-items-center">
                                        <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                        </div>
                                        <input type="text" name="qtyInput" value="2" />
                                        <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- end qty-box -->
                            </div>
                            <!-- end sidebar-widget-item -->
                            <div class="btn-box pt-2">
                                <a href="hotel-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Filter by Price</h3>
                            <div class="sidebar-price-range">
                                <div class="main-search-input-item">
                                    <div class="price-slider-amount padding-bottom-20px">
                                        <label for="amount2" class="filter__label">Price:</label>
                                        <input type="text" id="amount2" class="amounts" />
                                    </div>
                                    <!-- end price-slider-amount -->
                                    <div id="slider-range2"></div>
                                    <!-- end slider-range -->
                                </div>
                                <!-- end main-search-input-item -->
                                <div class="btn-box pt-4">
                                    <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Review Score</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="r6" />
                                    <label for="r6">Excellent</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="r7" />
                                    <label for="r7">Very Good</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="r8" />
                                    <label for="r8">Average</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="r9" />
                                    <label for="r9">Poor</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="r10" />
                                    <label for="r10">Terrible</label>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Filter by Rating</h3>
                            <div class="sidebar-review">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="s1" />
                                    <label for="s1">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <span class="color-text-3 font-size-13 ms-1">(55.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="s2" />
                                    <label for="s2">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="color-text-3 font-size-13 ms-1">(40.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="s3" />
                                    <label for="s3">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="color-text-3 font-size-13 ms-1">(23.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="s4" />
                                    <label for="s4">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="color-text-3 font-size-13 ms-1">(12.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox mb-0">
                                    <input type="checkbox" class="form-check-input" id="s5" />
                                    <label for="s5">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="color-text-3 font-size-13 ms-1">(590)</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Facilities</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="f1" />
                                    <label for="f1">Air Conditioning</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="chb12" />
                                    <label for="chb12">Airport Transport</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="f2" />
                                    <label for="f2">Fitness Center</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="f3" />
                                    <label for="f3">Flat Tv</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="f4" />
                                    <label for="f4">Heater</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="f5" />
                                    <label for="f5">Internet – Wifi</label>
                                </div>
                                <div class="collapse" id="facilitiesMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f6" />
                                        <label for="f6">Parking</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f7" />
                                        <label for="f7">Pool</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f8" />
                                        <label for="f8">Restaurant</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f9" />
                                        <label for="f9">Smoking Room</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f10" />
                                        <label for="f10">Spa &amp; Sauna</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="f11" />
                                        <label for="f11">Washer &amp; Dryer</label>
                                    </div>
                                </div>
                                <a class="btn-text" data-bs-toggle="collapse" href="#facilitiesMenu" role="button"
                                    aria-expanded="false" aria-controls="facilitiesMenu">
                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Hotel Theme</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht1" />
                                    <label for="ht1">Best value</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht2" />
                                    <label for="ht2">Boutique</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht3" />
                                    <label for="ht3">Budget</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht4" />
                                    <label for="ht4">Business</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht5" />
                                    <label for="ht5">Charming</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="ht6" />
                                    <label for="ht6">Classic</label>
                                </div>
                                <div class="collapse" id="hotelThemeMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht7" />
                                        <label for="ht7">Green</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht8" />
                                        <label for="ht8">Luxury</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht9" />
                                        <label for="ht9">Mid-range</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht10" />
                                        <label for="ht10">Party</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht11" />
                                        <label for="ht11">Quaint</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht12" />
                                        <label for="ht12">Quite</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht14" />
                                        <label for="ht14">Romantic</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht15" />
                                        <label for="ht15">Standard</label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="ht16" />
                                        <label for="ht16">Trendy</label>
                                    </div>
                                </div>
                                <a class="btn-text" data-bs-toggle="collapse" href="#hotelThemeMenu" role="button"
                                    aria-expanded="false" aria-controls="hotelThemeMenu">
                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <!-- Hotel 1: Sun & Sands Seaview Hotel -->
                    <div class="card-item card-item-list">
                        <div class="card-img">
                            <a href="hotel-single.html" class="d-block">
                                <img src="https://www.dotwconnect.com/poze_hotel/19/1930015/lwooggNh_2529b2b3d5853a9df6c21d63327f14b5.JPG"
                                    alt="hotel-img" />
                            </a>
                            <span class="badge">Bestseller</span>
                            <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip" data-placement="top"
                                title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="hotel-single.html">Sun & Sands Seaview Hotel</a>
                            </h3>
                            <p class="card-meta">
                                <i class="la la-map-marker"></i> Al Khaleej Road, Al Baraha,
                                Dubai, United Arab Emirates
                            </p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>

                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">৳5,000</span>
                                    <span class="price__text">2 night</span>
                                </p>
                                <a href="hotel-single.html" class="theme-btn">Check Availability<i
                                        class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->

                    <!-- Hotel 2: Premier Inn Dubai Al Jaddaf -->
                    <div class="card-item card-item-list">
                        <div class="card-img">
                            <a href="hotel-single.html" class="d-block">
                                <img src="https://static-images.webbeds.com/0/image/14a2b37e-8995-4a2c-bf4c-5c2ebd14ed2f.jpg"
                                    alt="hotel-img" />
                            </a>
                            <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip" data-placement="top"
                                title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="hotel-single.html">Premier Inn Dubai Al Jaddaf</a>
                            </h3>
                            <p class="card-meta">
                                <i class="la la-map-marker"></i> Culture Village, Al Jaddaf,
                                Dubai, United Arab Emirates
                            </p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>

                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">৳6,000</span>
                                    <span class="price__text">2 night</span>
                                </p>
                                <a href="hotel-single.html" class="theme-btn">Check Availability<i
                                        class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->

                    <!-- Hotel 3: Premier Inn Dubai International Airport -->
                    <div class="card-item card-item-list">
                        <div class="card-img">
                            <a href="hotel-single.html" class="d-block">
                                <img src="https://static-images.webbeds.com/0/image/ad885c44-fdf2-43ee-aa00-285ddf4e9c2c.jpg"
                                    alt="hotel-img" />
                            </a>
                            <span class="badge">Featured</span>
                            <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip" data-placement="top"
                                title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="hotel-single.html">Premier Inn Dubai International Airport</a>
                            </h3>
                            <p class="card-meta">
                                <i class="la la-map-marker"></i> Opposite Terminal 3, via
                                Street 52b, Dubai, United Arab Emirates
                            </p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>

                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">৳7,500</span>
                                    <span class="price__text">2 night</span>
                                </p>
                                <a href="hotel-single.html" class="theme-btn">Check Availability<i
                                        class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->

                    <!-- Hotel 4: Hafez Hotel Apartments -->
                    <div class="card-item card-item-list">
                        <div class="card-img">
                            <a href="hotel-single.html" class="d-block">
                                <img src="https://i.travelapi.com/lodging/11000000/10260000/10257700/10257665/404f22b3_b.jpg"
                                    alt="hotel-img" />
                            </a>
                            <span class="badge">Popular</span>
                            <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip" data-placement="top"
                                title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="hotel-single.html">Hafez Hotel Apartments</a>
                            </h3>
                            <p class="card-meta">
                                <i class="la la-map-marker"></i> Next to E NBD Bank Bldg, Al
                                Ras, Dubai, United Arab Emirates
                            </p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>

                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">৳9,500</span>
                                    <span class="price__text">2 night</span>
                                </p>
                                <a href="hotel-single.html" class="theme-btn">Check Availability<i
                                        class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->

                    <!-- Hotel 5: Novotel World Trade Centre -->
                    <div class="card-item card-item-list">
                        <div class="card-img">
                            <a href="hotel-single.html" class="d-block">
                                <img src="https://i.travelapi.com/lodging/1000000/920000/911600/911528/811bccf8_b.jpg"
                                    alt="hotel-img" />
                            </a>
                            <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip" data-placement="top"
                                title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="hotel-single.html">Novotel World Trade Centre</a>
                            </h3>
                            <p class="card-meta">
                                <i class="la la-map-marker"></i> Al Mustaqbal Street, Dubai,
                                United Arab Emirates
                            </p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>

                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">৳11,500</span>
                                    <span class="price__text">2 night</span>
                                </p>
                                <a href="hotel-single.html" class="theme-btn">Check Availability<i
                                        class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-8 -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START INFO AREA
    ================================= -->
    <section class="info-area info-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-phone"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Need Help? Contact us</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Payments</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-times"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Cancel Policy</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div>
                        <!-- end info-content -->
                    </a><!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
        END INFO AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
