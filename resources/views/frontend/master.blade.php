<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>Movie-Reviews</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('template/frontend') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('template/frontend') }}/css/style.css">

    @include('frontend.css')


</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="{{ asset('template/frontend') }}/images/logo1.png" alt="" width="119"
            height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="login.php">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="signup.php">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder=""
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header full-width-hd">
        <div class="row">
            <nav id="mainNav" class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="{{ url('/') }}"><img class="logo"
                            src="{{ asset('template/frontend') }}/images/logo1.png" alt="" width="119"
                            height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn btn-default">
                                Home
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/movie/anime') }}" class="btn btn-default">
                                Anime
                            </a>
                        </li>
                        
                        <li class="dropdown first">
                            <a href="{{ url('/movie/all') }}" class="btn btn-default">
                                Movies
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown"
                                data-hover="dropdown">
                                TV Show <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                @php
                                    $sub = \App\Models\SubCategory::where('category_slug', 'tv-show')->get();
                                @endphp
                                @foreach($sub as $s)
                                <li class="list-menu"><a href="{{ url('/moviesub/'.$s->category_slug.'/'.$s->slug) }}">{{ $s->subcategory_name }}</a></li>
                                @endforeach
                                <li class="list-menu"><a href="{{ url('/movie/tv-show') }}">All TV Show</a></li>
                               
                                
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn btn-default">
                                How To Download
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn btn-default">
                                Report Dead Links
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn btn-default">
                                Simple Search
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn btn-default">
                                Advance Search
                            </a>
                        </li>
                       
                    </ul>
                    
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- search form -->
        </div>

    </header>
    <!-- END | Header -->

    @yield('content')

    <!--end of latest new v2 section-->
    <!-- footer v2 section-->
    <footer class="ht-footer full-width-ft">
        <div class="row">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index.html"><img class="logo" src="{{ asset('template/frontend') }}/images/logo1.png"
                            alt=""></a>
                    <p>5th Avenue st, manhattan<br>
                        New York, NY 10001</p>
                    <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blockbuster</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email">
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
            <div class="ft-copyright">
                <div class="ft-left">
                    <p>© 2017 Blockbuster. All Rights Reserved. Designed by leehari.</p>
                </div>
                <div class="backtotop">
                    <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer v2 section-->

    <script src="{{ asset('template/frontend') }}/js/jquery.js"></script>
    <script src="{{ asset('template/frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('template/frontend') }}/js/plugins2.js"></script>
    <script src="{{ asset('template/frontend') }}/js/custom.js"></script>
</body>

</html>
