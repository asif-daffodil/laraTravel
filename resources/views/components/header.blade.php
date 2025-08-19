@props(['style' => ''])
<header class="header-area home-header {{$style}}">
      <div class="header-menu-wrapper">
        <div class="container">
          <div class="header-main-inner">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu-wrapper">
                  <a href="#" class="down-button"
                    ><i class="la la-angle-down"></i
                  ></a>
                  <div class="logo">
                    <a href="{{url('/')}}" class="logo-link"
                      ><img src="images/{{ $style == '' ? 'logo2.png': 'logo.png' }}" alt="logo"
                    /></a>
                    <div class="menu-toggler">
                      <i class="la la-bars"></i>
                      <i class="la la-times"></i>
                    </div>
                    <!-- end menu-toggler -->
                  </div>
                  <!-- end logo -->
                  <div class="main-menu-content">
                    <nav>
                      <ul>
                        <li class="active">
                          <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                          <a href="#"
                            >Flight <i class="la la-angle-down"></i
                          ></a>
                          <ul class="dropdown-menu-item">
                            <li>
                              <a href="{{url('/flight-search-result')}}"
                                >Flight Search Result</a
                              >
                            </li>
                            <li>
                              <a href="{{url('/flight-single')}}">Flight details</a>
                            </li>
                            <li>
                              <a href="{{url('/flight-booking')}}">Flight Booking</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Hotel <i class="la la-angle-down"></i></a>
                          <ul class="dropdown-menu-item">
                            <li>
                              <a href="{{url('/hotel-search-result')}}"
                                >Hotel Search Result</a
                              >
                            </li>
                            <li>
                              <a href="{{url('/hotel-single')}}">Hotel details</a>
                            </li>
                            <li>
                              <a href="{{url('/hotel-booking')}}">Hotel Booking</a>
                            </li>
                          </ul>
                        </li>

                        <li>
                          <a href="#">Tour <i class="la la-angle-down"></i></a>
                          <ul class="dropdown-menu-item">
                            <li>
                              <a href="{{url('/tour-search-result')}}"
                                >Tour Search Result</a
                              >
                            </li>
                            <li>
                              <a href="{{url('/tour-details')}}">Tour details</a>
                            </li>
                            <li>
                              <a href="{{url('/tour-booking')}}">Tour Booking</a>
                            </li>
                          </ul>
                        </li>

                        <li>
                          <a href="{{url('/about')}}">about</a>
                        </li>

                        <li>
                          <a href="#">Pages <i class="la la-angle-down"></i></a>
                          <ul class="dropdown-menu-item">
                            <li>
                              <a href="{{url('/services')}}">Our Services</a>
                            </li>
                            <li><a href="{{url('/gallery')}}">Gallery</a></li>
                            <li><a href="{{url('/pricing')}}">pricing</a></li>
                            <li><a href="{{url('/faq')}}">faq</a></li>
                            <li>
                              <a href="{{url('/user-dashboard')}}">User Dashboard</a>
                            </li>
                            <li>
                              <a href="{{url('/user-profile')}}">User profile</a>
                            </li>
                            <li>
                              <a href="{{url('/verify-email')}}">Verify Email</a>
                            </li>

                            <li>
                              <a href="{{url('/recover')}}">recover password</a>
                            </li>
                            <li>
                              <a href="{{url('/checkout')}}">Checkout</a>
                            </li>
                            <li>
                              <a href="{{url('/payment-received')}}"
                                >payment received</a
                              >
                            </li>
                            <li>
                              <a href="{{url('/payment-complete')}}"
                                >payment complete</a
                              >
                            </li>

                            <li><a href="page-404.html">404 page</a></li>
                          </ul>
                        </li>

                        <li>
                          <a href="#">Blog <i class="la la-angle-down"></i></a>
                          <ul class="dropdown-menu-item">
                            <li>
                              <a href="{{url('/blog-sidebar')}}">blog sidebar</a>
                            </li>
                            <li>
                              <a href="{{url('/blog-single')}}">blog details</a>
                            </li>
                          </ul>
                        </li>

                        <li><a href="{{url('/contact')}}">contact</a></li>
                      </ul>
                    </nav>
                  </div>

                  <div class="header-right-action main-header">
                    <a
                      href="#"
                      id="signupBtn"
                      class="theme-btn theme-btn-small theme-btn-transparent"
                      data-bs-toggle="modal"
                      data-bs-target="#signupPopupForm"
                      >Sign Up</a
                    >
                    <a
                      href="#"
                      id="loginBtn"
                      class="theme-btn theme-btn-small"
                      data-bs-toggle="modal"
                      data-bs-target="#loginPopupForm"
                      >Login</a
                    >

                    <div id="userDropdown" class="dropdown dropdown-menu-start d-inline-block" style="display:none !important;">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <span id="userDropdownName">User</span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="userDropdownBtn">
                        <li><a class="dropdown-item" href="/user-profile">Get User Info</a></li>
                        <li><a class="dropdown-item" href="/user-dashboard-profile">User Profile Update</a></li>
                        <li><a class="dropdown-item" href="#" id="logoutLink">Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <script>
        if (!localStorage.getItem('loginData')) {
        document.getElementById('userDropdown').classList.remove("d-inline-block")
        document.getElementById('userDropdown').classList.add("d-none")
        }
    </script>
