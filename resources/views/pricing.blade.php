@extends('layouts.app', ['style' => 'style-2'])

@section('title', 'Pricing')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-9">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Pricing Plan</h2>
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
                                <li>Pricing Plan</li>
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
        START PACKAGE AREA
    ================================= -->
    <section class="package-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">
                            Select Pricing Plan That <br />
                            Suits Your Needs
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-80px">
                <div class="col-lg-4 p-0">
                    <div class="package-card">
                        <div class="package-title">
                            <h2 class="package__title">Normal</h2>
                            <h3 class="package__price"><span>$</span>13.99</h3>
                            <h5 class="package__month">Per month</h5>
                            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 10"
                                preserveaspectratio="none">
                                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
                            </svg>
                        </div>
                        <!-- end package-title -->
                        <ul class="list-items">
                            <li>Disk space 250Gb</li>
                            <li>Bandwidth 25Gb</li>
                            <li>Databases 1</li>
                            <li class="text-disabled">Email accounts NO</li>
                            <li class="text-disabled">24h support NO</li>
                            <li class="text-disabled">Email support NO</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#" class="theme-btn theme-btn-transparent">Select Plan</a>
                        </div>
                    </div>
                    <!-- end package-card -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 p-0">
                    <div class="package-card package-card-active">
                        <div class="package-title">
                            <h2 class="package__title">Standard</h2>
                            <h3 class="package__price"><span>$</span>95.99</h3>
                            <h5 class="package__month">Per month</h5>
                            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 10"
                                preserveaspectratio="none">
                                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
                            </svg>
                        </div>
                        <!-- end package-title -->
                        <ul class="list-items">
                            <li>Disk space 350Gb</li>
                            <li>Bandwidth 45Gb</li>
                            <li>Databases 1</li>
                            <li>Email accounts YES</li>
                            <li class="text-disabled">24h support NO</li>
                            <li class="text-disabled">Email support NO</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#" class="theme-btn">Select Plan</a>
                        </div>
                    </div>
                    <!-- end package-card -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 p-0">
                    <div class="package-card">
                        <div class="package-title">
                            <h2 class="package__title">Premium</h2>
                            <h3 class="package__price"><span>$</span>155.99</h3>
                            <h5 class="package__month">Per month</h5>
                            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 10"
                                preserveaspectratio="none">
                                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
                            </svg>
                        </div>
                        <!-- end package-title -->
                        <ul class="list-items">
                            <li>Disk space 500Gb</li>
                            <li>Bandwidth 125Gb</li>
                            <li>Databases 1</li>
                            <li>Email accounts YES</li>
                            <li>24h support YES</li>
                            <li>Email support YES</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#" class="theme-btn theme-btn-transparent">Select Plan</a>
                        </div>
                    </div>
                    <!-- end package-card -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ================================
        END PACKAGE AREA
    ================================= -->
@endsection
@section('scripts')

@endsection
