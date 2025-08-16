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
                      <h3 class="title">Booking Results</h3>
                      <p class="font-size-14">Showing 1 to 7 of 17 entries</p>
                    </div>
                    <span>Total Bookings
                      <strong class="color-text">(17)</strong></span>
                  </div>
                </div>
                <div class="form-content">
                  <div class="table-form table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Type</th>
                          <th scope="col">Title</th>
                          <th scope="col">Location</th>
                          <th scope="col">Order Date</th>
                          <th scope="col">Execution Date</th>
                          <th scope="col">Price</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <i class="la la-plane me-1 font-size-18"></i>Flight
                          </th>
                          <td>
                            <div class="table-content">
                              <h3 class="title">
                                <a href="{{ url('/user-dashboard-flight-booking-details') }}">Dhaka to Delhi</a>
                              </h3>
                            </div>
                          </td>
                          <td>Hazrat Shahjalal Intl Arpt</td>
                          <td>30/6/2020</td>
                          <td>2/6/2020</td>
                          <td>৳11,301</td>
                          <td>
                            <span class="badge text-bg-info py-1 px-2">Pending</span>
                          </td>
                          <td>
                            <div class="table-content">
                              <button class="theme-btn theme-btn-small">
                                Cancel
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <i class="la la-building me-1 font-size-18"></i>Hotel
                          </th>
                          <td>
                            <div class="table-content">
                              <h3 class="title">
                                <a href="user-dashboard-hotel-booking-details">Jatra FlagShip Chattogram City
                                  Center
                                </a>
                              </h3>
                            </div>
                          </td>
                          <td>Dhaka, BANGLADESH</td>
                          <td>30/6/2020</td>
                          <td>2/6/2020</td>
                          <td>৳123,123</td>
                          <td>
                            <span class="badge text-bg-success py-1 px-2">Completed</span>
                          </td>
                          <td>
                            <div class="table-content">
                              <button class="theme-btn theme-btn-small">
                                Cancel
                              </button>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row">
                            <i class="la la-tree me-1 font-size-18"></i>Tour
                          </th>
                          <td>
                            <div class="table-content">
                              <h3 class="title">
                                <a href="user-dashboard-hotel-booking-details.html">Discover a Journey Through The Queen
                                  Of
                                  Hills Darjeeling (3 Days and 2 Nights)</a>
                              </h3>
                            </div>
                          </td>
                          <td>Darjeeling, West Bengal</td>
                          <td>30/6/2020</td>
                          <td>2/6/2020</td>
                          <td>৳10,190</td>
                          <td>
                            <span class="badge text-bg-warning py-1 px-2">Delayed</span>
                          </td>
                          <td>
                            <div class="table-content">
                              <button class="theme-btn theme-btn-small">
                                Cancel
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
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
