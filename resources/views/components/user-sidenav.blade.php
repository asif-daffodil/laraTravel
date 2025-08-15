<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div>
        <!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="images/team8.jpg" alt="testimonial image" />
                </div>
                <div class="author-bio">
                    <h4 class="author__title">Ali Tufan</h4>
                    <span class="author__meta">Member Since May 2017</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu list-items">
                <li class="{{ request()->is('user-dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard') }}"><i class="la la-dashboard me-2"></i>Dashboard</a>
                </li>
                <li class="{{ request()->is('user-dashboard-booking') || request()->is('user-dashboard-flight-booking-details') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard-booking') }}"><i class="la la-shopping-cart me-2 text-color"></i>My
                        Booking</a>
                </li>
                <li class="{{ request()->is('user-dashboard-profile') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard-profile') }}"><i class="la la-user me-2 text-color-2"></i>My
                        Profile</a>
                </li>
                <li class="{{ request()->is('user-dashboard-reviews') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard-reviews') }}"><i class="la la-star me-2 text-color-3"></i>My
                        Reviews</a>
                </li>
                <li class="{{ request()->is('user-dashboard-wishlist') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard-wishlist') }}"><i
                            class="la la-heart me-2 text-color-4"></i>Wishlist</a>
                </li>
                <li class="{{ request()->is('user-dashboard-settings') ? 'active' : '' }}">
                    <a href="{{ url('/user-dashboard-settings') }}"><i
                            class="la la-cog me-2 text-color-5"></i>Settings</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}"><i class="la la-power-off me-2 text-color-6"></i>Logout</a>
                </li>
            </ul>
        </div>
        <!-- end sidebar-menu-wrap -->
    </div>
</div>
