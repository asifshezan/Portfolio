<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('contents/admin')}}/images/favicon.ico">
        <!-- plugin css -->
        <link href="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('contents/admin')}}/css/preloader.min.css" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{asset('contents/admin')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('contents/admin')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('contents/admin')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('contents/admin')}}/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('contents/admin')}}/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('contents/admin')}}/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>
                            <li>
                                <a href="{{ route('admin.dashboard.index')}}">
                                    <i class="mdi mdi-home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.index')}}" class="">
                                    <i class="mdi mdi-account-edit"></i>
                                    <span data-key="t-about">About Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('skill.index') }}" class="">
                                    <i class="mdi mdi-run-fast"></i>
                                    <span data-key="t-skill">Skill Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('service.index') }}" class="">
                                    <i class="mdi mdi-sitemap-outline"></i>
                                    <span data-key="t-services">Services Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('experience.index')}}" class="">
                                    <i class="mdi mdi-briefcase-account"></i>
                                    <span data-key="t-expericence">Expericence Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('education.index')}}" class="">
                                    <i class="mdi mdi-book-education"></i>
                                    <span data-key="t-education">Education Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio_category.index')}}" class="">
                                    <i class="bx bx-body"></i>
                                    <span data-key="t-portfolio">Portfolio Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact.index') }}" class="">
                                    <i class="bx bxs-contact"></i>
                                    <span data-key="t-contact">Contact Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact_mess.index') }}" class="">
                                    <i class="bx bxl-messenger"></i>
                                    <span data-key="t-contact">Contact Message</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('website.about')}}" target="_blank" class="">
                                    <i class="bx bx-globe"></i>
                                    <span data-key="t-website">Website</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard/basic_info') }}" class="">
                                    <i class="mdi mdi-account-cog"></i>
                                    <span data-key="t-contact">Basic Information</span>
                                </a>
                            </li>
                            <form action="{{ route('logout')}}" method="POST" id="logout-form">
                            @csrf
                                <li>
                                    <a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout font-size-16 align-middle me-1 text-danger"></i>Logout</a>
                                    </a>
                                </li>
                            </form>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Asif Ahamed.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Asif Ahamed</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="{{asset('contents/admin')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="{{asset('contents/admin')}}/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('contents/admin')}}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="{{asset('contents/admin')}}/js/pages/dashboard.init.js"></script>

        <script src="{{asset('contents/admin')}}/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jan 2022 09:08:26 GMT -->
</html>
