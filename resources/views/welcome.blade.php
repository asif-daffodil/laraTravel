@extends('layouts.app')

@section('title', 'TravelVela - Discover Your Next Journey')

@section('content')
    <!-- Start Hero Area  -->
    <section class="hero-wrapper hero-bg element-wrapper" style="background-image: url('images/hero/hero-bg.jpg')">
        <!-- Hero Elements  -->
        <div class="hero-elements">
            <img class="element element-1 element-move" src="images/hero/shape1.png" alt="shape1" />
            <img class="element element-2 element-move" src="images/hero/shape2.png" alt="shape2" />
            <img class="element element-3 element-move" src="images/hero/shape3.png" alt="shape3" />
        </div>

        <div class="hero-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto responsive--column-l">
                        <div class="hero-content text-center">
                            <div class="section-heading">
                                <p class="sub_title">Welcome To TravelVela</p>
                                <h2 class="sec__title">Discover Your Next Journey</h2>
                                <p class="sec__text">
                                    More then <span>10,300+</span> most popular destinations
                                    package
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-12 -->
                </div>
            </div>
            <!-- end container -->
        </div>

        <!-- Start Hero Filter  -->
        <div class="hero-filter">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-filter-inner">
                            <!-- end hero-content -->
                            <div class="section-tab hero-filter-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="flight-tab"
                                            data-bs-toggle="tab" href="#flight" role="tab" aria-controls="flight"
                                            aria-selected="true">
                                            <i class="la la-plane me-1"></i>Flights
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="hotel-tab" data-bs-toggle="tab"
                                            href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                            <i class="la la-hotel me-1"></i>Hotels
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="tour-tab" data-bs-toggle="tab"
                                            href="#tour" role="tab" aria-controls="tour" aria-selected="false">
                                            <i class="la la-globe me-1"></i>Tours
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end section-tab -->
                            <div class="tab-content search-fields-container" id="myTabContent">
                                <div class="tab-pane fade show active" id="flight" role="tabpanel"
                                    aria-labelledby="flight-tab">
                                    <div class="section-tab section-tab-2 pb-2 flight-subtab">
                                        <ul class="nav nav-tabs" id="myTab3" role="tablist"
                                            style="justify-content: left">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="one-way-tab" data-bs-toggle="tab"
                                                    href="#one-way" role="tab" aria-controls="one-way"
                                                    aria-selected="true">
                                                    One way
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="round-trip-tab" data-bs-toggle="tab"
                                                    href="#round-trip" role="tab" aria-controls="round-trip"
                                                    aria-selected="false">
                                                    Round-trip
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="multi-city-tab" data-bs-toggle="tab"
                                                    href="#multi-city" role="tab" aria-controls="multi-city"
                                                    aria-selected="false">
                                                    Multi-city
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end section-tab -->
                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                            aria-labelledby="one-way-tab">
                                            <div class="contact-form-action">
                                                <form action="#" class="row align-items-center">
                                                    <div class="col-lg-6 pe-0">
                                                        <!-- Search Dropdown Widget -->
                                                        <div class="s-select-widget-group-single">
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying from</label>

                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>

                                                            <div class="select-widget-middle-icon">
                                                                <i class="la la-exchange"></i>
                                                            </div>
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying to</label>
                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Departing</label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input class="date-range form-control" type="text"
                                                                    name="daterange-single" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Traveler</label>
                                                            <div class="form-group">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false"
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
                                                                                <label>Adults</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="adult_number"
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
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="child_number"
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
                                                                                <label>Infants</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="infants_number"
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
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Class</label>
                                                            <div
                                                                class="form-group select-contain select2-container-wrapper w-auto">
                                                                <select class="select-contain-select">
                                                                    <option value="1" selected="">
                                                                        Economy
                                                                    </option>
                                                                    <option value="2">Business</option>
                                                                    <option value="3">First class</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="hero-filter-search-btn">
                                                        <a href="flight-search-result.html"
                                                            class="theme-btn w-100 text-center margin-top-20px">Search
                                                            Now</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end tab-pane -->
                                        <div class="tab-pane fade" id="round-trip" role="tabpanel"
                                            aria-labelledby="round-trip-tab">
                                            <div class="contact-form-action">
                                                <form action="#" class="row align-items-center">
                                                    <div class="col-lg-6 pe-0">
                                                        <!-- Search Dropdown Widget -->
                                                        <div class="s-select-widget-group-single">
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying from</label>

                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>

                                                            <div class="select-widget-middle-icon">
                                                                <i class="la la-exchange"></i>
                                                            </div>
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying to</label>
                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Departing - Returning</label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input class="date-range form-control" type="text"
                                                                    name="daterange" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Traveler</label>
                                                            <div class="form-group">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false"
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
                                                                                <label>Adults</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="adult_number"
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
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="child_number"
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
                                                                                <label>Infants</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="infants_number"
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
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Class</label>
                                                            <div class="form-group select2-container-wrapper">
                                                                <div class="select-contain w-auto">
                                                                    <select class="select-contain-select">
                                                                        <option value="1" selected="">
                                                                            Economy
                                                                        </option>
                                                                        <option value="2">Business</option>
                                                                        <option value="3">First class</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hero-filter-search-btn">
                                                        <a href="flight-search-result.html"
                                                            class="theme-btn w-100 text-center margin-top-20px">Search
                                                            Now</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="advanced-wrap">
                                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                                    data-bs-toggle="collapse" href="#collapseThree" role="button"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Advanced options
                                                    <i class="la la-angle-down ms-1"></i>
                                                </a>
                                                <div class="collapse pt-3" id="collapseThree">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Preferred airline</label>
                                                                <div class="form-group select2-container-wrapper">
                                                                    <div class="select-contain w-100">
                                                                        <select class="select-contain-select">
                                                                            <option selected="selected" value="">
                                                                                No preference
                                                                            </option>
                                                                            <option value="AN">Advanced Air</option>
                                                                            <option value="A3">Aegean</option>
                                                                            <option value="EI">Aer Lingus</option>
                                                                            <option value="5G">
                                                                                Aerocuahonte / Mayair
                                                                            </option>
                                                                            <option value="SU">
                                                                                Aeroflot-Russian Airlines
                                                                            </option>
                                                                            <option value="AR">
                                                                                Aerolineas Argentinas
                                                                            </option>
                                                                            <option value="VW">
                                                                                Aeromar Airlines
                                                                            </option>
                                                                            <option value="AM">Aeromexico</option>
                                                                            <option value="ZI">Aigle Azur</option>
                                                                            <option value="AH">Air Algerie</option>
                                                                            <option value="KC">Air Astana</option>
                                                                            <option value="UU">Air Austral</option>
                                                                            <option value="BT">Air Baltic</option>
                                                                            <option value="BP">Air Botswana</option>
                                                                            <option value="AC">Air Canada</option>
                                                                            <option value="TX">Air Caraibes</option>
                                                                            <option value="CA">Air China</option>
                                                                            <option value="3E">
                                                                                Air Choice One
                                                                            </option>
                                                                            <option value="XK">Air Corsica</option>
                                                                            <option value="UX">Air Europa</option>
                                                                            <option value="X4">
                                                                                Air Excursions LLC
                                                                            </option>
                                                                            <option value="AF">Air France</option>
                                                                            <option value="NY">
                                                                                Air Iceland Connect
                                                                            </option>
                                                                            <option value="AI">Air India</option>
                                                                            <option value="IG">Air Italy</option>
                                                                            <option value="MD">
                                                                                Air Madagascar
                                                                            </option>
                                                                            <option value="KM">Air Malta</option>
                                                                            <option value="MK">
                                                                                Air Mauritius
                                                                            </option>
                                                                            <option value="9U">Air Moldova</option>
                                                                            <option value="NZ">
                                                                                Air New Zealand
                                                                            </option>
                                                                            <option value="PX">Air Niugini</option>
                                                                            <option value="OG">Air Onix</option>
                                                                            <option value="JU">Air Serbia</option>
                                                                            <option value="TN">
                                                                                Air Tahiti Nui
                                                                            </option>
                                                                            <option value="TS">Air Transat</option>
                                                                            <option value="H/">
                                                                                AirAsia with baggage
                                                                            </option>
                                                                            <option value="AS">
                                                                                Alaska Airlines
                                                                            </option>
                                                                            <option value="AZ">Alitalia</option>
                                                                            <option value="NH">
                                                                                All Nippon Airways
                                                                            </option>
                                                                            <option value="G4">
                                                                                Allegiant Air
                                                                            </option>
                                                                            <option value="AA">
                                                                                American Airlines
                                                                            </option>
                                                                            <option value="OY">
                                                                                Andes Lineas Aereas
                                                                            </option>
                                                                            <option value="OZ">
                                                                                Asiana Airlines
                                                                            </option>
                                                                            <option value="KP">ASKY</option>
                                                                            <option value="OS">
                                                                                Austrian Airlines
                                                                            </option>
                                                                            <option value="AV">Avianca</option>
                                                                            <option value="2K">
                                                                                Avianca Ecuador
                                                                            </option>
                                                                            <option value="9V">
                                                                                Avior Airlines
                                                                            </option>
                                                                            <option value="J2">
                                                                                Azerbaijan Airlines
                                                                            </option>
                                                                            <option value="AD">Azul</option>
                                                                            <option value="JD">
                                                                                Beijing Capital Airlines
                                                                            </option>
                                                                            <option value="0B">BlueAir</option>
                                                                            <option value="OB">
                                                                                Boliviana De Aviacion
                                                                            </option>
                                                                            <option value="4B">Boutique Air</option>
                                                                            <option value="BA">
                                                                                British Airways
                                                                            </option>
                                                                            <option value="SN">
                                                                                Brussels Airlines
                                                                            </option>
                                                                            <option value="A7">
                                                                                Calafia Airlines
                                                                            </option>
                                                                            <option value="K6">
                                                                                Cambodia Angkor Air
                                                                            </option>
                                                                            <option value="BW">
                                                                                Caribbean Airlines
                                                                            </option>
                                                                            <option value="CX">
                                                                                Cathay Pacific
                                                                            </option>
                                                                            <option value="KX">
                                                                                Cayman Airways
                                                                            </option>
                                                                            <option value="CI">
                                                                                China Airlines
                                                                            </option>
                                                                            <option value="MU">
                                                                                China Eastern Airlines
                                                                            </option>
                                                                            <option value="CZ">
                                                                                China Southern Airlines
                                                                            </option>
                                                                            <option value="CC">CM Airlines</option>
                                                                            <option value="DE">Condor</option>
                                                                            <option value="LF">
                                                                                Contour Airlines
                                                                            </option>
                                                                            <option value="CM">Copa</option>
                                                                            <option value="SS">Corsair</option>
                                                                            <option value="OK">
                                                                                Czech Airlines
                                                                            </option>
                                                                            <option value="DL">Delta</option>
                                                                            <option value="KG">
                                                                                Denver Air Connection
                                                                            </option>
                                                                            <option value="U2">easyJet</option>
                                                                            <option value="MS">Egyptair</option>
                                                                            <option value="LY">
                                                                                EL AL Israel Airlines
                                                                            </option>
                                                                            <option value="7Q">
                                                                                Elite Airways
                                                                            </option>
                                                                            <option value="EL">Ellinair</option>
                                                                            <option value="EK">Emirates</option>
                                                                            <option value="ET">
                                                                                Ethiopian Airlines
                                                                            </option>
                                                                            <option value="EY">
                                                                                Etihad Airways
                                                                            </option>
                                                                            <option value="EW">Eurowings</option>
                                                                            <option value="BR">EVA Airways</option>
                                                                            <option value="FJ">Fiji Airways</option>
                                                                            <option value="AY">Finnair</option>
                                                                            <option value="FY">Firefly</option>
                                                                            <option value="F8">
                                                                                Flair Airlines
                                                                            </option>
                                                                            <option value="BE">Flybe</option>
                                                                            <option value="FZ">flydubai</option>
                                                                            <option value="XY">flynas</option>
                                                                            <option value="F9">
                                                                                Frontier Airlines
                                                                            </option>
                                                                            <option value="GA">
                                                                                Garuda Indonesia
                                                                            </option>
                                                                            <option value="GM">
                                                                                Germania Flug AG
                                                                            </option>
                                                                            <option value="4U">Germanwings</option>
                                                                            <option value="G3">
                                                                                GOL Linhas Aereas S.A.
                                                                            </option>
                                                                            <option value="ZK">
                                                                                Great Lakes Airlines
                                                                            </option>
                                                                            <option value="GF">Gulf Air</option>
                                                                            <option value="HU">
                                                                                Hainan Airlines
                                                                            </option>
                                                                            <option value="HA">
                                                                                Hawaiian Airlines
                                                                            </option>
                                                                            <option value="HX">
                                                                                Hong Kong Airlines
                                                                            </option>
                                                                            <option value="IB">Iberia</option>
                                                                            <option value="FI">Icelandair</option>
                                                                            <option value="JY">
                                                                                interCaribbean Airways
                                                                            </option>
                                                                            <option value="4O">Interjet</option>
                                                                            <option value="03">Involatus</option>
                                                                            <option value="JL">
                                                                                Japan Airlines
                                                                            </option>
                                                                            <option value="9W">Jet Airways</option>
                                                                            <option value="B6">
                                                                                JetBlue Airways
                                                                            </option>
                                                                            <option value="DV">
                                                                                JSC Aircompany SCAT
                                                                            </option>
                                                                            <option value="KQ">
                                                                                Kenya Airways
                                                                            </option>
                                                                            <option value="KL">KLM</option>
                                                                            <option value="KE">Korean Air</option>
                                                                            <option value="B0">La Compagnie</option>
                                                                            <option value="LR">LACSA</option>
                                                                            <option value="QV">Lao Airlines</option>
                                                                            <option value="LP">
                                                                                LATAM Airlines Group
                                                                            </option>
                                                                            <option value="LA">
                                                                                LATAM Airlines Group
                                                                            </option>
                                                                            <option value="JJ">
                                                                                LATAM Airlines Group
                                                                            </option>
                                                                            <option value="XL">
                                                                                LATAM Airlines Group
                                                                            </option>
                                                                            <option value="4M">
                                                                                LATAM Airlines Group
                                                                            </option>
                                                                            <option value="W4">LC Peru</option>
                                                                            <option value="LI">Liat</option>
                                                                            <option value="LO">
                                                                                LOT-Polish Airlines
                                                                            </option>
                                                                            <option value="LH">Lufthansa</option>
                                                                            <option value="LG">Luxair</option>
                                                                            <option value="MH">
                                                                                Malaysia Airlines
                                                                            </option>
                                                                            <option value="OD">Malindo Air</option>
                                                                            <option value="2M">
                                                                                Maya Island Air
                                                                            </option>
                                                                            <option value="7M">Mayair</option>
                                                                            <option value="OM">
                                                                                MIAT-Mongolian Airlines
                                                                            </option>
                                                                            <option value="ME">
                                                                                Middle East Airlines
                                                                            </option>
                                                                            <option value="YM">Montenegro</option>
                                                                            <option value="8M">
                                                                                Myanmar Airways International
                                                                            </option>
                                                                            <option value="NO">Neos S.P.A.</option>
                                                                            <option value="RA">
                                                                                Nepal Airlines
                                                                            </option>
                                                                            <option value="NP">Nile Air</option>
                                                                            <option value="W/">
                                                                                NokScoot with baggage
                                                                            </option>
                                                                            <option value="DN">
                                                                                Norwegian Air Argentina
                                                                            </option>
                                                                            <option value="D8">
                                                                                Norwegian Air International Ltd
                                                                            </option>
                                                                            <option value="DY">
                                                                                Norwegian Air Shuttle
                                                                            </option>
                                                                            <option value="DI">
                                                                                Norwegian Air UK
                                                                            </option>
                                                                            <option value="Y/">
                                                                                Olympic Air with baggage
                                                                            </option>
                                                                            <option value="WY">Oman Air</option>
                                                                            <option value="8Q">Onur Air</option>
                                                                            <option value="8P">
                                                                                Pacific Coastal Airlines
                                                                            </option>
                                                                            <option value="PK">
                                                                                Pakistan International Airlines
                                                                            </option>
                                                                            <option value="ZM">Pegasus Asia</option>
                                                                            <option value="KS">PenAir</option>
                                                                            <option value="PR">
                                                                                Philippine Airlines
                                                                            </option>
                                                                            <option value="PU">
                                                                                Plus Ultra Lineas Aereas S. A.
                                                                            </option>
                                                                            <option value="PD">
                                                                                Porter Airlines
                                                                            </option>
                                                                            <option value="PW">PrecisionAir</option>
                                                                            <option value="P0">
                                                                                Proflight Zambia
                                                                            </option>
                                                                            <option value="QF">
                                                                                Qantas Airways
                                                                            </option>
                                                                            <option value="QR">
                                                                                Qatar Airways
                                                                            </option>
                                                                            <option value="7H">Ravn Alaska</option>
                                                                            <option value="WZ">
                                                                                Red Wings Airlines
                                                                            </option>
                                                                            <option value="4P">Regional Sky</option>
                                                                            <option value="AT">
                                                                                Royal Air Maroc
                                                                            </option>
                                                                            <option value="BI">
                                                                                Royal Brunei Airlines
                                                                            </option>
                                                                            <option value="RJ">
                                                                                Royal Jordanian
                                                                            </option>
                                                                            <option value="WB">Rwandair</option>
                                                                            <option value="SK">SAS</option>
                                                                            <option value="S4">
                                                                                SATA International-Azores Airlines
                                                                                S.A.
                                                                            </option>
                                                                            <option value="SV">
                                                                                Saudi Arabian Airlines
                                                                            </option>
                                                                            <option value="/Y">
                                                                                Scoot with baggage
                                                                            </option>
                                                                            <option value="BB">
                                                                                Seaborne Airlines
                                                                            </option>
                                                                            <option value="SC">
                                                                                Shandong Airlines
                                                                            </option>
                                                                            <option value="3U">
                                                                                Sichuan Airlines
                                                                            </option>
                                                                            <option value="3M">
                                                                                Silver Airways
                                                                            </option>
                                                                            <option value="SQ">
                                                                                Singapore Airlines
                                                                            </option>
                                                                            <option value="H2">Sky Airlines</option>
                                                                            <option value="GQ">Sky Express</option>
                                                                            <option value="IE">
                                                                                Solomon Airlines
                                                                            </option>
                                                                            <option value="SA">
                                                                                South African Airways
                                                                            </option>
                                                                            <option value="9X">
                                                                                Southern Airways
                                                                            </option>
                                                                            <option value="NK">
                                                                                Spirit Airlines
                                                                            </option>
                                                                            <option value="UL">
                                                                                SriLankan Airlines
                                                                            </option>
                                                                            <option value="2I">STAR PERU</option>
                                                                            <option value="6G">
                                                                                Sun Air Express
                                                                            </option>
                                                                            <option value="SY">
                                                                                Sun Country Airlines
                                                                            </option>
                                                                            <option value="PY">
                                                                                Surinam Airways
                                                                            </option>
                                                                            <option value="LX">
                                                                                Swiss International Air Lines
                                                                            </option>
                                                                            <option value="WO">Swoop</option>
                                                                            <option value="DT">
                                                                                TAAG Angola Airlines
                                                                            </option>
                                                                            <option value="TA">
                                                                                TACA Airlines
                                                                            </option>
                                                                            <option value="VR">
                                                                                TACV-Cabo Verde Airlines
                                                                            </option>
                                                                            <option value="5U">TAG Airlines</option>
                                                                            <option value="EQ">Tame</option>
                                                                            <option value="TP">TAP Portugal</option>
                                                                            <option value="RO">
                                                                                Tarom-Romanian Air Transport
                                                                            </option>
                                                                            <option value="TG">
                                                                                Thai Airways International
                                                                            </option>
                                                                            <option value="MT">
                                                                                Thomas Cook Airlines
                                                                            </option>
                                                                            <option value="/X">
                                                                                Tigerair Australia with Bag
                                                                            </option>
                                                                            <option value="IT">
                                                                                Tigerair Taiwan
                                                                            </option>
                                                                            <option value="/Z">
                                                                                Tigerair Taiwan with bag
                                                                            </option>
                                                                            <option value="TJ">
                                                                                Tradewind Aviation
                                                                            </option>
                                                                            <option value="9N">Tropic Air</option>
                                                                            <option value="TB">TUI fly</option>
                                                                            <option value="TK">
                                                                                Turkish Airlines
                                                                            </option>
                                                                            <option value="PS">
                                                                                Ukraine International Airlines
                                                                            </option>
                                                                            <option value="UA">United</option>
                                                                            <option value="UT">
                                                                                Utair Aviation
                                                                            </option>
                                                                            <option value="HY">
                                                                                Uzbekistan Airways
                                                                            </option>
                                                                            <option value="VN">
                                                                                Vietnam Airlines
                                                                            </option>
                                                                            <option value="VX">
                                                                                Virgin America
                                                                            </option>
                                                                            <option value="VS">
                                                                                Virgin Atlantic
                                                                            </option>
                                                                            <option value="VA">
                                                                                Virgin Australia
                                                                            </option>
                                                                            <option value="V2">
                                                                                Vision Airlines
                                                                            </option>
                                                                            <option value="VB">Viva Aerobus</option>
                                                                            <option value="F1">
                                                                                Viva Air Colombia
                                                                            </option>
                                                                            <option value="VV">
                                                                                Viva Airlines Peru
                                                                            </option>
                                                                            <option value="Y4">Volaris</option>
                                                                            <option value="V7">Volotea</option>
                                                                            <option value="VY">
                                                                                Vueling Airlines
                                                                            </option>
                                                                            <option value="WS">WestJet</option>
                                                                            <option value="WM">
                                                                                Windward Island Airways International
                                                                            </option>
                                                                            <option value="MF">
                                                                                Xiamen Airlines
                                                                            </option>
                                                                            <option value="SE">XL Airways</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end advanced-wrap -->
                                        </div>
                                        <!-- end tab-pane -->
                                        <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                            aria-labelledby="multi-city-tab">
                                            <div class="contact-form-action multi-flight-field d-flex align-items-center">
                                                <form action="#" class="row flex-grow-1 align-items-center">
                                                    <div class="col-lg-6 pe-0">
                                                        <!-- Search Dropdown Widget -->
                                                        <div class="s-select-widget-group-single">
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying from</label>

                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>

                                                            <div class="select-widget-middle-icon">
                                                                <i class="la la-exchange"></i>
                                                            </div>
                                                            <!-- Search Select Widget -->
                                                            <div class="search-select-widget">
                                                                <label class="label-text">Flying to</label>
                                                                <!-- Select Main -->
                                                                <div class="search-select-input"
                                                                    onclick="activateSearch(this)">
                                                                    <div class="s-select-input-data">
                                                                        <div class="s-select-input-data-right">
                                                                            <span><i
                                                                                    class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                            <p>
                                                                                Bangladesh, Hazrat Shahjalal
                                                                                International Airport (DAC)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="search-input-field"
                                                                        placeholder="Search airports..."
                                                                        oninput="handleSearchInput(this)"
                                                                        onblur="deactivateSearch(this)" />
                                                                </div>

                                                                <!-- Select Dropdown -->
                                                                <div class="s-select-widget-dropdown" id="dropdown1">
                                                                    <div class="select-widget-dropdown-search"
                                                                        style="display: none">
                                                                        <i class="la la-search form-icon"></i>
                                                                        <input type="search" name="search"
                                                                            placeholder="Type to search"
                                                                            oninput="handleSearchInput(this)" />
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)" data-airport="Dhaka"
                                                                        data-details="Bangladesh, Hazrat Shahjalal International Airport (DAC)"
                                                                        data-code="DAC">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Dhaka</span>
                                                                                <p>
                                                                                    Bangladesh, Hazrat Shahjalal
                                                                                    International Airport (DAC)
                                                                                </p>
                                                                            </div>
                                                                            <h6>DAC</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-widget-dropdown-item"
                                                                        onclick="selectItem(this)"
                                                                        data-airport="Cox's Bazar"
                                                                        data-details="Cox's Bazar, Bangladesh"
                                                                        data-code="CXB">
                                                                        <div class="s-widget-dropdown-data">
                                                                            <div class="s-widget-dropdown-data-right">
                                                                                <span><i
                                                                                        class="la la-map-marker form-icon"></i>Cox's
                                                                                    Bazar</span>
                                                                                <p>Cox's Bazar, Bangladesh</p>
                                                                            </div>
                                                                            <h6>CXB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more dropdown items as needed -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Departing</label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input class="date-range form-control date-multi-picker"
                                                                    id="date" type="text"
                                                                    name="daterange-single" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Traveler</label>
                                                            <div class="form-group">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false"
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
                                                                                <label>Adults</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="adult_number"
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
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="child_number"
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
                                                                                <label>Infants</label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        name="infants_number"
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
                                                    <div class="col-lg-2">
                                                        <div class="input-box">
                                                            <label class="label-text">Class</label>
                                                            <div class="form-group select2-container-wrapper">
                                                                <div class="select-contain w-auto">
                                                                    <select class="select-contain-select">
                                                                        <option value="1" selected="">
                                                                            Economy
                                                                        </option>
                                                                        <option value="2">Business</option>
                                                                        <option value="3">First class</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="multi-flight-delete-wrap pt-3 ps-3">
                                                    <button class="multi-flight-remove" type="button">
                                                        <i class="la la-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 pe-0">
                                                    <div class="form-group">
                                                        <button class="theme-btn add-flight-btn w-100" type="button">
                                                            <i class="la la-plus me-1"></i>Add another
                                                            flight
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="hero-filter-search-btn">
                                                    <a href="flight-search-result.html"
                                                        class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab-pane -->
                                    </div>
                                </div>
                                <!-- end tab-pane -->
                                <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-3 pe-0">
                                                <div class="input-box">
                                                    <label class="label-text">Destination / Hotel name</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter city or property" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pe-0">
                                                <div class="input-box">
                                                    <label class="label-text">Check in</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text"
                                                            name="daterange-single" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pe-0">
                                                <div class="input-box">
                                                    <label class="label-text">Check out</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text"
                                                            name="daterange-single" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Guests and Rooms</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false" data-bs-auto-close="outside">
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

                                    <div class="hero-filter-search-btn">
                                        <a href="hotel-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div>

                                <!-- end tab-pane -->
                                <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-4 pe-0">
                                                <div class="input-box">
                                                    <label class="label-text">Where would like to go?</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text"
                                                            placeholder="Destination, city, or region" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4 pe-0">
                                                <div class="input-box">
                                                    <label class="label-text">From</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text"
                                                            name="daterange-single" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">To</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control" type="text"
                                                            name="daterange-single" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-4 -->
                                        </form>
                                    </div>
                                    <div class="advanced-wrap">
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                            data-bs-toggle="collapse" href="#collapseSeven" role="button"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Advanced search <i class="la la-angle-down ms-1"></i>
                                        </a>
                                        <div class="pt-3 collapse" id="collapseSeven">
                                            <div class="slider-range-wrap">
                                                <div class="price-slider-amount padding-bottom-20px">
                                                    <label for="amount" class="filter__label">Price Range</label>
                                                    <input type="text" id="amount" class="amounts" />
                                                </div>
                                                <!-- end price-slider-amount -->
                                                <div id="slider-range"></div>
                                                <!-- end slider-range -->
                                            </div>
                                            <!-- end slider-range-wrap -->
                                            <div class="checkbox-wrap padding-top-30px">
                                                <h3 class="title font-size-15 pb-3">
                                                    Tour Categories
                                                </h3>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb1" />
                                                    <label for="tourChb1">Active Adventure Tours</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb2" />
                                                    <label for="tourChb2">Ecotourism</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb3" />
                                                    <label for="tourChb3">Escorted Tours</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb4" />
                                                    <label for="tourChb4">Group Tours</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb5" />
                                                    <label for="tourChb5">Ligula</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb6" />
                                                    <label for="tourChb6">Family Tours</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb7" />
                                                    <label for="tourChb7">City Trips</label>
                                                </div>
                                                <div class="custom-checkbox d-inline-block me-4">
                                                    <input type="checkbox" class="form-check-input" id="tourChb8" />
                                                    <label for="tourChb8">National Parks Tours</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-filter-search-btn">
                                        <a href="tour-search-result.html" class="theme-btn">Search Now</a>
                                    </div>
                                </div>
                                <!-- end tab-pane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Filter  -->
    </section>
    <!-- End Hero Area  -->

    <!-- Start Offer Banner  -->
    <div class="offer-banner-area section-gap">
        <div class="container">
            <!-- <div class="row">
              <div class="review__client-info">
                <ul class="client-img-list">
                  <li>
                    <img src="images/review/img-1.png" alt="client-img" />
                  </li>
                  <li>
                    <img src="images/review/img-2.png" alt="client-img" />
                  </li>
                  <li>
                    <img src="images/review/img-3.png" alt="client-img" />
                  </li>
                </ul>
                <div class="trustpilot-info">
                  <div class="trustpilot-review">
                    <span>453+</span>
                    <img src="images/review/trustpilot.png" alt="trustpilot" />
                  </div>
                  <p class="text">We have positive reviews</p>
                </div>
              </div>
            </div> -->

            <div class="carousel-action offer-banner-slider">
                <!-- Single Slider -->
                <a href="pricing.html" class="offer-banner-item">
                    <img src="images/offer-banner/1.avif" alt="offer-banner" />
                </a>

                <!-- Single Slider -->
                <a href="pricing.html" class="offer-banner-item">
                    <img src="images/offer-banner/2.avif" alt="offer-banner" />
                </a>

                <!-- Single Slider -->
                <a href="pricing.html" class="offer-banner-item">
                    <img src="images/offer-banner/3.avif" alt="offer-banner" />
                </a>

                <!-- Single Slider -->
                <a href="pricing.html" class="offer-banner-item">
                    <img src="images/offer-banner/4.avif" alt="offer-banner" />
                </a>
            </div>
        </div>
    </div>
    <!-- End Offer Banner  -->

    <div class="section-block"></div>

    <!-- ================================
        START ROUND-TRIP AREA
    ================================= -->
    <section class="round-trip-flight section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme-section-head text-center mb-0">
                        <span> Destination </span>
                        <h3>
                            Most Popular Round-trip <br />
                            Flight Destinations
                        </h3>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-40px">
                <div class="col-lg-12">
                    <div class="flight-filter-tab text-center">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="new-york-tab" data-bs-toggle="tab"
                                        href="#new-york" role="tab" aria-controls="new-york"
                                        aria-selected="false">
                                        New York
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hong-kong-tab" data-bs-toggle="tab" href="#hong-kong"
                                        role="tab" aria-controls="hong-kong" aria-selected="false">
                                        Hong Kong
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="beijing-tab" data-bs-toggle="tab" href="#beijing"
                                        role="tab" aria-controls="beijing" aria-selected="false">
                                        Beijing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tokyo-tab" data-bs-toggle="tab" href="#tokyo"
                                        role="tab" aria-controls="tokyo" aria-selected="false">
                                        Tokyo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="seoul-tab" data-bs-toggle="tab" href="#seoul"
                                        role="tab" aria-controls="seoul" aria-selected="false">
                                        Seoul
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end section-tab -->
                    </div>
                    <!-- end flight-filter-tab -->
                    <div class="popular-round-trip-wrap padding-top-40px">
                        <div class="tab-content" id="myTabContent4">
                            <div class="tab-pane fade show active" id="new-york" role="tabpanel"
                                aria-labelledby="new-york-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>Los
                                                        Angeles
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>Barcelona
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$740</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>Dallas
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$140</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>San
                                                        Francisco
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>Miami
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$100</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        New York<i class="la la-exchange mx-2"></i>London
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$640</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                            <div class="tab-pane fade" id="hong-kong" role="tabpanel"
                                aria-labelledby="hong-kong-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Singapore
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Tokyo
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$740</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Seoul
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$140</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Manila
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Nepal
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$100</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Hong Kong<i class="la la-exchange mx-2"></i>Beijing
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$640</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                            <div class="tab-pane fade" id="seoul" role="tabpanel" aria-labelledby="seoul-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Nepal
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Taipei
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$740</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Beijing
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$140</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Tokyo
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Hong kong
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$100</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Seoul<i class="la la-exchange mx-2"></i>Bangkok
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$640</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                            <div class="tab-pane fade" id="tokyo" role="tabpanel" aria-labelledby="tokyo-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Taipei
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Taipei
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$740</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Beijing
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$140</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Tokyo
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Hong kong
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$100</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Tokyo<i class="la la-exchange mx-2"></i>Hanoi
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$640</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                            <div class="tab-pane fade" id="beijing" role="tabpanel" aria-labelledby="beijing-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Taipei
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img2.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Taipei
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$740</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img3.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Beijing
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$140</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img4.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Tokyo
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$340</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img5.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Hong
                                                        kong
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$100</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="images/airline-img6.png" alt="air-line-img" />
                                                <h3 class="deal__title">
                                                    <a href="flight-single.html" class="d-flex align-items-center">
                                                        Beijing<i class="la la-exchange mx-2"></i>Hanoi
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                                            <div
                                                class="deal-action-box d-flex align-items-center justify-content-between">
                                                <div class="price-box d-flex align-items-center">
                                                    <span class="price__from me-1">From</span><span
                                                        class="price__num">$640</span>
                                                </div>
                                                <a href="flight-single.html" class="btn-text">See details<i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- end deal-card -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                            </div>
                            <!-- end tab-pane -->
                        </div>
                        <!-- end tab-content -->
                        <div class="tab-content-info d-flex justify-content-between align-items-center">
                            <p class="font-size-15">
                                <i class="la la-question-circle me-1"></i>Average round-trip
                                price per person, taxes and fees included.
                            </p>
                            <a href="#" class="btn-text font-size-15">Discover More <i
                                    class="la la-angle-right"></i></a>
                        </div>
                        <!-- end tab-content-info -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end round-trip-flight -->
    <!-- ================================
        END ROUND-TRIP AREA
    ================================= -->

    <!-- ================================
        START HOTEL AREA
    ================================= -->
    <section class="hotel-area home-hotel section-bg section-gap overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme-section-head text-center mb-0">
                        <span> Popular Deals </span>
                        <h3>
                            Most Popular Hotel <br />
                            Destinations
                        </h3>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-40px">
                <div class="col-lg-12">
                    <div class="hotel-card-wrap">
                        <div class="hotel-card-carousel carousel-action">
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img1.jpg" alt="hotel-img" />
                                    </a>
                                    <span class="badge">Bestseller</span>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">The Millennium Hilton New York</a>
                                    </h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img2.jpg" alt="hotel-img" />
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Best Western Grant Park Hotel</a>
                                    </h3>
                                    <p class="card-meta">124 E Huron St, Chicago</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$58.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img3.jpg" alt="hotel-img" />
                                    </a>
                                    <span class="badge">Featured</span>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Hyatt Regency Maui Resort & Spa</a>
                                    </h3>
                                    <p class="card-meta">200 Nohea Kai Dr, Lahaina, HI</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img4.jpg" alt="hotel-img" />
                                    </a>
                                    <span class="badge">Popular</span>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Four Seasons Resort Maui at Wailea</a>
                                    </h3>
                                    <p class="card-meta">3900 Wailea Alanui Drive, Kihei, HI</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img" />
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Ibis Styles London Heathrow</a>
                                    </h3>
                                    <p class="card-meta">272 Bath Road, Harlington, England</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img6.jpg" alt="hotel-img" />
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Hotel Europe Saint Severin Paris</a>
                                    </h3>
                                    <p class="card-meta">
                                        38-40 Rue Saint Séverin, Paris, Paris
                                    </p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img1.jpg" alt="hotel-img" />
                                    </a>
                                    <span class="badge">Bestseller</span>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">The Millennium Hilton New York</a>
                                    </h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$88.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                            <div class="card-item">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img2.jpg" alt="hotel-img" />
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                        data-placement="top" title="Bookmark">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="hotel-single.html">Best Western Grant Park Hotel</a>
                                    </h3>
                                    <p class="card-meta">124 E Huron St, Chicago</p>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$58.00</span>
                                            <span class="price__text">Per night</span>
                                        </p>
                                        <a href="hotel-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-item -->
                        </div>
                        <!-- end hotel-card-carousel -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- end hotel-area -->
    <!-- ================================
        END HOTEL AREA
    ================================= -->

    <!-- ================================
        START DESTINATION AREA
    ================================= -->
    <section class="destination-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2 class="sec__title">Top Visited Places</h2>
                        <p class="sec__desc pt-3">
                            Morbi convallis bibendum urna ut viverra Maecenas quis
                        </p>
                    </div>

                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="btn-box btn--box text-end">
                        <a href="{{ url('/destinations') }}" class="theme-btn">Discover More</a>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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

    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->
    <section class="testimonial-area section-bg section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">
                            What our customers are saying us?
                        </h2>
                        <p class="sec__desc padding-top-30px">
                            Morbi convallis bibendum urna ut viverra. Maecenas quis
                            consequat libero
                        </p>
                        <div class="btn-box padding-top-35px">
                            <a href="#" class="theme-btn">Explore All</a>
                        </div>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident. Occaecat cupidatat non proident des.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Leroy Bell</h4>
                                    <span class="author__meta">United States</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident. Occaecat cupidatat non proident des.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team9.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Richard Pam</h4>
                                    <span class="author__meta">Canada</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident. Occaecat cupidatat non proident des.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team10.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Luke Jacobs</h4>
                                    <span class="author__meta">Australia</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat
                                    non proident. Occaecat cupidatat non proident des.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Chulbul Panday</h4>
                                    <span class="author__meta">Italy</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                    </div>
                    <!-- end testimonial-carousel -->
                </div>
                <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial-area -->
    <!-- ================================
           START TESTIMONIAL AREA
    ================================= -->

    <!-- ================================
        START MOBILE AREA
    ================================= -->
    <section class="download-area section-gap pb-0">
        <div class="container">
            <div class="download-bg" style="background-image: url('images/mobile-app/bg-img.jpeg')">
                <div class="download-right-side">
                    <div class="download-wrapper">
                        <div class="download-content">
                            <div class="section-title-wrapper">
                                <span class="section-subtitle">Download Now!</span>
                                <h2 class="section-title">
                                    Get 20% off your Best App Tour booking
                                </h2>
                                <p class="white-text">
                                    Booking better on the app. Use promo code “Tourigo”
                                </p>
                            </div>
                            <h6 class="download-btn-title">
                                Get a magic link sent to your email
                            </h6>
                            <div class="download-btn-wrap">
                                <div class="download-btn-single">
                                    <a target="_blank" href="https://play.google.com/">
                                        <img src="images/mobile-app/play-store.svg" alt="google-play" />
                                    </a>
                                </div>
                                <div class="download-btn-single">
                                    <a target="_blank" href="https://www.apple.com/app-store/">
                                        <img src="images/mobile-app/app-store.svg" alt="google-play" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="download-left-side">
                    <div class="download-thumb-wrap">
                        <div class="download-thumb">
                            <img src="images/mobile-app/app-mockup.png" alt="app-mockup" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================
        END MOBILE AREA
    ================================= -->

    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->
    <section class="clientlogo-area section-gap text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="clientlogo-title">Trusted By 200+ Global Brands</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <img src="images/clients/company-img1.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/clients/company-img2.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/clients/company-img3.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/clients/company-img4.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/clients/company-img5.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/clients/company-img4.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                    </div>
                    <!-- end client-logo -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clientlogo-area -->
    <!-- ================================
           START CLIENTLOGO AREA
    ================================= -->

    <!-- Start Why Choose  -->
    <section class="why-choose-area section-gap section-bg">
        <div class="container">
            <div class="why-choose-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="why-choose-content">
                            <div class="theme-section-head">
                                <span> Why Choose Us </span>
                                <h3>We Make Travel Easy & Memorable</h3>
                            </div>
                            <div class="why-choose-card-wrapper">
                                <!-- Single Card  -->
                                <div class="why-choose-card">
                                    <div class="why-choose-icon">
                                        <img src="images/why-choose/icon-1.svg" alt="icon-1" />
                                    </div>
                                    <div class="why-choose-card-content">
                                        <h4 class="why-choose-title">Expertly Experiences</h4>
                                        <p class="why-choose-text">
                                            We specialize in journeys that blend comfort culture
                                        </p>
                                    </div>
                                </div>

                                <!-- Single Card  -->
                                <div class="why-choose-card">
                                    <div class="why-choose-icon">
                                        <img src="images/why-choose/icon-2.svg" alt="icon-1" />
                                    </div>
                                    <div class="why-choose-card-content">
                                        <h4 class="why-choose-title">Seamless Travel Plan</h4>
                                        <p class="why-choose-text">
                                            We make the entire process smooth and stress-free
                                        </p>
                                    </div>
                                </div>

                                <!-- Single Card  -->
                                <div class="why-choose-card">
                                    <div class="why-choose-icon">
                                        <img src="images/why-choose/icon-3.svg" alt="icon-1" />
                                    </div>
                                    <div class="why-choose-card-content">
                                        <h4 class="why-choose-title">All-Inclusive Packages</h4>

                                        <p class="why-choose-text">
                                            From flights accommodation sightseeing and activities
                                        </p>
                                    </div>
                                </div>

                                <!-- Single Card  -->
                                <div class="why-choose-card">
                                    <div class="why-choose-icon">
                                        <img src="images/why-choose/icon-4.svg" alt="icon-1" />
                                    </div>
                                    <div class="why-choose-card-content">
                                        <h4 class="why-choose-title">
                                            Passionate Quality Travel
                                        </h4>
                                        <p class="why-choose-text">
                                            We are genuinely dedicated turning dream vacation
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="why-choose-images">
                            <div class="why-choose-img">
                                <img src="images/why-choose/why-choose-img.png" alt="why-choose-img" />
                            </div>
                            <!-- <div class="why-choose-element">
                      <img
                        class="element element-1 updown-ani"
                        src="images/why-choose/element-1.png"
                        alt="element"
                      />
                      <img
                        class="element element-2 updown-ani"
                        src="images/why-choose/element-2.png"
                        alt="element"
                      />
                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose  -->

    <!-- Start Blog Area -->
    <section class="blog section-gap position-relative">
        <div class="container bx-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6 col-12">
                    <div class="theme-section-head text-center">
                        <span> Our News & Blog </span>
                        <h3>Blog For Travel Updates</h3>
                    </div>
                </div>
            </div>

            <div class="blog__wrapper">
                <div class="featured-blog">
                    <!-- Single Blog  -->
                    <div class="blog__card">
                        <div class="blog__cover">
                            <img src="images/blog/1.png" alt="blog" />
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <a href="blog-sidebar.html" class="category">TRAVEL</a>
                                <span class="date">APRIL 26, 2025</span>
                            </div>
                            <a class="title m-0" href="blog-single.html">He Art of Adventure Exploring Uncharted
                                Destinations</a>
                            <div class="blog__content-btn">
                                <a href="blog-single.html">Read More<i class="la la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-list">
                    <!-- Single Blog  -->
                    <div class="blog__card">
                        <div class="blog__cover">
                            <img src="images/blog/2.png" alt="blog" />
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <a href="blog-sidebar.html" class="category">WELLNESS</a>
                                <span class="date">JUNE 09, 2025</span>
                            </div>
                            <a class="title" href="blog-single.html">Mind Matters Navigating Mental Wellness in Today's
                                World</a>
                            <div class="blog__content-btn">
                                <a href="blog-single.html">Read More<i class="la la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog  -->
                    <div class="blog__card">
                        <div class="blog__cover">
                            <img src="images/blog/3.png" alt="blog" />
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <a href="blog-sidebar.html" class="category">TRIPS</a>
                                <span class="date">JANUARY 26, 2025</span>
                            </div>
                            <a class="title" href="blog-single.html">Roaming Routes Adventures in Every Corner of the
                                World
                            </a>
                            <div class="blog__content-btn">
                                <a href="blog-single.html">Read More<i class="la la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-bottom">
                <a href="blog-sidebar.html" class="theme-btn">View More</a>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection

@section('scripts')
    <script type="text/javascript">
        var activeDropdownId = null;
        let currentSearchWidget = null;
        let focusedIndex = -1;

        // New function for activating search mode
        function activateSearch(inputElement) {
            // Close any other active search
            if (currentSearchWidget && currentSearchWidget !== inputElement) {
                const otherSearchField = currentSearchWidget.querySelector(
                    ".search-input-field"
                );
                const otherResultsContainer =
                    currentSearchWidget.parentElement.querySelector(
                        ".s-select-widget-dropdown"
                    );
                currentSearchWidget.classList.remove("search-mode");
                otherResultsContainer.classList.remove("active");
            }

            // Reset state and activate current widget
            currentSearchWidget = inputElement;
            focusedIndex = -1;

            inputElement.classList.add("search-mode");

            const searchField = inputElement.querySelector(".search-input-field");
            const resultsContainer = inputElement.parentElement.querySelector(
                ".s-select-widget-dropdown"
            );

            // Clear previous search and show all results
            searchField.value = "";
            showAllResults(resultsContainer);
            resultsContainer.classList.add("active");
            activeDropdownId = resultsContainer.id;

            // Focus on the input field
            setTimeout(() => {
                searchField.focus();
            }, 100);
        }

        function deactivateSearch(searchField) {
            // Only deactivate if it's actually blurred (not when selecting with keyboard)
            setTimeout(() => {
                // Check if the search field is still focused or if we're in the middle of selection
                if (document.activeElement !== searchField && currentSearchWidget) {
                    const inputElement = searchField.parentElement;
                    const resultsContainer = inputElement.parentElement.querySelector(
                        ".s-select-widget-dropdown"
                    );

                    inputElement.classList.remove("search-mode");
                    resultsContainer.classList.remove("active");
                    currentSearchWidget = null;
                    focusedIndex = -1;
                    activeDropdownId = null;
                }
            }, 150);
        }

        function showAllResults(resultsContainer) {
            const items = resultsContainer.querySelectorAll(
                ".s-widget-dropdown-item"
            );
            items.forEach((item) => {
                item.style.display = "block";
                item.classList.remove("focused");
            });

            const noResultsMsg = resultsContainer.querySelector(".no-results");
            if (noResultsMsg) {
                noResultsMsg.style.display = "none";
            }
        }

        function toggleDropdown(element, dropdownId) {
            // This function is kept for compatibility but now redirects to activateSearch
            activateSearch(element);
        }

        function selectItem(item) {
            const widget = item.closest(".search-select-widget");
            const inputBox = widget.querySelector(".s-select-input-data");
            const selectedItemData = item.querySelector(
                ".s-widget-dropdown-data-right"
            ).innerHTML;
            const inputElement = widget.querySelector(".search-select-input");
            const searchField = inputElement.querySelector(".search-input-field");

            inputBox.innerHTML =
                '<div class="s-select-input-data-right">' +
                selectedItemData +
                "</div>";

            // Hide the h6 tag when an item is selected
            var relatedH6 = item.parentElement.parentElement.querySelector("h6");
            if (relatedH6) {
                relatedH6.style.display = "none";
            }

            // Clear search field
            searchField.value = "";
            searchField.blur();

            // Deactivate search mode
            inputElement.classList.remove("search-mode");
            item.parentElement.classList.remove("active");

            // Reset state properly
            currentSearchWidget = null;
            focusedIndex = -1;
            activeDropdownId = null;

            // Remove any focus from search field
            setTimeout(() => {
                if (document.activeElement === searchField) {
                    searchField.blur();
                }
            }, 50);

            // Reset the search input for all other dropdowns
            var allDropdowns = document.querySelectorAll(
                ".s-select-widget-dropdown"
            );
            allDropdowns.forEach(function(otherDropdown) {
                var searchInput = otherDropdown.querySelector("input[name='search']");
                if (searchInput) {
                    searchInput.value = ""; // Clear the search input
                    filterDropdown("", otherDropdown); // Reset search results
                }
            });
        }

        function filterDropdown(keyword, dropdown) {
            var items = dropdown.querySelectorAll(".s-widget-dropdown-item");
            keyword = keyword.toLowerCase();
            let visibleCount = 0;

            items.forEach(function(item) {
                const airport = item.dataset.airport ?
                    item.dataset.airport.toLowerCase() :
                    "";
                const details = item.dataset.details ?
                    item.dataset.details.toLowerCase() :
                    "";
                const code = item.dataset.code ? item.dataset.code.toLowerCase() : "";
                var itemData = item
                    .querySelector(".s-widget-dropdown-data")
                    .textContent.toLowerCase();

                const isMatch =
                    itemData.includes(keyword) ||
                    airport.includes(keyword) ||
                    details.includes(keyword) ||
                    code.includes(keyword);

                if (isMatch) {
                    item.style.display = "block";
                    item.classList.remove("focused");
                    visibleCount++;
                } else {
                    item.style.display = "none";
                }
            });

            // Show/hide no results message
            let noResultsMsg = dropdown.querySelector(".no-results");
            if (visibleCount === 0 && keyword.length > 0) {
                if (!noResultsMsg) {
                    noResultsMsg = document.createElement("div");
                    noResultsMsg.className = "no-results";
                    noResultsMsg.textContent = "No airports found";
                    dropdown.appendChild(noResultsMsg);
                }
                noResultsMsg.style.display = "block";
            } else if (noResultsMsg) {
                noResultsMsg.style.display = "none";
            }
        }

        // Add this function for real-time filtering as the user types
        function handleSearchInput(inputElement) {
            var searchValue = inputElement.value;
            let dropdown;

            if (inputElement.classList.contains("search-input-field")) {
                // New search field
                dropdown = inputElement
                    .closest(".search-select-widget")
                    .querySelector(".s-select-widget-dropdown");
            } else {
                // Original search field
                dropdown = document.getElementById(activeDropdownId);
            }

            if (dropdown) {
                filterDropdown(searchValue, dropdown);
            }
        }

        // Keyboard navigation
        document.addEventListener("keydown", function(event) {
            if (currentSearchWidget) {
                const resultsContainer =
                    currentSearchWidget.parentElement.querySelector(
                        ".s-select-widget-dropdown"
                    );
                const visibleItems = Array.from(
                    resultsContainer.querySelectorAll(".s-widget-dropdown-item")
                ).filter((item) => item.style.display !== "none");

                if (event.key === "ArrowDown") {
                    event.preventDefault();
                    focusedIndex = Math.min(focusedIndex + 1, visibleItems.length - 1);
                    updateFocus(visibleItems);
                } else if (event.key === "ArrowUp") {
                    event.preventDefault();
                    focusedIndex = Math.max(focusedIndex - 1, -1);
                    updateFocus(visibleItems);
                } else if (event.key === "Enter") {
                    event.preventDefault();
                    if (focusedIndex >= 0 && visibleItems[focusedIndex]) {
                        selectItem(visibleItems[focusedIndex]);
                        // Ensure the search field loses focus completely
                        const searchField = currentSearchWidget.querySelector(
                            ".search-input-field"
                        );
                        searchField.blur();
                    }
                } else if (event.key === "Escape") {
                    event.preventDefault();
                    const searchField = currentSearchWidget.querySelector(
                        ".search-input-field"
                    );
                    // Force close
                    const inputElement = searchField.parentElement;
                    const resultsContainer = inputElement.parentElement.querySelector(
                        ".s-select-widget-dropdown"
                    );

                    inputElement.classList.remove("search-mode");
                    resultsContainer.classList.remove("active");
                    currentSearchWidget = null;
                    focusedIndex = -1;
                    activeDropdownId = null;
                    searchField.blur();
                }
            }
        });

        function updateFocus(visibleItems) {
            visibleItems.forEach((item, index) => {
                if (index === focusedIndex) {
                    item.classList.add("focused");
                    item.scrollIntoView({
                        block: "nearest"
                    });
                } else {
                    item.classList.remove("focused");
                }
            });
        }

        // Click outside to close
        document.addEventListener("click", function(event) {
            if (
                currentSearchWidget &&
                !event.target.closest(".search-select-widget")
            ) {
                const searchField = currentSearchWidget.querySelector(
                    ".search-input-field"
                );
                deactivateSearch(searchField);
            }
        });
    </script>
@endsection
