@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Flight Search Result')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-6">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="search-result-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Flight Search Result</h2>
                            </div>
                            <div class="search-fields-container margin-top-30px">
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
                                                            <label class="label-text">Coach</label>
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
                                                            class="theme-btn w-100 text-center margin-top-20px">Modify
                                                            Search</a>
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
                                                            <label class="label-text">Coach</label>
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
                                                            class="theme-btn w-100 text-center margin-top-20px">Modify
                                                            Search</a>
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
                                                            <label class="label-text">Coach</label>
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
                                                        class="theme-btn w-100 text-center margin-top-20px">Modify
                                                        Search</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab-pane -->
                                    </div>
                                </div>
                            </div>
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
        End Flight Filter AREA
    ================================= -->
    <section class="flight-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="f-filter-result">
                        <div class="f-filter-result-header">
                            <!-- Flight Filter Header Visible -->
                            <div class="f-filter-result-header-visible">
                                <div class="f-filter-result-header-visible-inner">
                                    <div class="f-filter-result-header-visible-left">
                                        <div class="filter-title">
                                            <i class="la la-filter"></i>
                                            <span>Filters</span>
                                        </div>
                                        <div class="filter-stop-visible">
                                            <span>Stops</span>
                                            <div class="f-stop-visible-group">
                                                <div class="single-visible-block">
                                                    <input type="checkbox" class="btn-check" name="options-base"
                                                        id="btn-check-outlined" autocomplete="off" />
                                                    <label class="btn" for="btn-check-outlined">0</label>
                                                </div>
                                                <div class="single-visible-block">
                                                    <input type="checkbox" class="btn-check" name="options-base"
                                                        id="btn-check-outlined1" autocomplete="off" />
                                                    <label class="btn" for="btn-check-outlined1">1</label>
                                                </div>
                                                <div class="single-visible-block">
                                                    <input type="checkbox" class="btn-check" name="options-base"
                                                        id="btn-check-outlined2" autocomplete="off" />
                                                    <label class="btn" for="btn-check-outlined2">2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-filter-switch form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitch" />
                                            <label class="form-check-label" for="flexSwitch">
                                                Partially Refundable
                                            </label>
                                        </div>
                                    </div>
                                    <div class="f-filter-result-header-visible-right">
                                        <!-- Filter Results Collapse Show Button -->
                                        <div class="filter-result-collapse-btn">
                                            <button type="button">
                                                More Filters<i class="la la-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Flight Filter Header Hidden -->
                            <div class="f-result-collapse-header-hidden">
                                <div class="f-result-collapse-header-hidden-inner">
                                    <p>Showing <span>13</span> Flight Results</p>
                                    <div class="f-result-collapse-h-hidden-button">
                                        <button type="button" class="collapse-close-btn">
                                            Close
                                        </button>
                                        <button type="button" class="collapse-reset-btn">
                                            Reset All Filters
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Filter Results Collapse Show -->
                        <div class="f-filter-result-collapse-show">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="filter-search-result-group">
                                        <!-- Single Search Result Widget -->
                                        <div class="f-search-result-widget">
                                            <h4>Stops</h4>
                                            <div class="filter-stop-visible">
                                                <div class="f-stop-visible-group">
                                                    <div class="single-visible-block">
                                                        <input type="checkbox" class="btn-check" name="options-base"
                                                            id="btn-check-outlined3" autocomplete="off" />
                                                        <label class="btn" for="btn-check-outlined3">0</label>
                                                    </div>
                                                    <div class="single-visible-block">
                                                        <input type="checkbox" class="btn-check" name="options-base"
                                                            id="btn-check-outlined4" autocomplete="off" />
                                                        <label class="btn" for="btn-check-outlined4">1</label>
                                                    </div>
                                                    <div class="single-visible-block">
                                                        <input type="checkbox" class="btn-check" name="options-base"
                                                            id="btn-check-outlined5" autocomplete="off" />
                                                        <label class="btn" for="btn-check-outlined5">2</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Search Result Widget -->
                                        <div class="f-search-result-widget">
                                            <h4>Fare Type:</h4>
                                            <div class="toggle-filter-switch form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitch1" />
                                                <label class="form-check-label" for="flexSwitch1">
                                                    Partially Refundable
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Single Search Result Widget -->
                                        <div class="f-search-result-widget">
                                            <h4>Price Range</h4>
                                            <div class="slider-range-wrap">
                                                <div class="price-slider-amount padding-bottom-20px">
                                                    <input type="text" id="amount" class="amounts" />
                                                </div>
                                                <!-- end price-slider-amount -->
                                                <div id="slider-range"></div>
                                                <!-- end slider-range -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="filter-search-result-group">
                                        <!-- Single Search Result Widget -->
                                        <div class="f-search-result-widget">
                                            <h4>Schedule</h4>
                                            <div class="f-search-result-schedule">
                                                <p>Onward Depart Time</p>
                                                <div class="f-search-result-schedule-group">
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined6"
                                                            autocomplete="off" />
                                                        <label class="btn btn-outline-primary" for="btn-check-outlined6">
                                                            <i class="la la-sun"></i>00-06</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined7"
                                                            autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined7"><i
                                                                class="la la-sun"></i>06-12</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined8"
                                                            autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined8"><i
                                                                class="la la-sun"></i>12-18</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined9"
                                                            autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined9"><i
                                                                class="la la-sun"></i>18-00</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="f-search-result-schedule">
                                                <p>Layover Time</p>
                                                <div class="f-search-result-schedule-group">
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check"
                                                            id="btn-check-outlined10" autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined10">0h - 5h</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check"
                                                            id="btn-check-outlined11" autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined11">5h - 10h</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check"
                                                            id="btn-check-outlined12" autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined12">10h - 15h</label>
                                                    </div>
                                                    <div class="f-search-result-schedule-list">
                                                        <input type="checkbox" class="btn-check"
                                                            id="btn-check-outlined13" autocomplete="off" />
                                                        <label class="btn btn-outline-primary"
                                                            for="btn-check-outlined13">15h+</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="f-search-result-widget">
                                        <h4>Airlines</h4>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        Delta
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        Biman Bangladesh Airlines
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        Delta
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        NOVOAIR
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <div class="f-search-result-widget">
                                        <h4>Aircraft</h4>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        AT7
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        ATR725
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <label class="d-flex items-center">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" />
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10" style="cursor: pointer">
                                                        DH8
                                                    </div>
                                                </label>
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
    </section>
    <!-- ================================
        Start Flight Filter AREA
    ================================= -->

    <!-- ================================
        Start Flight List AREA
    ================================= -->
    <section class="flight-list-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-9 col-12">
                    <div class="flight-sorting">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-flight-sorting">
                                    <input type="radio" class="btn-check" name="options-base"
                                        id="btn-check-outlined14" autocomplete="off" />
                                    <label class="btn" for="btn-check-outlined14">Cheapest<span>
                                            Showing the cheapest flights in ascending order
                                        </span></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-flight-sorting">
                                    <input type="radio" class="btn-check" name="options-base"
                                        id="btn-check-outlined15" autocomplete="off" />
                                    <label class="btn" for="btn-check-outlined15">Fastest<span>
                                            Showing the fastest flights in ascending order
                                        </span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Single Airline - Flight 1: BS 325 -->
                            <div class="flight-card">
                                <div class="flight-airlines-wrapper">
                                    <div class="airline-info-container">
                                        <div class="flight-airlines-info">
                                            <div class="airplane-info">
                                                <div class="image-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="airplane-info-text">
                                                    <span class="airplane-name">Bangladesh Biman</span>
                                                    <!-- NEW: Carrier code -->
                                                    <span class="carrier-code">BS</span>
                                                </div>
                                            </div>
                                            <div class="flight-time-widget">
                                                <div class="start-time">
                                                    <span class="time-text">10:20 PM</span>
                                                    <span class="destination-text">DAC</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 1</span>
                                                </div>
                                                <div class="stops-info">
                                                    <div class="stop-numbers">
                                                        <span>Non-stop</span>
                                                    </div>
                                                    <div class="arrow-pointer"></div>

                                                    <div class="flight-duration-text">
                                                        <span>3h 30m</span>
                                                        <!-- NEW: Aircraft type -->
                                                        <span class="aircraft-type">738</span>
                                                    </div>
                                                </div>
                                                <div class="end-time">
                                                    <span class="time-text">03:50 AM</span>
                                                    <span class="destination-text">CAN</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 1</span>
                                                    <!-- NEW: Next day indicator -->
                                                    <span class="next-day">+1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-info-wrapper">
                                        <div class="price-texts">
                                            <!-- NEW: Source info -->
                                            <span class="discount-info">GDS</span>
                                            <div class="price-texts-group">
                                                <!-- NEW: Base fare -->
                                                <span class="actual-price">BDT 26,131</span>
                                                <!-- NEW: Base fare breakdown -->
                                                <span class="discount-price">Base: BDT 15,372</span>
                                            </div>
                                        </div>
                                        <a href="flight-booking.html" class="selection-btn">
                                            Select<i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="flight-details-wrapper accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                aria-expanded="false" aria-controls="collapse1">
                                                Flight Details
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse"
                                            aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                            <div class="detail-accordion">
                                                <div class="flight-detail-section">
                                                    <h4>Flight Details</h4>
                                                    <div class="flight-tab">
                                                        <ul class="flight-tab-wrapper">
                                                            <li class="active">DAC - CAN</li>
                                                        </ul>
                                                    </div>
                                                    <div class="flight-airlines-info">
                                                        <div class="airplane-info-wrapper">
                                                            <div class="airplane-info">
                                                                <div class="image-placeholder">
                                                                    <img src="images/airline-img7.png" alt="#" />
                                                                </div>
                                                                <div class="airplane-info-text">
                                                                    <span class="airplane-name">Bangladesh Biman</span>
                                                                    <span class="airplane-model">
                                                                        BS 325 | 738
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="airplane-amenities">
                                                                <span class="flight-type">(Economy)</span>
                                                            </div>
                                                        </div>
                                                        <div class="flight-time detail-time">
                                                            <div class="start-time">
                                                                <span class="time-text">10:20 PM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">DAC - Hazrat Shahjalal Intl
                                                                    Airport</span>
                                                                <!-- NEW: Terminal detail -->
                                                                <span class="terminal-detail">Terminal 1</span>
                                                            </div>
                                                            <div class="stops-info">
                                                                <div class="arrow-pointer"></div>
                                                                <div class="stop-names">
                                                                    <span class="duration-text">3h 30m</span>
                                                                </div>
                                                            </div>
                                                            <div class="end-time">
                                                                <span class="time-text">03:50 AM</span>
                                                                <span class="day-text">
                                                                    17th August 2025
                                                                </span>
                                                                <span class="destination-text">CAN - Baiyun Airport</span>
                                                                <!-- NEW: Terminal detail -->
                                                                <span class="terminal-detail">Terminal 1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rules-section">
                                                    <div class="rules-section-tab">
                                                        <!-- Tab Menu -->
                                                        <div class="tab-menu">
                                                            <div class="list-group" id="list-tab" role="tablist">
                                                                <a class="list-group-item active" data-bs-toggle="list"
                                                                    href="#flightTab1" role="tab">
                                                                    Baggage
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab2" role="tab">
                                                                    Fare
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab3" role="tab">
                                                                    Policy
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <!-- Tab Details -->
                                                        <div class="tab-details">
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <!-- Tab One -->
                                                                <div class="tab-pane fade show active" id="flightTab1"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Flight</span>
                                                                                <span
                                                                                    class="header-text text-center">Cabin</span>
                                                                                <span
                                                                                    class="header-text text-end">Check-in</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        DAC - CAN
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        7 Kg
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        20 Kg
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Two -->
                                                                <div class="tab-pane fade" id="flightTab2"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Fare
                                                                                    Summary</span>
                                                                                <span class="header-text text-center">Base
                                                                                    Fare</span>
                                                                                <span
                                                                                    class="header-text text-end">Tax</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Adult x 1
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 15,372
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        BDT 11,881
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- NEW: Commission info -->
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Commission
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 1,122
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        -
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Three -->
                                                                <div class="tab-pane fade" id="flightTab3"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="fare-rule-header">
                                                                            <h6>DAC-CAN</h6>
                                                                        </div>

                                                                        <div class="fare-rule-content">
                                                                            <div class="item-header">
                                                                                <span>Cancellation</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Cancellation Fee = Airline's Fee +
                                                                                    OTA PlatformFee </span><span>Refund
                                                                                    Amount = Paid Amount -
                                                                                    Cancellation Fee</span>
                                                                            </div>
                                                                            <div class="item-header">
                                                                                <span>Re-issue</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Re-issue Fee = Airline's Fee + Fare
                                                                                    Difference + OTA Platform Fee
                                                                                </span>
                                                                            </div>
                                                                            <span class="cancellation-note">
                                                                                *The airline's fee is indicative and
                                                                                per person. Convenience fee is
                                                                                non-refundable.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-price">
                                                        <div class="price-wrapper">
                                                            <div class="price-main">
                                                                <span class="text-blue">Total</span>
                                                                <span class="subtext-grey">
                                                                    (1 Traveler)
                                                                </span>
                                                            </div>
                                                            <div class="price-main-right">
                                                                <span>BDT 26,131</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Airline - Flight 2: TG 340 + TG 668 -->
                            <div class="flight-card">
                                <div class="flight-airlines-wrapper">
                                    <div class="airline-info-container">
                                        <div class="flight-airlines-info">
                                            <div class="airplane-info">
                                                <div class="image-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="airplane-info-text">
                                                    <span class="airplane-name">Thai Airways</span>
                                                    <!-- NEW: Carrier code -->
                                                    <span class="carrier-code">TG</span>
                                                </div>
                                            </div>
                                            <div class="flight-time-widget">
                                                <div class="start-time">
                                                    <span class="time-text">02:45 AM</span>
                                                    <span class="destination-text">DAC</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                </div>
                                                <div class="stops-info">
                                                    <div class="stop-numbers">
                                                        <span>1 Stop</span>
                                                        <!-- NEW: Layover info -->
                                                        <span class="layover-info">4h 25m BKK</span>
                                                    </div>
                                                    <div class="arrow-pointer"></div>
                                                    <div class="flight-duration-text">
                                                        <span>9h 45m</span>
                                                        <!-- NEW: Aircraft types -->
                                                        <span class="aircraft-type">320+333</span>
                                                    </div>
                                                </div>
                                                <div class="end-time">
                                                    <span class="time-text">02:30 PM</span>
                                                    <span class="destination-text">CAN</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-info-wrapper">
                                        <div class="price-texts">
                                            <!-- NEW: Source info -->
                                            <span class="discount-info">GDS</span>
                                            <div class="price-texts-group">
                                                <span class="actual-price">BDT 29,114</span>
                                                <!-- NEW: Base fare -->
                                                <span class="discount-price">Base: BDT 16,836</span>
                                            </div>
                                        </div>
                                        <a href="flight-booking.html" class="selection-btn">
                                            Select<i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="flight-details-wrapper accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                                Flight Details
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse"
                                            aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                            <div class="detail-accordion">
                                                <div class="flight-detail-section">
                                                    <h4>Flight Details</h4>
                                                    <div class="flight-tab">
                                                        <ul class="flight-tab-wrapper">
                                                            <li class="active">DAC - BKK - CAN</li>
                                                        </ul>
                                                    </div>
                                                    <!-- NEW: First Segment -->
                                                    <div class="flight-airlines-info">
                                                        <div class="airplane-info-wrapper">
                                                            <div class="airplane-info">
                                                                <div class="image-placeholder">
                                                                    <img src="images/airline-img7.png" alt="#" />
                                                                </div>
                                                                <div class="airplane-info-text">
                                                                    <span class="airplane-name">Thai Airways</span>
                                                                    <span class="airplane-model">
                                                                        TG 340 | 320
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="airplane-amenities">
                                                                <span class="flight-type">(Economy)</span>
                                                            </div>
                                                        </div>
                                                        <div class="flight-time detail-time">
                                                            <div class="start-time">
                                                                <span class="time-text">02:45 AM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">DAC - Hazrat Shahjalal Intl
                                                                    Airport</span>
                                                                <span class="terminal-detail">Terminal 2</span>
                                                            </div>
                                                            <div class="stops-info">
                                                                <div class="arrow-pointer"></div>
                                                                <div class="stop-names">
                                                                    <span class="duration-text">2h 30m</span>
                                                                </div>
                                                            </div>
                                                            <div class="end-time">
                                                                <span class="time-text">06:15 AM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">BKK - Suvarnabhumi Intl
                                                                    Arpt</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- NEW: Second Segment -->
                                                    <div class="flight-airlines-info">
                                                        <div class="airplane-info-wrapper">
                                                            <div class="airplane-info">
                                                                <div class="image-placeholder">
                                                                    <img src="images/airline-img7.png" alt="#" />
                                                                </div>
                                                                <div class="airplane-info-text">
                                                                    <span class="airplane-name">Thai Airways</span>
                                                                    <span class="airplane-model">
                                                                        TG 668 | 333
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="airplane-amenities">
                                                                <span class="flight-type">(Economy)</span>
                                                            </div>
                                                        </div>
                                                        <div class="flight-time detail-time">
                                                            <div class="start-time">
                                                                <span class="time-text">10:40 AM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">BKK - Suvarnabhumi Intl
                                                                    Arpt</span>
                                                            </div>
                                                            <div class="stops-info">
                                                                <div class="arrow-pointer"></div>
                                                                <div class="stop-names">
                                                                    <span class="duration-text">2h 50m</span>
                                                                </div>
                                                            </div>
                                                            <div class="end-time">
                                                                <span class="time-text">02:30 PM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">CAN - Baiyun Airport</span>
                                                                <span class="terminal-detail">Terminal 2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rules-section">
                                                    <div class="rules-section-tab">
                                                        <!-- Tab Menu -->
                                                        <div class="tab-menu">
                                                            <div class="list-group" id="list-tab" role="tablist">
                                                                <a class="list-group-item active" data-bs-toggle="list"
                                                                    href="#flightTab1" role="tab">
                                                                    Baggage
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab2" role="tab">
                                                                    Fare
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab3" role="tab">
                                                                    Policy
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <!-- Tab Details -->
                                                        <div class="tab-details">
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <!-- Tab One -->
                                                                <div class="tab-pane fade show active" id="flightTab1"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Flight</span>
                                                                                <span
                                                                                    class="header-text text-center">Cabin</span>
                                                                                <span
                                                                                    class="header-text text-end">Check-in</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        DAC - BKK
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        7 Kg
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        20 Kg
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        BKK - CAN
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        7 Kg
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        20 Kg
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Two -->
                                                                <div class="tab-pane fade" id="flightTab2"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Fare
                                                                                    Summary</span>
                                                                                <span class="header-text text-center">Base
                                                                                    Fare</span>
                                                                                <span
                                                                                    class="header-text text-end">Tax</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Adult x 1
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 16,836
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        BDT 13,288
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- NEW: Commission info -->
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Commission
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 1,010
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        -
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Three -->
                                                                <div class="tab-pane fade" id="flightTab3"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="fare-rule-header">
                                                                            <h6>DAC-CAN</h6>
                                                                        </div>

                                                                        <div class="fare-rule-content">
                                                                            <div class="item-header">
                                                                                <span>Cancellation</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Cancellation Fee = Airline's Fee +
                                                                                    OTA PlatformFee </span><span>Refund
                                                                                    Amount = Paid Amount -
                                                                                    Cancellation Fee</span>
                                                                            </div>
                                                                            <div class="item-header">
                                                                                <span>Re-issue</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Re-issue Fee = Airline's Fee + Fare
                                                                                    Difference + OTA Platform Fee
                                                                                </span>
                                                                            </div>
                                                                            <span class="cancellation-note">
                                                                                *The airline's fee is indicative and
                                                                                per person. Convenience fee is
                                                                                non-refundable.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-price">
                                                        <div class="price-wrapper">
                                                            <div class="price-main">
                                                                <span class="text-blue">Total</span>
                                                                <span class="subtext-grey">
                                                                    (1 Traveler)
                                                                </span>
                                                            </div>
                                                            <div class="price-main-right">
                                                                <span>BDT 29,114</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Airline - Flight 3: CZ 392 -->
                            <div class="flight-card">
                                <div class="flight-airlines-wrapper">
                                    <div class="airline-info-container">
                                        <div class="flight-airlines-info">
                                            <div class="airplane-info">
                                                <div class="image-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="airplane-info-text">
                                                    <span class="airplane-name">China Southern</span>
                                                    <!-- NEW: Carrier code -->
                                                    <span class="carrier-code">CZ</span>
                                                </div>
                                            </div>
                                            <div class="flight-time-widget">
                                                <div class="start-time">
                                                    <span class="time-text">11:15 PM</span>
                                                    <span class="destination-text">DAC</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 1</span>
                                                </div>
                                                <div class="stops-info">
                                                    <div class="stop-numbers">
                                                        <span>Non-stop</span>
                                                    </div>
                                                    <div class="arrow-pointer"></div>
                                                    <div class="flight-duration-text">
                                                        <span>3h 45m</span>
                                                        <!-- NEW: Aircraft type -->
                                                        <span class="aircraft-type">32Q</span>
                                                    </div>
                                                </div>
                                                <div class="end-time">
                                                    <span class="time-text">05:00 AM</span>
                                                    <span class="destination-text">CAN</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                    <!-- NEW: Next day indicator -->
                                                    <span class="next-day">+1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-info-wrapper">
                                        <div class="price-texts">
                                            <!-- NEW: Source info -->
                                            <span class="discount-info">GDS</span>
                                            <div class="price-texts-group">
                                                <span class="actual-price">BDT 30,681</span>
                                                <!-- NEW: Base fare -->
                                                <span class="discount-price">Base: BDT 12,150</span>
                                            </div>
                                        </div>
                                        <a href="flight-booking.html" class="selection-btn">
                                            Select<i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="flight-details-wrapper accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                                Flight Details
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                            <div class="detail-accordion">
                                                <div class="flight-detail-section">
                                                    <h4>Flight Details</h4>
                                                    <div class="flight-tab">
                                                        <ul class="flight-tab-wrapper">
                                                            <li class="active">DAC - CAN</li>
                                                        </ul>
                                                    </div>
                                                    <div class="flight-airlines-info">
                                                        <div class="airplane-info-wrapper">
                                                            <div class="airplane-info">
                                                                <div class="image-placeholder">
                                                                    <img src="images/airline-img7.png" alt="#" />
                                                                </div>
                                                                <div class="airplane-info-text">
                                                                    <span class="airplane-name">China Southern</span>
                                                                    <span class="airplane-model">
                                                                        CZ 392 | 32Q
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="airplane-amenities">
                                                                <span class="flight-type">(Economy)</span>
                                                            </div>
                                                        </div>
                                                        <div class="flight-time detail-time">
                                                            <div class="start-time">
                                                                <span class="time-text">11:15 PM</span>
                                                                <span class="day-text">
                                                                    16th August 2025
                                                                </span>
                                                                <span class="destination-text">DAC - Hazrat Shahjalal Intl
                                                                    Airport</span>
                                                                <span class="terminal-detail">Terminal 1</span>
                                                            </div>
                                                            <div class="stops-info">
                                                                <div class="arrow-pointer"></div>
                                                                <div class="stop-names">
                                                                    <span class="duration-text">3h 45m</span>
                                                                </div>
                                                            </div>
                                                            <div class="end-time">
                                                                <span class="time-text">05:00 AM</span>
                                                                <span class="day-text">
                                                                    17th August 2025
                                                                </span>
                                                                <span class="destination-text">CAN - Baiyun Airport</span>
                                                                <span class="terminal-detail">Terminal 2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rules-section">
                                                    <div class="rules-section-tab">
                                                        <!-- Tab Menu -->
                                                        <div class="tab-menu">
                                                            <div class="list-group" id="list-tab" role="tablist">
                                                                <a class="list-group-item active" data-bs-toggle="list"
                                                                    href="#flightTab1" role="tab">
                                                                    Baggage
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab2" role="tab">
                                                                    Fare
                                                                </a>
                                                                <a class="list-group-item" data-bs-toggle="list"
                                                                    href="#flightTab3" role="tab">
                                                                    Policy
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <!-- Tab Details -->
                                                        <div class="tab-details">
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <!-- Tab One -->
                                                                <div class="tab-pane fade show active" id="flightTab1"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Flight</span>
                                                                                <span
                                                                                    class="header-text text-center">Cabin</span>
                                                                                <span
                                                                                    class="header-text text-end">Check-in</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        DAC - CAN
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        7 Kg
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        20 Kg
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Two -->
                                                                <div class="tab-pane fade" id="flightTab2"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="baggage-info">
                                                                            <div class="baggage-header-info">
                                                                                <span class="header-text">Fare
                                                                                    Summary</span>
                                                                                <span class="header-text text-center">Base
                                                                                    Fare</span>
                                                                                <span
                                                                                    class="header-text text-end">Tax</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-content">
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Adult x 1
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 12,150
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        BDT 19,139
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- NEW: Commission info -->
                                                                            <div class="content-item">
                                                                                <div class="content-item-text">
                                                                                    <span class="segment-loc">
                                                                                        Commission
                                                                                    </span>
                                                                                    <span class="baggage-weight">
                                                                                        BDT 608
                                                                                    </span>
                                                                                    <span class="check-in-baggage">
                                                                                        -
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Tab Three -->
                                                                <div class="tab-pane fade" id="flightTab3"
                                                                    role="tabpanel">
                                                                    <div class="rules-content">
                                                                        <div class="fare-rule-header">
                                                                            <h6>DAC-CAN</h6>
                                                                        </div>

                                                                        <div class="fare-rule-content">
                                                                            <div class="item-header">
                                                                                <span>Cancellation</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Cancellation Fee = Airline's Fee +
                                                                                    OTA PlatformFee </span><span>Refund
                                                                                    Amount = Paid Amount -
                                                                                    Cancellation Fee</span>
                                                                            </div>
                                                                            <div class="item-header">
                                                                                <span>Re-issue</span>
                                                                            </div>
                                                                            <div class="fee-content">
                                                                                <span>
                                                                                    Re-issue Fee = Airline's Fee + Fare
                                                                                    Difference + OTA Platform Fee
                                                                                </span>
                                                                            </div>
                                                                            <span class="cancellation-note">
                                                                                *The airline's fee is indicative and
                                                                                per person. Convenience fee is
                                                                                non-refundable.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-price">
                                                        <div class="price-wrapper">
                                                            <div class="price-main">
                                                                <span class="text-blue">Total</span>
                                                                <span class="subtext-grey">
                                                                    (1 Traveler)
                                                                </span>
                                                            </div>
                                                            <div class="price-main-right">
                                                                <span>BDT 30,681</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Airline - Flight 4: TG Long Layover -->
                            <div class="flight-card">
                                <div class="flight-airlines-wrapper">
                                    <div class="airline-info-container">
                                        <div class="flight-airlines-info">
                                            <div class="airplane-info">
                                                <div class="image-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="airplane-info-text">
                                                    <span class="airplane-name">Thai Airways</span>
                                                    <!-- NEW: Carrier code -->
                                                    <span class="carrier-code">TG</span>
                                                </div>
                                            </div>
                                            <div class="flight-time-widget">
                                                <div class="start-time">
                                                    <span class="time-text">01:35 PM</span>
                                                    <span class="destination-text">DAC</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                </div>
                                                <div class="stops-info">
                                                    <div class="stop-numbers">
                                                        <span>1 Stop</span>
                                                        <!-- NEW: Long layover warning -->
                                                        <span class="layover-info long-layover">17h 40m BKK</span>
                                                    </div>
                                                    <div class="arrow-pointer"></div>
                                                    <div class="flight-duration-text">
                                                        <span>22h 55m</span>
                                                        <!-- NEW: Aircraft types -->
                                                        <span class="aircraft-type">333+333</span>
                                                    </div>
                                                </div>
                                                <div class="end-time">
                                                    <span class="time-text">02:30 PM</span>
                                                    <span class="destination-text">CAN</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                    <!-- NEW: Next day indicator -->
                                                    <span class="next-day">+1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-info-wrapper">
                                        <div class="price-texts">
                                            <!-- NEW: Source info -->
                                            <span class="discount-info">GDS</span>
                                            <div class="price-texts-group">
                                                <span class="actual-price">BDT 31,967</span>
                                                <!-- NEW: Base fare -->
                                                <span class="discount-price">Base: BDT 16,836</span>
                                            </div>
                                        </div>
                                        <a href="flight-booking.html" class="selection-btn">
                                            Select<i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Airline - Flight 5: CZ 5016 -->
                            <div class="flight-card">
                                <div class="flight-airlines-wrapper">
                                    <div class="airline-info-container">
                                        <div class="flight-airlines-info">
                                            <div class="airplane-info">
                                                <div class="image-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="airplane-info-text">
                                                    <span class="airplane-name">China Southern</span>
                                                    <!-- NEW: Carrier code -->
                                                    <span class="carrier-code">CZ</span>
                                                </div>
                                            </div>
                                            <div class="flight-time-widget">
                                                <div class="start-time">
                                                    <span class="time-text">01:15 PM</span>
                                                    <span class="destination-text">DAC</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 1</span>
                                                </div>
                                                <div class="stops-info">
                                                    <div class="stop-numbers">
                                                        <span>Non-stop</span>
                                                    </div>
                                                    <div class="arrow-pointer"></div>
                                                    <div class="flight-duration-text">
                                                        <span>3h 45m</span>
                                                        <!-- NEW: Aircraft type -->
                                                        <span class="aircraft-type">32Q</span>
                                                    </div>
                                                </div>
                                                <div class="end-time">
                                                    <span class="time-text">07:00 PM</span>
                                                    <span class="destination-text">CAN</span>
                                                    <!-- NEW: Terminal info -->
                                                    <span class="terminal-info">Terminal 2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-info-wrapper">
                                        <div class="price-texts">
                                            <!-- NEW: Source info -->
                                            <span class="discount-info">GDS</span>
                                            <div class="price-texts-group">
                                                <span class="actual-price">BDT 32,420</span>
                                                <!-- NEW: Base fare -->
                                                <span class="discount-price">Base: BDT 13,980</span>
                                            </div>
                                        </div>
                                        <a href="flight-booking.html" class="selection-btn">
                                            Select<i class="la la-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                    <div class="flight-list-sidebar">
                        <div class="flight-timer">
                            <div class="timer-container">
                                <div class="timer-text">
                                    <div class="timer-number">
                                        <i class="la la-clock"></i>
                                        <div class="timer-value">
                                            <div>
                                                <p id="minutes">40</p>
                                                <span>min</span>
                                            </div>
                                            <div>
                                                <p id="seconds">00</p>
                                                <span>sec</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="support-card-wrapper">
                            <div class="support-header-text">
                                <span>Need Help?</span>
                            </div>
                            <div class="support-card-body">
                                <div class="support-content">
                                    <i class="la la-headphones"></i>
                                    <a href="tel: +88 09678 332211"> +88 09678 332211 </a>
                                </div>
                                <div class="support-content">
                                    <i class="la la-facebook"></i>
                                    <a href="#">fb/TravelVela</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================
        End Flight List AREA
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
