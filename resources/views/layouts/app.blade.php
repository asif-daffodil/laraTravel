@props(['style' => ''])
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Example" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'TravelVela - Travel Booking HTML Template')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- start cssload-loader -->
    <div class="preloader"></div>
    <!-- end cssload-loader -->

    <!-- Start Header Area  -->
    <x-header :style="$style" />
    <!-- End Header Area  -->

    <!-- Main Content -->
    @yield('content')

    <!-- Start Footer -->
    @include('components.footer')
    <!-- End Footer -->

    <!-- start back-to-top -->
    <div id="back-to-top">
      <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="signupPopupForm"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div>
                <h5 class="modal-title title" id="exampleModalLongTitle">
                  Sign Up
                </h5>
                <p class="font-size-14">Hello! Welcome Create a New Account</p>
              </div>
              <button
                type="button"
                class="btn-close close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true" class="la la-close"></span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contact-form-action">
                <form method="post">
                  <div class="input-box">
                    <label class="label-text">Username</label>
                    <div class="form-group">
                      <span class="la la-user form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="name"
                        placeholder="Type your username"
                      />
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Email Address</label>
                    <div class="form-group">
                      <span class="la la-envelope form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="email"
                        placeholder="Type your email"
                      />
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Password</label>
                    <div class="form-group">
                      <span class="la la-lock form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="password"
                        placeholder="Type password"
                      />
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Repeat Password</label>
                    <div class="form-group">
                      <span class="la la-lock form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="contact"
                        placeholder="Type again password"
                      />
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="btn-box pt-3 pb-4">
                    <button type="submit" class="theme-btn w-100">
                      Register Account
                    </button>
                  </div>
                  <div class="action-box text-center">
                    <p class="font-size-14">Or Sign up Using</p>
                    <ul class="social-profile py-3">
                      <li>
                        <a href="#" class="bg-5 text-white"
                          ><i class="lab la-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-6 text-white"
                          ><i class="lab la-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-7 text-white"
                          ><i class="lab la-instagram"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-5 text-white"
                          ><i class="lab la-linkedin-in"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="loginPopupForm"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div>
                <h5 class="modal-title title" id="exampleModalLongTitle2">
                  Login
                </h5>
                <p class="font-size-14">Hello! Welcome to your account</p>
              </div>
              <button
                type="button"
                class="btn-close close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true" class="la la-close"></span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contact-form-action">
                <form method="post">
                  <div class="input-box">
                    <label class="label-text">Username</label>
                    <div class="form-group">
                      <span class="la la-user form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="text"
                        placeholder="Type your username"
                      />
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Password</label>
                    <div class="form-group mb-2">
                      <span class="la la-lock form-icon"></span>
                      <input
                        class="form-control"
                        type="text"
                        name="text"
                        placeholder="Type your password"
                      />
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div class="custom-checkbox mb-0">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="rememberchb"
                        />
                        <label for="rememberchb">Remember me</label>
                      </div>
                      <p class="forgot-password">
                        <a href="recover.html">Forgot Password?</a>
                      </p>
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="btn-box pt-3 pb-4">
                    <button type="button" class="theme-btn w-100">
                      Login Account
                    </button>
                  </div>
                  <div class="action-box text-center">
                    <p class="font-size-14">Or Login Using</p>
                    <ul class="social-profile py-3">
                      <li>
                        <a href="#" class="bg-5 text-white"
                          ><i class="lab la-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-6 text-white"
                          ><i class="lab la-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-7 text-white"
                          ><i class="lab la-instagram"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#" class="bg-5 text-white"
                          ><i class="lab la-linkedin-in"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('js/quantity-input.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('scripts')
  </body>
</html>
