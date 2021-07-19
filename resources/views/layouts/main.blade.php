<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Fonik - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body data-sidebar="dark">

<!-- Loader -->
{{-- <div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div> --}}

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png') }} " alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="d-none d-sm-block ms-2">
                    <h4 class="page-title font-size-18">Dashboard</h4>
                </div>

            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input form-control" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-bs-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                        data-bs-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-none d-md-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="me-2" src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="Header Language" height="16"> English
                        <span class="mdi mdi-chevron-down"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('assets/images/flags/germany_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('assets/images/flags/italy_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('assets/images/flags/french_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('') }}assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Spanish </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('') }}assets/images/flags/russia_flag.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle"> Russian </span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ion ion-md-notifications"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item">
                                <div class="media d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle font-size-16">
                                            <i class="mdi mdi-glass-cocktail"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="p-2 border-top text-center">
                            <a class="btn btn-sm btn-link font-size-14 w-100" href="javascript:void(0)">
                                View all
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                            alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                            Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle me-2"></i> My
                            Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">5</span><i
                                class="dripicons-gear font-size-16 align-middle me-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock font-size-16 align-middle me-2"></i> Lock
                            screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                            Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
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
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="index.html" class="waves-effect">
                            <i class="dripicons-device-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-suitcase"></i>
                            <span> User Interface </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-lightbox.html">Lightbox</a></li>
                            <li><a href="ui-navs.html">Navs</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-popover-tooltips.html">Popover &amp; Tooltips</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-video.html">Video</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-sweet-alert.html">Sweetalert</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-mail"></i>
                            <span> Email </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class=" waves-effect">
                            <i class="dripicons-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="dripicons-blog"></i><span class="badge rounded-pill bg-success float-end">9</span>
                            <span> Forms </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-editors.html">Form Editor</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-box"></i>
                            <span> Icons </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-ion.html">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-graph-line"></i>
                            <span> Charts </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="charts-morris.html">Morris Charts</a></li>
                            <li><a href="charts-chartist.html">Chartist Charts</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                            <li><a href="charts-flot.html">Flot Charts</a></li>
                            <li><a href="charts-c3.html">C3 Charts</a></li>
                            <li><a href="charts-other.html">Jquery Knob Charts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-list"></i>
                            <span> Tables </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="dripicons-map"></i><span class="badge rounded-pill bg-danger float-end">2</span>
                            <span> Maps </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="maps-google.html"> Google Maps</a></li>
                            <li><a href="maps-vector.html"> Vector Maps</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Extras</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-inbox"></i>
                            <span> Layouts </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span>Vertical</span>
                                </a>
                                <ul>
                                    <li><a href="layout-light-sidebar.html">Light Sidebar</a></li>
                                    <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span>Horizontal</span>
                                </a>
                                <ul>
                                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                    <li><a href="layouts-hori-boxed-width.html">Boxed Width</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-heart"></i>
                            <span> Advanced UI </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="advanced-animation.html">Animation</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-rating.html">Ratings</a></li>
                            <li><a href="advanced-nestable.html">Nestable</a></li>
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-copy"></i>
                            <span> Pages </span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-directory.html">Directory</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-starter.html">Starter Page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-network-1"></i>
                            <span>Multi Level</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

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
            <div class="header-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-4 pt-5">
                            <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>

                            <div class="mt-4 text-center">
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2017</button>
                                <button type="button" class="btn btn-outline-info ms-1 waves-effect waves-light">Year
                                    2018</button>
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2019</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">15,852</h3> Monthly Statistics
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">9,514</h3> New Orders
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">289</h3> New Users
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">5,220</h3> Unique Visitors
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Earnings</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Email Sent</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Month</p>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Herbert C. Patton
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $14,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Mathias N. Klausen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Waiting payment</td>
                                                <td>
                                                    $8,541
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Nikolaj S.
                                                    Henriksen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $954
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Lasse C. Overgaard
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                                                    Payment expired</td>
                                                <td>
                                                    $44,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg" alt="user-image"
                                                        class="avatar-sm rounded-circle me-2" /> Kasper S. Jessen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $8,844
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Recent Activity Feed</h4>

                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <span class="date">Sep 25</span>
                                        <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                    </li>

                                    <li class="feed-item">
                                        <span class="date">Sep 24</span>
                                        <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 23</span>
                                        <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 21</span>
                                        <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 18</span>
                                        <span class="activity-text">Created need “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 17</span>
                                        <span class="activity-text">Attending the event “Some New Event”. Responded
                                            to needed.</span>
                                    </li>
                                    <li class="feed-item pb-0">
                                        <span class="activity-text">
                                            <a href="#" class="text-primary">More Activities</a>
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        ©
                        <script>document.write(new Date().getFullYear())</script> Fonik<span class="d-none d-sm-inline-block"> -
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('assets/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('assets/css/app-dark.min.css') }}" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('assets/css/app-rtl.min.css') }}" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div> 

<!-- Scripts -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!--Morris Chart-->
<script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>



</body>

</html>