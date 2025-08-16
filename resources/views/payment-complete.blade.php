@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Payment Complete')

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
                                <ul class="step-bar-list d-flex align-items-center justify-content-around">
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
                                    <li class="step-bar flex-grow-1 step-bar-active">
                                        <span class="icon-element">3</span>
                                        <p class="pt-2 color-text-2">Booking Completed!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="payment-received-list">
                                <div class="d-flex align-items-center">
                                    <i class="la la-check icon-element flex-shrink-0 me-3 ms-0"></i>
                                    <div>
                                        <h3 class="title pb-1">Thanks Alex!</h3>
                                        <h3 class="title">
                                            Your booking in EnVision Hotel Boston is confirmed.
                                        </h3>
                                    </div>
                                </div>
                                <ul class="list-items py-4">
                                    <li>
                                        <i class="la la-check text-success me-2"></i><strong class="text-black">EnVision
                                            Hotel Boston</strong>
                                        is Expecting you on
                                        <strong class="text-black">01 june</strong>
                                    </li>
                                    <li>
                                        <i class="la la-check text-success me-2"></i>Your
                                        <strong class="text-black">payment</strong> will be
                                        handled by EnVision Hotel Boston, the
                                        <strong class="color-text-2">'Payment'</strong> section
                                        below has more details
                                    </li>
                                    <li>
                                        <i class="la la-check text-success me-2"></i>Make changes
                                        to your booking or ask the properly a question in just a
                                        few clicks
                                    </li>
                                </ul>
                                <div class="btn-box pb-4">
                                    <a href="#" class="theme-btn mb-2 me-2">Make changes to your booking</a>
                                    <a href="#" class="theme-btn mb-2 theme-btn-transparent">Make your booking in the
                                        app</a>
                                </div>
                                <h3 class="title">
                                    <a href="#" class="text-black">EnVision Hotel Boston</a>
                                </h3>
                                <p>New York City, NY, USA</p>
                                <p class="py-1">
                                    <a href="#" class="text-color">Click for directions on Google maps
                                        <i class="la la-arrow-right"></i></a>
                                </p>
                                <p>
                                    <strong class="text-black me-1">Phone:</strong>+ 00 222 44
                                    5678
                                </p>
                                <ul class="list-items list-items-3 list-items-4 py-4">
                                    <li>
                                        <span class="text-black font-weight-bold">Your reservation</span>2 Nights, 1 Room
                                    </li>
                                    <li>
                                        <span class="text-black font-weight-bold">Check-in</span>Thu 30 Mar, 2020
                                    </li>
                                    <li>
                                        <span class="text-black font-weight-bold">Check-out</span>Sat 01 Jun, 2020
                                    </li>
                                    <li>
                                        <span class="text-black font-weight-bold">Prepayment</span>You will be charged a
                                        prepayment of the total price at
                                        any time.
                                    </li>
                                    <li>
                                        <span class="text-black font-weight-bold">Cancellation cost</span>From now on: USD
                                        34
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn border-0 text-white bg-7">Cancel your booking</a>
                                </div>
                            </div>
                            <!-- end card-item -->
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
