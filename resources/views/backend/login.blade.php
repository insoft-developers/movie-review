<!DOCTYPE html>
<html lang="zxx">
@php
    $setting = \App\Models\Setting::find(1);
@endphp

<head>
    <!-- Page Title -->
    <title>{{ $setting->app_name }} - Login</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/setting/' . $setting->app_icon) }}">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/fonts/icofont/icofont.min.css">
    <link rel="stylesheet"
        href="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/css/style.css">
    <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <h4 class="mb-5 font-20">Welcome To {{ $setting->app_name }} Admin</h4>

                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="email" class="mb-2 font-14 bold">Email Address</label>
                                <input value="{{ old('email') }}" type="email" id="email" name="email"
                                    class="theme-input-style" placeholder="Email Address">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold">Password</label>
                                <input type="password" id="password" name="password" class="theme-input-style"
                                    placeholder="********">
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-between mb-20">


                                <a href="forget-pass.html" class="font-12 text_color">Forgot Password?</a>
                            </div>



                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn long mr-20">Log In</button>
                            </div>
                        </form>
                        <div style="margin-top:50px"></div>
                        @if ($errors->any())
                            <div style="color:red;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer style--two">
        Movie Panel © {{ date('Y') }} created by <a href="#"> Insoft Developers</a>
    </footer>
    <!-- End Footer -->

    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="{{ asset('template/backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('template/backend') }}/assets/js/script.js"></script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
</body>

</html>
