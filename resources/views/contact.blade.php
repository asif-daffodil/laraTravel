@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Contact')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-5">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Contact us</h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html">Home</a></li>
                                <li>Pages</li>
                                <li>Contact us</li>
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
        START CONTACT AREA
    ================================= -->
    <section class="contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">We'd love to hear from you</h3>
                            <p class="font-size-15">
                                Send us a message, and we'll respond as soon as possible
                            </p>
                        </div>
                        <!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <div id="contact-success-message" class="alert alert-success" role="alert">
                                    Thank You! Your message has been sent.
                                </div>
                                <form id="contact-form" method="post" action="php/contact.php" class="row">
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Your Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Your name" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Your Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Email address" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Message</label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="btn-box">
                                            <button id="send-message-btn" type="submit" class="theme-btn">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end col-lg-12 -->
                                </form>
                            </div>
                            <!-- end contact-form-action -->
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Contact Us</h3>
                        </div>
                        <!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="address-book">
                                <ul class="list-items contact-address">
                                    <li>
                                        <i class="la la-map-marker icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Address</h5>
                                        <p class="map__desc">
                                            Melbourne, Australia, 105 South Park Avenue
                                        </p>
                                    </li>
                                    <li>
                                        <i class="la la-phone icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Phone</h5>
                                        <p class="map__desc">Telephone: 2800 256 508</p>
                                        <p class="map__desc">Mobile: 666 777 888</p>
                                    </li>
                                    <li>
                                        <i class="la la-envelope-o icon-element"></i>
                                        <h5 class="title font-size-16 pb-1">Email</h5>
                                        <p class="map__desc">needhelp@TravelVela.com</p>
                                        <p class="map__desc">inquiry@TravelVela.com</p>
                                    </li>
                                </ul>
                                <ul class="social-profile text-center">
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
                                    <li>
                                        <a href="#"><i class="lab la-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
        END CONTACT AREA
    ================================= -->

    <!-- ================================
        START MAP AREA
    ================================= -->
    <section class="map-area padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-container">
                        <div id="map"></div>
                    </div>
                    <!-- end map-container -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end map-area -->
    <!-- ================================
        END MAP AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
