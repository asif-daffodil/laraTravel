@extends('layouts.user', ['title' => 'User Dashboard Settings'])
@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="breadcrumb-content">
                  <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Settings</h2>
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
                    <li>Settings</li>
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
              <div class="col-lg-6">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <h3 class="title">Personal Information</h3>
                  </div>
                  <div class="form-content">
                    <div
                      class="user-profile-action d-flex align-items-center pb-4"
                    >
                      <div class="user-pro-img">
                        <img src="images/team1.jpg" alt="user-image" />
                      </div>
                      <div class="upload-btn-box">
                        <p class="pb-2 font-size-15 line-height-24">
                          Max file size is 5MB, Minimum dimension: 150x150 And
                          Suitable files are .jpg &amp; .png
                        </p>
                        <div class="file-upload-wrap file-upload-wrap-2">
                          <input
                            type="file"
                            name="files[]"
                            class="multi file-upload-input with-preview"
                            maxlength="1"
                          />
                          <span class="file-upload-text"
                            ><i class="la la-upload me-2"></i>Upload Image</span
                          >
                          <a href="#" class="theme-btn theme-btn-small"
                            >Remove Image</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="contact-form-action">
                      <form action="#">
                        <div class="row">
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">First Name</label>
                              <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Ali"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Last Name</label>
                              <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Tufan"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Email Address</label>
                              <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="alitufan@gmail.com"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Phone number</label>
                              <div class="form-group">
                                <span class="la la-phone form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="+01 4561 3214"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Date of birth</label>
                              <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="03 Jun 1990"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Address</label>
                              <div class="form-group">
                                <span class="la la-map form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A."
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-12">
                            <div class="btn-box">
                              <button class="theme-btn" type="button">
                                Save Changes
                              </button>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                        </div>
                        <!-- end row -->
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <h3 class="title">Change Email</h3>
                  </div>
                  <div class="form-content">
                    <div class="contact-form-action">
                      <form action="#">
                        <div class="row">
                          <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Current Email</label>
                              <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Current email"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                          <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                              <label class="label-text">New Email</label>
                              <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="New email"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                          <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                              <label class="label-text">New Email Again</label>
                              <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="New email again"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                          <div class="col-lg-12">
                            <div class="btn-box">
                              <button class="theme-btn" type="button">
                                Change Email
                              </button>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                        </div>
                        <!-- end row -->
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <h3 class="title">Change Password</h3>
                  </div>
                  <div class="form-content">
                    <div class="contact-form-action">
                      <form action="#">
                        <div class="row">
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Current Password</label>
                              <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Current password"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">New Password</label>
                              <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="New password"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text"
                                >New Password Again</label
                              >
                              <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="New password again"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-6 -->
                          <div class="col-lg-12">
                            <div class="btn-box">
                              <button class="theme-btn" type="button">
                                Change Password
                              </button>
                            </div>
                          </div>
                          <!-- end col-lg-12 -->
                        </div>
                        <!-- end row -->
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <h3 class="title pb-2">Forgot Password</h3>
                    <p class="font-size-15 line-height-24">
                      Enter the email of your account to reset password. Then
                      you will receive a link to email <br />
                      to reset the password.If you have any issue about reset
                      password
                      <a href="contact.html" class="color-text">contact us</a>
                    </p>
                  </div>
                  <div class="form-content">
                    <div class="contact-form-action">
                      <form action="#">
                        <div class="input-box">
                          <label class="label-text">Email Address</label>
                          <div class="form-group">
                            <span class="la la-envelope form-icon"></span>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <div class="btn-box">
                          <button class="theme-btn" type="button">
                            Recover Password
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
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
