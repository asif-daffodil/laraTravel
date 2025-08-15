@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Flight Booking')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-6">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Flight Booking</h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html">Home</a></li>
                                <li>Flight Booking</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
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
        START BOOKING AREA
    ================================= -->
    <section class="flight-booking-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12 col-xl-8 col-12">
                            <div class="flight-booking-main">
                                <div class="flight-booking-main-accordion">
                                    <div class="accordion" id="accordionExample">
                                        <!-- Single Flight Details Item -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    DAC-CXB
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="flight-detail-section accordion-body" style="border: none">
                                                    <div class="flight-airlines-info">
                                                        <div class="airplane-info-wrapper">
                                                            <div class="airplane-info">
                                                                <div class="image-placeholder">
                                                                    <img src="images/airline-img7.png" alt="#" />
                                                                </div>
                                                                <div class="airplane-info-text">
                                                                    <span class="airplane-name">
                                                                        US Bangla
                                                                    </span>
                                                                    <span class="airplane-model">
                                                                        2A 443 | AT7
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="airplane-amenities">
                                                                <span class="flight-type">(Economy)</span>
                                                            </div>
                                                        </div>
                                                        <div class="flight-time detail-time">
                                                            <div class="start-time">
                                                                <span class="time-text"> 11:15 </span>
                                                                <span class="day-text">
                                                                    Mon, 29 Jan, 2024
                                                                </span>
                                                                <span class="destination-text"> DAC </span>
                                                            </div>
                                                            <div class="stops-info">
                                                                <div class="arrow-pointer"></div>
                                                                <div class="stop-names">
                                                                    <span class="duration-text"></span>
                                                                </div>
                                                            </div>
                                                            <div class="end-time">
                                                                <span class="time-text"> 12:20 </span>
                                                                <span class="day-text">
                                                                    Mon, 29 Jan, 2024
                                                                </span>
                                                                <span class="destination-text">CXB</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Single Flight Details Item -->
                                                    <div class="rules-section-item">
                                                        <h2 class="rules-section-header">
                                                            Flight Details
                                                        </h2>
                                                        <div class="rules-section-inner">
                                                            <div class="rules-section-tab">
                                                                <!-- Tab Menu -->
                                                                <div class="tab-menu">
                                                                    <div class="list-group" id="list-tab" role="tablist">
                                                                        <a class="list-group-item active"
                                                                            data-bs-toggle="list" href="#flightTab1"
                                                                            role="tab" aria-selected="true">
                                                                            Baggage
                                                                        </a>
                                                                        <a class="list-group-item" data-bs-toggle="list"
                                                                            href="#flightTab2" role="tab"
                                                                            aria-selected="false" tabindex="-1">
                                                                            Fare
                                                                        </a>
                                                                        <a class="list-group-item" data-bs-toggle="list"
                                                                            href="#flightTab3" role="tab"
                                                                            aria-selected="false" tabindex="-1">
                                                                            Policy
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- Tab Details -->
                                                                <div class="tab-details">
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <!-- Tab One -->
                                                                        <div class="tab-pane fade show active"
                                                                            id="flightTab1" role="tabpanel">
                                                                            <div class="rules-content">
                                                                                <div class="baggage-info">
                                                                                    <div class="baggage-header-info">
                                                                                        <span
                                                                                            class="header-text">Flight</span>
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
                                                                                                DAC - CXB
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
                                                                                        <span
                                                                                            class="header-text text-center">Base
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
                                                                                                BDT 4,724
                                                                                            </span>
                                                                                            <span class="check-in-baggage">
                                                                                                BDT 975
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
                                                                                    <h6>DAC-CXB</h6>
                                                                                </div>

                                                                                <div class="fare-rule-content">
                                                                                    <div class="item-header">
                                                                                        <span>Cancellation</span>
                                                                                    </div>
                                                                                    <div class="fee-content">
                                                                                        <span>
                                                                                            Cancellation Fee = Airline's Fee
                                                                                            + OTA PlatformFee
                                                                                        </span><span>Refund Amount = Paid
                                                                                            Amount -
                                                                                            Cancellation Fee</span>
                                                                                    </div>
                                                                                    <div class="item-header">
                                                                                        <span>Re-issue</span>
                                                                                    </div>
                                                                                    <div class="fee-content">
                                                                                        <span>
                                                                                            Re-issue Fee = Airline's Fee +
                                                                                            Fare Difference + OTA Platform
                                                                                            Fee
                                                                                        </span>
                                                                                    </div>
                                                                                    <span class="cancellation-note">
                                                                                        *The airline's fee is indicative
                                                                                        and per person. Convenience fee is
                                                                                        non-refundable.
                                                                                    </span>
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
                                        </div>

                                        <!-- Single Flight Details Item -->
                                        <div class="accordion-item">
                                            <h4 class="accordion-item-title">
                                                Enter Traveller Details
                                            </h4>
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    Passenger 1
                                                    <strong>Adult</strong>
                                                    <span>Primary Contact </span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="flight-personal-details accordion-body">
                                                    <form action="#" method="post" id="bookingForm">
                                                        <div class="flight-p-details-widget">
                                                            <h4>Personal Details</h4>
                                                            <span>
                                                                <i class="icofont-info-circle"></i>
                                                                As mentioned on your passport or government
                                                                approved IDs
                                                            </span>
                                                            <div class="flight-p-details-head-gender">
                                                                <span>Select Title</span>
                                                                <div class="personal-gender-group">
                                                                    <div class="single-personal-gender">
                                                                        <input type="radio" class="btn-check"
                                                                            name="title" id="btn-check-mr"
                                                                            value="Mr." autocomplete="off" />
                                                                        <label class="btn"
                                                                            for="btn-check-mr">MR.</label>
                                                                    </div>
                                                                    <div class="single-personal-gender">
                                                                        <input type="radio" class="btn-check"
                                                                            name="title" id="btn-check-ms"
                                                                            value="Ms." autocomplete="off" />
                                                                        <label class="btn"
                                                                            for="btn-check-ms">MS.</label>
                                                                    </div>
                                                                    <div class="single-personal-gender">
                                                                        <input type="radio" class="btn-check"
                                                                            name="title" id="btn-check-mrs"
                                                                            value="Mrs." autocomplete="off" />
                                                                        <label class="btn"
                                                                            for="btn-check-mrs">MRS.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flight-personal-details-form">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Given Name / First Name</label>
                                                                            <input type="text" name="firstName"
                                                                                placeholder="John" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Last Name</label>
                                                                            <input type="text" name="lastName"
                                                                                placeholder="Due" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Nationality </label>
                                                                            <input id="nationality" name="nationality"
                                                                                type="text" placeholder="Bangladesh" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Frequent Flyer Number (Optional)
                                                                            </label>
                                                                            <input type="text" name="frequentFlyer"
                                                                                placeholder="e.g., 1234 5678 9012" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flight-p-details-widget">
                                                            <h4>Contact Details</h4>
                                                            <span>
                                                                <i class="icofont-info-circle"></i>
                                                                Receive booking confirmation & updates
                                                            </span>
                                                            <div class="flight-personal-details-form">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="email" name="email"
                                                                                placeholder="johndue@gmail.com" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Phone Number</label>
                                                                            <input id="phone" name="phone"
                                                                                type="tel"
                                                                                placeholder="+8801XXXXXXXXX"
                                                                                value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end form-box -->
                            <div class="form-box" style="margin-top: 40px">
                                <div class="form-title-wrap">
                                    <h3 class="title">Select Payment Method</h3>
                                </div>
                                <!-- form-title-wrap -->
                                <div class="form-content">
                                    <div class="section-tab check-mark-tab text-center pb-4">
                                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="credit-card-tab" data-bs-toggle="tab"
                                                    href="#credit-card" role="tab" aria-controls="credit-card"
                                                    aria-selected="true">
                                                    <i class="la la-check icon-element"></i>
                                                    <img src="images/payment-img.png" alt="" />
                                                    <span class="d-block pt-2">Payment with credit card</span>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="paypal-tab" data-bs-toggle="tab" href="#paypal"
                                                    role="tab" aria-controls="paypal" aria-selected="false"
                                                    tabindex="-1">
                                                    <i class="la la-check icon-element"></i>
                                                    <img src="images/paypal.png" alt="" />
                                                    <span class="d-block pt-2">Payment with PayPal</span>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="payoneer-tab" data-bs-toggle="tab"
                                                    href="#payoneer" role="tab" aria-controls="payoneer"
                                                    aria-selected="false" tabindex="-1">
                                                    <i class="la la-check icon-element"></i>
                                                    <img src="images/payoneer.png" alt="" />
                                                    <span class="d-block pt-2">Payment with payoneer</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end section-tab -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="credit-card" role="tabpanel"
                                            aria-labelledby="credit-card-tab">
                                            <div class="contact-form-action">
                                                <form method="post" id="paymentForm">
                                                    <div class="row">
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Card Holder Name</label>
                                                                <div class="form-group">
                                                                    <span class="la la-credit-card form-icon"></span>
                                                                    <input class="form-control" type="text"
                                                                        name="cardHolderName"
                                                                        placeholder="Card holder name" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Card Number</label>
                                                                <div class="form-group">
                                                                    <span class="la la-credit-card form-icon"></span>
                                                                    <input class="form-control" type="text"
                                                                        name="cardNumber" placeholder="Card number"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 responsive-column">
                                                                    <div class="input-box">
                                                                        <label class="label-text">Expiry Month</label>
                                                                        <div class="form-group">
                                                                            <span
                                                                                class="la la-credit-card form-icon"></span>
                                                                            <input class="form-control" type="text"
                                                                                name="expiryMonth" placeholder="MM"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 responsive-column">
                                                                    <div class="input-box">
                                                                        <label class="label-text">Expiry Year</label>
                                                                        <div class="form-group">
                                                                            <span
                                                                                class="la la-credit-card form-icon"></span>
                                                                            <input class="form-control" type="text"
                                                                                name="expiryYear" placeholder="YY"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="input-box">
                                                                <label class="label-text">CVV</label>
                                                                <div class="form-group">
                                                                    <span class="la la-pencil form-icon"></span>
                                                                    <input class="form-control" type="text"
                                                                        name="cvv" placeholder="CVV" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="input-box">
                                                                <div class="form-group">
                                                                    <div class="custom-checkbox">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="agreechb" required />
                                                                        <label for="agreechb">By continuing, you agree to
                                                                            the
                                                                            <a href="#">Terms and
                                                                                Conditions</a>.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-12 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="button"
                                                                    id="confirmBookingBtn">
                                                                    Confirm Booking
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-12 -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end contact-form-action -->
                                        </div>
                                        <!-- end tab-pane-->
                                        <div class="tab-pane fade" id="paypal" role="tabpanel"
                                            aria-labelledby="paypal-tab">
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Email Address</label>
                                                                <div class="form-group">
                                                                    <span class="la la-envelope form-icon"></span>
                                                                    <input class="form-control" type="email"
                                                                        name="email"
                                                                        placeholder="Enter email address" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Password</label>
                                                                <div class="form-group">
                                                                    <span class="la la-lock form-icon"></span>
                                                                    <input class="form-control" type="text"
                                                                        name="text" placeholder="Enter password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">
                                                                    Login Account
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-12 -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end contact-form-action -->
                                        </div>
                                        <!-- end tab-pane-->
                                        <div class="tab-pane fade" id="payoneer" role="tabpanel"
                                            aria-labelledby="payoneer-tab">
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Email Address</label>
                                                                <div class="form-group">
                                                                    <span class="la la-envelope form-icon"></span>
                                                                    <input class="form-control" type="email"
                                                                        name="email"
                                                                        placeholder="Enter email address" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-6 responsive-column">
                                                            <div class="input-box">
                                                                <label class="label-text">Password</label>
                                                                <div class="form-group">
                                                                    <span class="la la-lock form-icon"></span>
                                                                    <input class="form-control" type="text"
                                                                        name="text" placeholder="Enter password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit">
                                                                    Login Account
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end col-lg-12 -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end contact-form-action -->
                                        </div>
                                        <!-- end tab-pane-->
                                    </div>
                                    <!-- end tab-content -->
                                </div>
                                <!-- end form-content -->
                            </div>
                            <!-- end form-box -->
                        </div>
                        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                            <div class="flight-booking-sidebar">
                                <div class="flight-timer">
                                    <div class="timer-container">
                                        <div class="timer-text">
                                            <span> Book now before tickets run out! </span>
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
                                <div class="fare-wrapper">
                                    <div class="fare-box">
                                        <div class="fare-header">
                                            <div class="wrapper">
                                                <div class="img-placeholder">
                                                    <img src="images/airline-img7.png" alt="#" />
                                                </div>
                                                <div class="header-summary">
                                                    <div class="fare-type">
                                                        <i class="icofont-airplane-alt"></i>
                                                        <span>Flight</span>
                                                    </div>
                                                    <span class="name"> DAC - CXB </span>
                                                    <span class="subtitle">One Way</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fare-info">
                                            <div class="fare-info-header">Fare Summary</div>
                                            <div class="fare-content">
                                                <div class="fare-info-content">
                                                    <div class="passenger-items">
                                                        <span class="passenger-type">
                                                            Adult (1 traveler)
                                                        </span>
                                                    </div>
                                                    <div class="fare-item">
                                                        <span class="fare">Base Fare</span>
                                                        <span class="fare-price">
                                                            <span class="sm-text">BDT</span>
                                                            <span class="lg-text"> 4,724 </span>
                                                        </span>
                                                    </div>
                                                    <div class="fare-item">
                                                        <span class="fare">Tax</span>
                                                        <span class="fare-price">
                                                            <span class="sm-text">BDT</span>
                                                            <span class="lg-text"> 975 </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fare-breakdown">
                                            <div class="fare-content">
                                                <div class="fare-info-content">
                                                    <div class="fare-item">
                                                        <span class="fare">Sub-Total</span>
                                                        <span class="fare-price">
                                                            <span class="sm-text">BDT</span>
                                                            <span class="lg-text"> 5,699 </span>
                                                        </span>
                                                    </div>
                                                    <div class="fare-item">
                                                        <span class="fare">
                                                            <span>Hot Deals</span>
                                                            <span class="promo-code">DOMB0124</span>
                                                        </span>
                                                        <span class="fare-price discount">
                                                            <span class="material-icons">
                                                                <i class="icofont-minus-circle"></i>
                                                            </span>
                                                            <span class="sm-text">BDT</span>
                                                            <span class="lg-text"> 330 </span>
                                                        </span>
                                                    </div>
                                                    <div class="fare-item">
                                                        <span class="fare"> Convenience Charge </span>
                                                        <span class="fare-price">
                                                            <span class="material-icons">
                                                                <i class="icofont-plus-circle"></i>
                                                            </span>
                                                            <span class="sm-text">BDT</span>
                                                            <span class="lg-text"> 113 </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-price">
                                        <div class="price-wrapper">
                                            <div>
                                                <span class="text-blue">You Pay</span><span class="subtext-grey"> (for 1
                                                    Traveler) </span>
                                            </div>
                                            <span class="text-blue price"><span class="sm-text">BDT</span><span
                                                    class="lg-text"> 5,482 </span></span>
                                        </div>
                                        <div class="price-wrapper savings">
                                            <div><span class="text-green">You Save</span></div>
                                            <span class="text-green"><span class="sm-text">BDT</span><span
                                                    class="lg-text"> 330 </span></span>
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
        END BOOKING AREA
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
