@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Payment Received')

@section('content')
    <!-- ================================
    START PAYMENT AREA
================================= -->
    <section class="payment-area section-bg section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-box payment-received-wrap mb-0">
              <div class="form-title-wrap">
                <div class="step-bar-wrap text-center">
                  <ul
                    class="step-bar-list d-flex align-items-center justify-content-around"
                  >
                    <li class="step-bar flex-grow-1 step-bar-active">
                      <span class="icon-element">1</span>
                      <p class="pt-2 color-text-2">Choose Your Room</p>
                    </li>
                    <li class="step-bar flex-grow-1 step-bar-active">
                      <span class="icon-element">2</span>
                      <p class="pt-2 color-text-2">
                        Your Booking & Payment Details
                      </p>
                    </li>
                    <li class="step-bar flex-grow-1">
                      <span class="icon-element">3</span>
                      <p class="pt-2 color-text-2">Booking Completed!</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="form-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="payment-received-list">
                      <h3 class="title font-size-24">EnVision Hotel Boston</h3>
                      <div class="card-rating">
                        <span class="badge text-bg-warning text-white"
                          >4.4/5</span
                        >
                        <span class="review__text text-warning">Average</span>
                        <span class="rating__text">(30 Reviews)</span>
                      </div>
                      <ul class="list-items list-items-2 py-3">
                        <li><span>Location:</span>Delaware, OH, USA</li>
                        <li><span>Check-in:</span>Thu 30 Mar, 2020</li>
                        <li><span>Check-out:</span>Sat 01 Jun, 2020</li>
                        <li>
                          <span>Booking details:</span>2 Nights, 1 Room, Max 2
                          Adult(s)
                        </li>
                        <li><span>Room type:</span>Luxury View Suite</li>
                        <li><span>Client:</span>David Martin</li>
                      </ul>
                    </div>
                    <!-- end card-item -->
                  </div>
                  <!-- end col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="card-item card-item-list payment-received-card">
                      <div class="card-img">
                        <img src="images/img1.jpg" alt="hotel-img" />
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">1 Room x 2 Nights</h3>
                        <div class="card-price pb-3">
                          <span class="price__from">From</span>
                          <span class="price__num">$88.00</span>
                          <span class="price__text">Per night</span>
                        </div>
                        <div class="section-block"></div>
                        <p class="card-text pt-3">
                          Hotel tax 7% not included, Service charge 10% not
                          included
                        </p>
                      </div>
                    </div>
                    <!-- end card-item -->
                  </div>
                  <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
                <div class="row">
                  <div class="col-lg-6">
                    <div class="payment-received-list">
                      <h3 class="title">Received</h3>
                      <p>Thank you. Your order has been received</p>
                      <div class="table-form table-responsive pt-3 pb-3">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Order</th>
                              <th scope="col">Date</th>
                              <th scope="col">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">#121</th>
                              <td>
                                <div class="table-content">
                                  <h3 class="title">Thu 30 Mar, 2020</h3>
                                </div>
                              </td>
                              <td>
                                <div class="table-content">
                                  <h3 class="title">$88</h3>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <p>
                        Make your payment derectly into our bank account. Please
                        ues your Order ID as the payment reference. Your order
                        wont be shipped until the funds have cleared in our
                        account
                      </p>
                    </div>
                    <!-- end card-item -->
                  </div>
                  <!-- end col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="payment-received-list">
                      <h3 class="title">Payment Detail</h3>
                      <div
                        class="table-form table-layout-2 table-responsive pt-3"
                      >
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Room</th>
                              <th scope="col" class="text-end">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">
                                <div class="table-content">
                                  <p class="title pb-2">
                                    EnVision Hotel Boston
                                  </p>
                                  <p
                                    class="font-size-13 text-gray line-height-20 font-weight-medium"
                                  >
                                    <span class="me-2 color-text-2"
                                      >Start Date:</span
                                    >Thu 30 Mar, 2020
                                  </p>
                                  <p
                                    class="font-size-13 text-gray line-height-20 font-weight-medium"
                                  >
                                    <span class="me-2 color-text-2"
                                      >End Date:</span
                                    >Sat 01 Jun, 2020
                                  </p>
                                </div>
                              </th>
                              <td>
                                <div class="table-content text-end">
                                  <h3 class="title color-text">$88</h3>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">
                                <div class="table-content">
                                  <p class="title">Subtotal</p>
                                </div>
                              </th>
                              <td>
                                <div class="table-content text-end">
                                  <h3 class="title color-text">$88</h3>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">
                                <div class="table-content">
                                  <p class="title">Order Total</p>
                                </div>
                              </th>
                              <td>
                                <div class="table-content text-end">
                                  <h3 class="title color-text">$88</h3>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- end card-item -->
                  </div>
                  <!-- end col-lg-6 -->
                  <div class="col-lg-12">
                    <div class="section-block mt-3"></div>
                    <div class="btn-box text-center pt-4">
                      <a href="payment-complete.html" class="theme-btn"
                        >Book Complete</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
            </div>
            <!-- end payment-card -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ================================
    END PAYMENT AREA
================================= -->
@endsection
@section('scripts')

@endsection
