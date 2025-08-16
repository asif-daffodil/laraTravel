@props(['title' => 'User Dashboard'])
@include('components.user-header', ['title' => $title])

<body class="section-bg">
    <!-- start cssload-loader -->
    <div class="preloader"></div>
    <!-- end cssload-loader -->
    <!-- ================================
       START USER CANVAS MENU
================================= -->
    @include('components.user-canvas')
    <!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->

    <!-- ================================
       START DASHBOARD NAV
================================= -->
@include('components.user-sidenav')
    <!-- end sidebar-nav -->
    <!-- ================================
       END DASHBOARD NAV
================================= -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
        @include('components.user-nav')
        <!-- end dashboard-nav -->
        @yield('content')
        <!-- end dashboard-content-wrap -->
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    @include('components.user-footer')

    <!-- ================================
    START BACK TO TOP
