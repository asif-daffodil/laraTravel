@extends('layouts.user', ['title' => 'User Dashboard Profile'])
@section('content')
    <div class="dashboard-content-wrap">
      <div class="dashboard-bread dashboard--bread">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="breadcrumb-content">
                <div class="section-heading">
                  <h2 class="sec__title font-size-30 text-white">
                    My Profile
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
                  <li>My Profile</li>
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
                <div class="form-title-wrap border-bottom-0 pb-0">
                  <h3 class="title">Profile Information</h3>
                </div>
                <div class="form-content">
                  <div class="table-form table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                First Name
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>Ali</td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                Last Name
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>Tufan</td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                Email Address
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>alitufan@gmail.com</td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                Phone Number
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>+01 4561 3214</td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                Date of Birth
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>03 Jun 1990</td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="table-content">
                              <h3 class="title font-weight-medium">
                                Address
                              </h3>
                            </div>
                          </td>
                          <td>:</td>
                          <td>
                            8800 Orchard Lake Road, Suite 180 Farmington
                            Hills, U.S.A.
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="section-block"></div>
                  <div class="btn-box mt-4">
                    <a href="{{ url('/user-dashboard-settings') }}" class="theme-btn">Edit Profile</a>
                  </div>
                </div>
              </div>
              <!-- end form-box -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
          <div class="border-top mt-4"></div>
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
