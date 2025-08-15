@extends('layouts.user', ['title' => 'Hotel Booking Details'])
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
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <h3 class="title">Hotel Booking Details</h3>
                        <p class="font-size-14">Showing 1 to 7 of 17 entries</p>
                      </div>
                      <span
                        >Total Bookings
                        <strong class="color-text">(17)</strong></span
                      >
                    </div>
                  </div>
                  <div class="form-content">
                    <div class="col-12">
                      <div class="booking-details">
                        <!-- Booking Header with Status and Number -->
                        <div class="booking-header">
                          <div class="booking-number">
                            Booking No: 1747919864
                          </div>
                          <div class="booking-status">Status: Pending</div>
                          <div class="booking-date">
                            Booked on: 2025-05-22 19:17:44
                          </div>
                          <div class="booking-slug">
                            Reference: PzNhR1747919864
                          </div>
                        </div>

                        <div class="accordion" id="accordionExample">
                          <!-- Single Accordion  -->
                          <div class="accordion-item booking-details-widget">
                            <div class="accordion-header" id="headingOne">
                              <button
                                class="accordion-button section-header"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                              >
                                <div class="section-icon">1</div>
                                <div class="section-title">Hotel Details</div>
                                <div class="section-reference">
                                  Hotel Reference: hsid7904160278-39611795
                                </div>
                              </button>
                            </div>
                            <div
                              id="collapseOne"
                              class="accordion-collapse collapse show"
                              aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="section-content">
                                <div class="hotel-info">
                                  <div class="hotel-details">
                                    <div class="hotel-d-head">
                                      <div class="hotel-d-head-info">
                                        <h2 class="hotel-name">
                                          Jatra FlagShip Chattogram City Center
                                        </h2>
                                        <div class="hotel-rating">
                                          <span class="rating-stars"
                                            >⭐ 4 Star Hotel</span
                                          >
                                        </div>
                                        <div class="location">
                                          <span class="location-icon">📍</span>
                                          <span>Dhaka, BANGLADESH</span>
                                        </div>
                                        <div class="hotel-address">
                                          Plot: 42, Road: 03, Nasirabad
                                          Properties, South Khulshi, 4225
                                          Chittagong
                                        </div>
                                        <div class="hotel-contact">
                                          <div class="hotel-phone">
                                            📞 +8809638-230230
                                          </div>
                                          <div class="hotel-email">
                                            ✉️ support@travelvela.com
                                          </div>
                                        </div>
                                      </div>

                                      <div class="hotel-d-head-img">
                                        <img
                                          src="https://placehold.co/120x90"
                                          alt="Jatra FlagShip Chattogram City Center"
                                          class="hotel-image"
                                        />
                                      </div>
                                    </div>

                                    <div class="dates-container">
                                      <div class="date-block">
                                        <div class="date-label">Check In</div>
                                        <div class="date-value">
                                          03 May, 2025
                                        </div>
                                        <div class="date-day">Saturday</div>
                                      </div>
                                      <div class="nights-badge">2 Nights</div>
                                      <div class="date-block text-right">
                                        <div class="date-label">Check Out</div>
                                        <div class="date-value">
                                          05 May, 2025
                                        </div>
                                        <div class="date-day">Monday</div>
                                      </div>
                                    </div>

                                    <div class="room-info">
                                      <span class="room-icon">🏠</span>
                                      <span class="room-type">Deluxe Room</span>
                                      <span class="room-details"
                                        >Room Only • Refundable</span
                                      >
                                    </div>

                                    <div class="guest-count">
                                      <span class="guest-icon">👥</span>
                                      <span>Total Guests: 4</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Single Accordion  -->
                          <div class="accordion-item booking-details-widget">
                            <h2 class="accordion-header" id="headingTwo">
                              <button
                                class="accordion-button section-header collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                              >
                                <div class="section-icon">2</div>
                                <div class="section-title">
                                  Guest Information
                                </div>
                              </button>
                            </h2>
                            <div
                              id="collapseTwo"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="section-content">
                                <!-- Primary Guest Contact -->
                                <div class="primary-guest-info">
                                  <h4>Primary Contact Information</h4>
                                  <div class="guest-details-grid">
                                    <div class="guest-detail">
                                      <label>Name:</label>
                                      <span>Md Fahim Hossain</span>
                                    </div>
                                    <div class="guest-detail">
                                      <label>Email:</label>
                                      <span>alifhossain174@gmail.com</span>
                                    </div>
                                    <div class="guest-detail">
                                      <label>Contact:</label>
                                      <span>01969005035</span>
                                    </div>
                                    <div class="guest-detail">
                                      <label>Address:</label>
                                      <span
                                        >Gulshan, Dhaka - 1207, Bangladesh</span
                                      >
                                    </div>
                                  </div>
                                </div>

                                <!-- Room Travellers -->
                                <div class="room-travellers">
                                  <h4>Room Travellers</h4>
                                  <div class="guest-row">
                                    <div class="guest-icon">🏨</div>
                                    <div class="guest-number">
                                      Deluxe Room (1 Adult, 1 Child)
                                    </div>
                                    <div class="guest-type"></div>
                                    <div class="guest-name"></div>
                                    <div class="guest-contact"></div>
                                  </div>
                                  <div class="guest-row">
                                    <div class="guest-icon">👤</div>
                                    <div class="guest-number">Guest 1</div>
                                    <div class="guest-type">Adult</div>
                                    <div class="guest-name">
                                      <span>Mr. testuser sdfsd</span>
                                      <span class="primary-badge">Adult</span>
                                    </div>
                                    <div class="guest-contact"></div>
                                  </div>
                                  <div class="guest-row">
                                    <div class="guest-icon">👤</div>
                                    <div class="guest-number">Guest 2</div>
                                    <div class="guest-type">Child</div>
                                    <div class="guest-name">
                                      Master. testtwo sdfsd
                                    </div>
                                    <div class="guest-contact">Child</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Single Accordion  -->
                          <div class="accordion-item booking-details-widget">
                            <h2 class="accordion-header" id="headingThree">
                              <button
                                class="accordion-button section-header collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                              >
                                <div class="section-icon">3</div>
                                <div class="section-title">
                                  Payment Information
                                </div>
                              </button>
                            </h2>
                            <div
                              id="collapseThree"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="section-content">
                                <div class="payment-grid">
                                  <div>
                                    <div class="payment-item">
                                      <div class="payment-label">
                                        Fare Summary
                                      </div>
                                    </div>
                                    <div class="amount-row">
                                      <span>Room Price</span>
                                      <span>BDT 4,285</span>
                                    </div>
                                    <div class="amount-row">
                                      <span>Discount</span>
                                      <span>BDT 0</span>
                                    </div>
                                    <div class="amount-row">
                                      <span>Total Booking Amount</span>
                                      <span>BDT 123,123</span>
                                    </div>
                                    <div class="amount-row">
                                      <span>Convenience Charge</span>
                                      <span>BDT 0</span>
                                    </div>
                                    <div class="amount-row">
                                      <span>Add-ons</span>
                                      <span>BDT 0</span>
                                    </div>
                                    <div class="amount-row total-amount">
                                      <span>You Paid</span>
                                      <span>BDT 123,123</span>
                                    </div>
                                  </div>
                                  <div>
                                    <div class="payment-item">
                                      <div class="payment-label">
                                        Payment Method
                                      </div>
                                      <div class="payment-value">Paid Via</div>
                                      <div>Mobile Banking</div>
                                    </div>
                                    <div class="payment-item">
                                      <div class="payment-label">Gateway</div>
                                      <div>Nagad</div>
                                    </div>
                                    <div class="payment-item">
                                      <div class="payment-label">
                                        Payment Status
                                      </div>
                                      <div>Pending</div>
                                    </div>
                                    <div class="payment-item">
                                      <div class="payment-label">
                                        Transaction ID
                                      </div>
                                      <div>Not Available</div>
                                    </div>
                                    <div class="payment-item">
                                      <div class="payment-label">
                                        Paid Amount
                                      </div>
                                      <div>Not Available</div>
                                    </div>
                                    <div class="payment-item">
                                      <div class="payment-label">Currency</div>
                                      <div>BDT</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Single Accordion  -->
                          <div class="accordion-item booking-details-widget">
                            <h2 class="accordion-header" id="headingFour">
                              <button
                                class="accordion-button section-header collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                              >
                                <div class="section-icon">4</div>
                                <div class="section-title">Policies</div>
                              </button>
                            </h2>
                            <div
                              id="collapseFour"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingFour"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="section-content">
                                <div class="payment-item">
                                  <div class="payment-label">
                                    Cancellation Policy
                                  </div>
                                  <div class="payment-value">Deluxe Room</div>
                                </div>
                                <ul class="policy-list">
                                  <li class="policy-item">
                                    Free Cancellation before 12:01 on 01 May
                                    2025
                                  </li>
                                  <li class="policy-item">
                                    No refund from 12:01 on 01 May 2025
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Single Accordion  -->
                          <div class="accordion-item booking-details-widget">
                            <h2 class="accordion-header" id="headingFive">
                              <button
                                class="accordion-button section-header collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                              >
                                <div class="section-icon">5</div>
                                <div class="section-title">Your Documents</div>
                              </button>
                            </h2>
                            <div
                              id="collapseFive"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingFive"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="section-content">
                                <div class="document-grid">
                                  <a href="#" download class="document-item">
                                    <span class="document-icon">📥</span>
                                    <span>Download Voucher</span>
                                  </a>
                                  <a href="#" download class="document-item">
                                    <span class="document-icon">📥</span>
                                    <span>Download Invoice</span>
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
                      <a
                        class="page-link page-link-nav"
                        href="#"
                        aria-label="Previous"
                      >
                        <span aria-hidden="true"
                          ><i class="la la-angle-left"></i
                        ></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link page-link-nav" href="#">1</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link page-link-nav" href="#"
                        >2 <span class="sr-only">(current)</span></a
                      >
                    </li>
                    <li class="page-item">
                      <a class="page-link page-link-nav" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a
                        class="page-link page-link-nav"
                        href="#"
                        aria-label="Next"
                      >
                        <span aria-hidden="true"
                          ><i class="la la-angle-right"></i
                        ></span>
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
