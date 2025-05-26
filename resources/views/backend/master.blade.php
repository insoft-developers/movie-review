@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Page Title -->
    <title>{{ $setting->app_name }} - Admin Panel</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/setting/'.$setting->app_icon) }}">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/v/bs4/dt-2.2.2/b-3.2.2/b-html5-3.2.2/r-3.0.4/datatables.min.css"
        rel="stylesheet" integrity="sha384-AjhUECQ2dPlgimnJrvrWabv2nXMqRXvZ+aC705N/dTbjsgwyni+Sh71GqXpthwn0"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/fonts/icofont/icofont.min.css">
    <link rel="stylesheet"
        href="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">


    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/plugins/apex/apexcharts.css">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/css/style.css">
    <!-- ======= END MAIN STYLES ======= -->

    @include('backend.css')

</head>

<body>

    <!-- Offcanval Overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- Offcanval Overlay -->

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Header -->
        <header class="header fixed-top d-flex align-content-center flex-wrap">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html" class="default-logo"><img src="{{ asset('template/setting/'.$setting->app_icon) }}"
                        alt=""></a>
                <a href="index.html" class="mobile-logo"><img
                        src="{{ asset('template/setting/'.$setting->app_icon) }}" alt=""></a>
            </div>
            <!-- End Logo -->

            <!-- Main Header -->
            <div class="main-header">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-3 col-lg-1 col-xl-4">
                            <!-- Header Left -->
                            <div class="main-header-left h-100 d-flex align-items-center">
                                <!-- Main Header User -->
                                <div class="main-header-user">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                        <div class="menu-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>

                                        <div class="user-profile d-xl-flex align-items-center d-none">
                                            <!-- User Avatar -->
                                            <div class="user-avatar">
                                                <img src="{{ asset('template/backend') }}/assets/img/avatar/user.png"
                                                    alt="">
                                            </div>
                                            <!-- End User Avatar -->

                                            <!-- User Info -->
                                            <div class="user-info">
                                                <h4 class="user-name">Abrilay Khatun</h4>
                                                <p class="user-email">abrilakh@gmail.com</p>
                                            </div>
                                            <!-- End User Info -->
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ url('mvadmin/profile') }}">My Profile</a>

                                        <a href="{{ url('mvadmin/change_password') }}">Change Password</a>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>
                                        <!-- Form Logout Tersembunyi -->
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <!-- End Main Header User -->

                                <!-- Main Header Menu -->
                                <div class="main-header-menu d-block d-lg-none">
                                    <div class="header-toogle-menu">
                                        <!-- <i class="icofont-navigation-menu"></i> -->
                                        <img src="{{ asset('template/backend') }}/assets/img/menu.png" alt="">
                                    </div>
                                </div>
                                <!-- End Main Header Menu -->
                            </div>
                            <!-- End Header Left -->
                        </div>
                        <div class="col-9 col-lg-11 col-xl-8">
                            <!-- Header Right -->
                            <div class="main-header-right d-flex justify-content-end">
                                <ul class="nav">

                                    <li class="d-none d-lg-flex">
                                        <!-- Main Header Time -->
                                        <div class="main-header-date-time text-right">
                                            <h3 class="time">
                                                <span id="hours">21</span>
                                                <span id="point">:</span>
                                                <span id="min">06</span>
                                            </h3>
                                            <span class="date"><span id="date">Tue, 12 October
                                                    2019</span></span>
                                        </div>
                                        <!-- End Main Header Time -->
                                    </li>




                                </ul>
                            </div>
                            <!-- End Header Right -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Header -->
        </header>
        <!-- End Header -->

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <!-- Sidebar -->
            @include('backend.sidebar')
            <!-- End Sidebar -->

            <!-- Main Content -->
            @yield('content')
            <!-- End Main Content -->
        </div>
        <!-- End Main Wrapper -->

        <!-- Footer -->
        <footer class="footer">
            Admin Dashboard © {{ date('Y') }} created by <a href="{{ url('/') }}"> &nbsp;{{ $setting->app_name }}</a>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- End wrapper -->

    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="{{ asset('template/backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/js/script.js"></script>



    <script src="https://cdn.datatables.net/v/bs4/dt-2.2.2/b-3.2.2/b-html5-3.2.2/r-3.0.4/datatables.min.js"
        integrity="sha384-QYx+e+h0/wTRuCb22Ij/3LhXcUuAx6pjUVBDofvZoPzJKCiyx5ZY4M6T2cVAOPl6" crossorigin="anonymous">
    </script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="{{ asset('template/backend') }}/assets/plugins/apex/apexcharts.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/plugins/apex/custom-apexcharts.js"></script>

    <script src="{{ asset('template/backend') }}/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->


    @include('backend.js')

</body>

</html>
