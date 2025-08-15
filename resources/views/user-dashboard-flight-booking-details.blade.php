@extends('layouts.user', ['title' => 'User Dashboard'])
@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    My Booking
                                </h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>My Booking</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="title">Flight Booking Details</h3>
                                        <p class="font-size-14">Showing 1 to 7 of 17 entries</p>
                                    </div>
                                    <span>Total Bookings
                                        <strong class="color-text">(17)</strong></span>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="booking-details">
                                            <div class="accordion" id="accordionExample">
                                                <!-- Single Accordion  -->
                                                <div class="accordion-item booking-details-widget">
                                                    <div class="accordion-header" id="headingOne">
                                                        <button class="accordion-button section-header" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <div class="section-icon">1</div>
                                                            <div class="section-title">
                                                                Flight Details
                                                            </div>
                                                            <div class="section-reference">
                                                                Booking Reference: 1747905264ulUAk
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="section-content">
                                                            <!-- ADDED: Booking Status and Contact Info -->
                                                            <div class="booking-info-grid">
                                                                <div class="booking-info-item">
                                                                    <div class="info-label">Booking Date</div>
                                                                    <div class="info-value">22 May, 2025</div>
                                                                </div>
                                                                <div class="booking-info-item">
                                                                    <div class="info-label">
                                                                        Contact Email
                                                                    </div>
                                                                    <div class="info-value">
                                                                        test@gmail.com
                                                                    </div>
                                                                </div>
                                                                <div class="booking-info-item">
                                                                    <div class="info-label">
                                                                        Contact Phone
                                                                    </div>
                                                                    <div class="info-value">01755441100</div>
                                                                </div>
                                                                <div class="booking-info-item">
                                                                    <div class="info-label">Trip Type</div>
                                                                    <div class="info-value">One Way</div>
                                                                </div>
                                                            </div>

                                                            <div class="flight-info">
                                                                <div class="flight-info-head">
                                                                    <div class="flight-info-head-content">
                                                                        <h2 class="airline-name">Air India</h2>
                                                                        <div class="flight-number">
                                                                            Flight: AI238
                                                                        </div>
                                                                        <!-- ADDED: Aircraft Type -->
                                                                        <div class="aircraft-type">
                                                                            Aircraft: 32A
                                                                        </div>
                                                                    </div>
                                                                    <img src="https://placehold.co/120x90" alt="Air India"
                                                                        class="airline-image" />
                                                                </div>

                                                                <div class="flight-details">
                                                                    <div class="flight-route">
                                                                        <div class="route-point">
                                                                            <div class="airport-code">DAC</div>
                                                                            <div class="airport-city">Dhaka</div>
                                                                            <!-- ADDED: Full Airport Name and Terminal -->
                                                                            <div class="airport-name">
                                                                                Hazrat Shahjalal Intl Arpt
                                                                            </div>
                                                                            <div class="terminal-info">
                                                                                Terminal 2
                                                                            </div>
                                                                        </div>
                                                                        <div class="route-arrow">→</div>
                                                                        <div class="route-point">
                                                                            <div class="airport-code">DEL</div>
                                                                            <div class="airport-city">Delhi</div>
                                                                            <!-- ADDED: Full Airport Name and Terminal -->
                                                                            <div class="airport-name">
                                                                                Delhi Indira Gandhi Intl
                                                                            </div>
                                                                            <div class="terminal-info">
                                                                                Terminal 3
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dates-container">
                                                                        <div class="date-block">
                                                                            <div class="date-label">
                                                                                Departure
                                                                            </div>
                                                                            <div class="date-value">
                                                                                30 Oct, 2024
                                                                            </div>
                                                                            <div class="date-day">
                                                                                Wednesday, 09:00 PM
                                                                            </div>
                                                                        </div>
                                                                        <div class="flight-duration">
                                                                            2h 50m
                                                                        </div>
                                                                        <div class="date-block text-right">
                                                                            <div class="date-label">Arrival</div>
                                                                            <div class="date-value">
                                                                                30 Oct, 2024
                                                                            </div>
                                                                            <div class="date-day">
                                                                                Wednesday, 11:20 PM
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="class-info">
                                                                        <span class="class-icon">✈️</span>
                                                                        <span class="class-type">Economy Class</span>
                                                                        <span class="fare-type">• Partially
                                                                            Refundable</span>
                                                                    </div>

                                                                    <div class="baggage-info">
                                                                        <div class="baggage-item">
                                                                            <span class="baggage-icon">💼</span>
                                                                            <span>Cabin: 7 kg</span>
                                                                        </div>
                                                                        <div class="baggage-item">
                                                                            <span class="baggage-icon">🧳</span>
                                                                            <!-- UPDATED: Baggage allowance from API -->
                                                                            <span>Check-in: 30 kg</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Accordion  -->
                                                <div class="accordion-item booking-details-widget">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button section-header collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            <div class="section-icon">2</div>
                                                            <div class="section-title">
                                                                Passenger Information
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="section-content">
                                                            <div class="guest-row">
                                                                <div class="guest-icon">👤</div>
                                                                <div class="guest-number">Passenger 1</div>
                                                                <div class="guest-type">Adult</div>
                                                                <div class="guest-name">
                                                                    <span>Mr. Fahim Hossain</span>
                                                                    <span class="primary-badge">Primary Contact</span>
                                                                </div>
                                                                <div class="guest-contact">
                                                                    <span>Seat: 12A</span>
                                                                </div>
                                                                <!-- ADDED: Passport and Personal Details -->
                                                                <div class="passenger-details">
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Birth Date:</span>
                                                                        <span>01 Dec, 2022</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Passport:</span>
                                                                        <span>A1234567</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Passport Expiry:</span>
                                                                        <span>01 Dec, 2030</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Gender:</span>
                                                                        <span>Male</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Frequent Flyer:</span>
                                                                        <span>FF12345</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="guest-row">
                                                                <div class="guest-icon">👤</div>
                                                                <div class="guest-number">Passenger 2</div>
                                                                <div class="guest-type">Adult</div>
                                                                <div class="guest-name">
                                                                    Mrs. Sara Ahmed
                                                                </div>
                                                                <div class="guest-contact">Seat: 12B</div>
                                                                <!-- ADDED: Passport and Personal Details -->
                                                                <div class="passenger-details">
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Birth Date:</span>
                                                                        <span>15 Jun, 1995</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Passport:</span>
                                                                        <span>B7654321</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Passport Expiry:</span>
                                                                        <span>20 May, 2029</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Gender:</span>
                                                                        <span>Female</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <span class="detail-label">Frequent Flyer:</span>
                                                                        <span>FF67890</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Accordion  -->
                                                <div class="accordion-item booking-details-widget">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button section-header collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <div class="section-icon">3</div>
                                                            <div class="section-title">
                                                                Payment Information
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="section-content">
                                                            <div class="payment-grid">
                                                                <div>
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Fare Summary
                                                                        </div>
                                                                    </div>
                                                                    <!-- UPDATED: Fare breakdown from API -->
                                                                    <div class="amount-row">
                                                                        <span>Base Fare</span>
                                                                        <span>BDT 7,895</span>
                                                                    </div>
                                                                    <div class="amount-row">
                                                                        <span>Adult x 1</span>
                                                                        <span>BDT 7,895</span>
                                                                    </div>
                                                                    <div class="amount-row">
                                                                        <span>Child x 1</span>
                                                                        <span>BDT 3,406</span>
                                                                    </div>
                                                                    <div class="amount-row total-amount">
                                                                        <span>Total Paid</span>
                                                                        <span>BDT 11,301</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Payment Method
                                                                        </div>
                                                                        <div class="payment-value">
                                                                            Credit Card
                                                                        </div>
                                                                        <div>VISA ****1234</div>
                                                                    </div>
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Transaction ID
                                                                        </div>
                                                                        <!-- UPDATED: Transaction ID from API -->
                                                                        <div>682eeaf0aec2b</div>
                                                                    </div>
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Payment Date
                                                                        </div>
                                                                        <div>22 May, 2025 3:14 PM</div>
                                                                    </div>
                                                                    <!-- ADDED: Payment Status -->
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Payment Status
                                                                        </div>
                                                                        <div class="payment-status-paid">
                                                                            Paid
                                                                        </div>
                                                                    </div>
                                                                    <!-- ADDED: Booking Status -->
                                                                    <div class="payment-item">
                                                                        <div class="payment-label">
                                                                            Booking Status
                                                                        </div>
                                                                        <div class="booking-status-confirmed">
                                                                            Confirmed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Accordion  -->
                                                <div class="accordion-item booking-details-widget">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button section-header collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false"
                                                            aria-controls="collapseFour">
                                                            <div class="section-icon">4</div>
                                                            <div class="section-title">Policies</div>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                        <div class="section-content">
                                                            <div class="payment-item">
                                                                <div class="payment-label">
                                                                    Cancellation Policy
                                                                </div>
                                                                <div class="payment-value">
                                                                    Economy Partially Refundable
                                                                </div>
                                                            </div>
                                                            <ul class="policy-list">
                                                                <li class="policy-item">
                                                                    Cancellation fee of BDT 2,000 per
                                                                    passenger before 24 hours of departure
                                                                </li>
                                                                <li class="policy-item">
                                                                    Cancellation fee of BDT 4,000 per
                                                                    passenger within 24 hours of departure
                                                                </li>
                                                                <li class="policy-item">
                                                                    No-show will result in forfeiture of the
                                                                    entire fare
                                                                </li>
                                                            </ul>
                                                            <div class="payment-item">
                                                                <div class="payment-label">
                                                                    Baggage Policy
                                                                </div>
                                                            </div>
                                                            <ul class="policy-list">
                                                                <li class="policy-item">
                                                                    Cabin baggage: 1 piece up to 7 kg
                                                                </li>
                                                                <!-- UPDATED: Check-in baggage from API -->
                                                                <li class="policy-item">
                                                                    Check-in baggage: 30 kg for Economy Class
                                                                </li>
                                                                <li class="policy-item">
                                                                    Additional baggage charges apply for
                                                                    excess weight
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Accordion  -->
                                                <div class="accordion-item booking-details-widget">
                                                    <h2 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button section-header collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFive" aria-expanded="false"
                                                            aria-controls="collapseFive">
                                                            <div class="section-icon">5</div>
                                                            <div class="section-title">
                                                                Your Documents
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFive" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                        <div class="section-content">
                                                            <div class="document-grid">
                                                                <a href="#" download class="document-item">
                                                                    <span class="document-icon">📥</span>
                                                                    <span>Download E-Ticket</span>
                                                                </a>
                                                                <a href="#" download class="document-item">
                                                                    <span class="document-icon">📥</span>
                                                                    <span>Download Invoice</span>
                                                                </a>
                                                                <a href="#" download class="document-item">
                                                                    <span class="document-icon">📥</span>
                                                                    <span>Download Itinerary</span>
                                                                </a>
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
                        <!-- end form-box -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">&copy; Copyright TravelVela</p>
                        </div>
                        <!-- end copy-right -->
                    </div>
                    <!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="copy-right-content text-end padding-top-30px">
                            <ul class="social-profile">
                                <li>
                                    <a href="#"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end copy-right-content -->
                    </div>
                    <!-- end col-lg-5 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
    </div>
@endsection
