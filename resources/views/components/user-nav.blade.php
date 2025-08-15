<div class="dashboard-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-wrapper">
                    <div class="logo me-5">
                        <a href="index.html"><img src="images/logo2.png" alt="logo" /></a>
                        <div class="menu-toggler">
                            <i class="la la-bars"></i>
                            <i class="la la-times"></i>
                        </div>
                        <!-- end menu-toggler -->
                        <div class="user-menu-open">
                            <i class="la la-user"></i>
                        </div>
                        <!-- end user-menu-open -->
                    </div>
                    <div class="dashboard-search-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" name="text" placeholder="Search" />
                                    <button class="search-btn">
                                        <i class="la la-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nav-btn ms-auto">
                        <div class="notification-wrap d-flex align-items-center">
                            <div class="notification-item me-2">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-reveal-toggle-icon"
                                        id="notificationDropdownMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="la la-bell"></i>
                                        <span class="noti-count">4</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                        <div class="dropdown-header drop-reveal-header">
                                            <h6 class="title">
                                                You have
                                                <strong class="text-black">4</strong>
                                                notifications
                                            </h6>
                                        </div>
                                        <div class="list-group drop-reveal-list">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="msg-body d-flex align-items-center">
                                                    <div class="icon-element flex-shrink-0 me-3 ms-0">
                                                        <i class="la la-bell"></i>
                                                    </div>
                                                    <div class="msg-content w-100">
                                                        <h3 class="title pb-1">
                                                            Your request has been sent
                                                        </h3>
                                                        <p class="msg-text">2 min ago</p>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="msg-body d-flex align-items-center">
                                                    <div class="icon-element bg-2 flex-shrink-0 me-3 ms-0">
                                                        <i class="la la-check"></i>
                                                    </div>
                                                    <div class="msg-content w-100">
                                                        <h3 class="title pb-1">
                                                            Your account has been created
                                                        </h3>
                                                        <p class="msg-text">1 day ago</p>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="msg-body d-flex align-items-center">
                                                    <div class="icon-element bg-3 flex-shrink-0 me-3 ms-0">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                    <div class="msg-content w-100">
                                                        <h3 class="title pb-1">
                                                            Your account updated
                                                        </h3>
                                                        <p class="msg-text">2 hrs ago</p>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="msg-body d-flex align-items-center">
                                                    <div class="icon-element bg-4 flex-shrink-0 me-3 ms-0">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                    <div class="msg-content w-100">
                                                        <h3 class="title pb-1">
                                                            Your password changed
                                                        </h3>
                                                        <p class="msg-text">Yesterday</p>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                        </div>
                                        <a href="#" class="dropdown-item drop-reveal-btn text-center">View all</a>
                                    </div>
                                    <!-- end dropdown-menu -->
                                </div>
                            </div>
                            <!-- end notification-item -->
                            <div class="notification-item">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="userDropdownMenu"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <img src="images/team8.jpg" alt="team-img" />
                                            </div>
                                            <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                        <div class="dropdown-item drop-reveal-header user-reveal-header">
                                            <h6 class="title text-uppercase">Welcome!</h6>
                                        </div>
                                        <div class="list-group drop-reveal-list user-drop-reveal-list">
                                            <a href="{{ url('/user-dashboard') }}"
                                                class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title">
                                                            <i class="la la-user me-2"></i>My Profile
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="{{ url('/user-dashboard-booking') }}"
                                                class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title">
                                                            <i class="la la-shopping-cart me-2"></i>My
                                                            Booking
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="{{ url('/user-dashboard-reviews') }}"
                                                class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title">
                                                            <i class="la la-heart me-2"></i>My Reviews
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <a href="{{ url('/user-dashboard-settings') }}"
                                                class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title">
                                                            <i class="la la-gear me-2"></i>Settings
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                            <div class="section-block"></div>
                                            <a href="index.html" class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title">
                                                            <i class="la la-power-off me-2"></i>Logout
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- end msg-body -->
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end dropdown-menu -->
                                </div>
                            </div>
                            <!-- end notification-item -->
                        </div>
                    </div>
                    <!-- end nav-btn -->
                </div>
                <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
