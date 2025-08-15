@extends('layouts.user', ['title' => 'User Dashboard Wishlist'])
@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    My Wishlist
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
                                <li>My Wishlist</li>
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
                                <h3 class="title">Wishlist</h3>
                                <p class="font-size-14">Showing 1 - 6 of 28 results</p>
                            </div>
                            <div class="form-content pt-5 pb-0">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="hotel-single.html" class="d-block">
                                                    <img src="images/img1.jpg" alt="hotel-img" />
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
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
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item car-card">
                                            <div class="card-img">
                                                <a href="car-single.html" class="d-block">
                                                    <img src="images/car-img.png" alt="car-img" />
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-meta">Compact SUV</p>
                                                <h3 class="card-title">
                                                    <a href="car-single.html">Toyota Corolla or Similar</a>
                                                </h3>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-attributes">
                                                    <ul class="d-flex align-items-center">
                                                        <li class="d-flex align-items-center" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Passenger">
                                                            <i class="la la-users"></i><span>4</span>
                                                        </li>
                                                        <li class="d-flex align-items-center" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Luggage">
                                                            <i class="la la-suitcase"></i><span>1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$23.00</span>
                                                        <span class="price__text">Per day</span>
                                                    </p>
                                                    <a href="car-single.html" class="btn-text">See details<i
                                                            class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="tour-details.html" class="d-block">
                                                    <img src="images/img9.jpg" alt="Destination-img" />
                                                </a>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    <a href="tour-details.html">Empire State Building Admission</a>
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
                                                        <span class="price__num">$124.00</span>
                                                    </p>
                                                    <span class="tour-hour"><i class="la la-clock-o me-1"></i>Full
                                                        day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="hotel-single.html" class="d-block">
                                                    <img src="images/img1.jpg" alt="hotel-img" />
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
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
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item car-card">
                                            <div class="card-img">
                                                <a href="car-single.html" class="d-block">
                                                    <img src="images/car-img.png" alt="car-img" />
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-meta">Compact SUV</p>
                                                <h3 class="card-title">
                                                    <a href="car-single.html">Toyota Corolla or Similar</a>
                                                </h3>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-attributes">
                                                    <ul class="d-flex align-items-center">
                                                        <li class="d-flex align-items-center" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Passenger">
                                                            <i class="la la-users"></i><span>4</span>
                                                        </li>
                                                        <li class="d-flex align-items-center" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Luggage">
                                                            <i class="la la-suitcase"></i><span>1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$23.00</span>
                                                        <span class="price__text">Per day</span>
                                                    </p>
                                                    <a href="car-single.html" class="btn-text">See details<i
                                                            class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="tour-details.html" class="d-block">
                                                    <img src="images/img9.jpg" alt="Destination-img" />
                                                </a>
                                                <div class="add-to-wishlist icon-element" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    <a href="tour-details.html">Empire State Building Admission</a>
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
                                                        <span class="price__num">$124.00</span>
                                                    </p>
                                                    <span class="tour-hour"><i class="la la-clock-o me-1"></i>Full
                                                        day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card-item -->
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                                <!-- end row -->
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
