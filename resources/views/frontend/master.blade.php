<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

@php
$setting = \App\Models\Setting::find(1);
@endphp

<head>
    <!-- Basic need -->
    <title>{{ $setting->app_title }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <link rel="shortcut icon" href="{{ asset('template/setting/'.$setting->app_icon) }}">
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('template/frontend') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('template/frontend') }}/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    @include('frontend.css')


</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="{{ asset('template/setting/'.$setting->app_icon) }}" alt="" width="119"
            height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    @php
        $subs = [];
        $lists = \App\Models\MovieList::where('category', 'movie')->get();
        foreach ($lists as $list) {
            $gen = explode(', ', $list->genre);
            array_push($subs, $gen);
        }

        $merged = array_merge(...$subs);

        $subcat = array_unique($merged);

        $subs2 = [];
        $lists2 = \App\Models\MovieList::where('category', 'tv-show')->get();
        foreach ($lists2 as $list2) {
            $gen2 = explode(', ', $list2->genre);
            array_push($subs2, $gen2);
        }

        $merged2 = array_merge(...$subs2);

        $subcat2 = array_unique($merged2);

    @endphp
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
                            src="{{ asset('template/setting/'.$setting->app_icon) }}" alt="" width="119"
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
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown"
                                data-hover="dropdown">
                                Movies <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li class="list-menu"><a href="{{ url('/movie/all') }}">All Movie</a></li>
                                @foreach ($subcat as $s)
                                    <li class="list-menu"><a
                                            href="{{ url('/moviesub/movie/' . $s) }}">{{ $s }}</a></li>
                                @endforeach



                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown"
                                data-hover="dropdown">
                                TV Show <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li class="list-menu"><a href="{{ url('/movie/tv-show') }}">All TV Show</a></li>
                                @foreach ($subcat2 as $s)
                                    <li class="list-menu"><a
                                            href="{{ url('/moviesub/tv-show/' . $s) }}">{{ $s }}</a></li>
                                @endforeach



                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/how-to-download') }}" class="btn btn-default">
                                How To Download
                            </a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/report-link') }}" class="btn btn-default">
                                Report Dead Links
                            </a>
                        </li>

                        <li class="dropdown first">
                            <a href="{{ url('/movie-list-search/advance') }}" class="btn btn-default">
                                Advance Search
                            </a>
                        </li>
                        <li class="dropdown first">
                            @php
                                $mvs = \App\Models\MovieList::all();
                            @endphp
                            <select class="quick-search" id="simple_search_select" name="simple_search_select">
                                <option value="" disabled selected>&nbsp;Quick Search</option>
                                @foreach ($mvs as $m)
                                    <option value="{{ $m->slug }}" data-image="{{ $m->poster }}">
                                        {{ $m->title }}</option>
                                @endforeach
                            </select>
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



    <footer class="ht-footer full-width-ft">

        <div class="row">

            <div class="ft-copyright" style="margin-left:20%;">
                <div class="ft-left">
                    <p><a style="color:white;" href="{{ url('how-to-download') }}">How to
                            Download</a>&nbsp;&nbsp;|&nbsp; <a style="color:white;"
                            href="{{ url('report-link') }}">Report Dead Links</a>&nbsp;&nbsp;|&nbsp; <a
                            style="color:white;" href="{{ url('footer/request_us') }}">Request
                            Us</a>&nbsp;&nbsp;|&nbsp; <a style="color:white;"
                            href="{{ url('footer/dmca') }}">DMCA</a>&nbsp;&nbsp;|&nbsp; <a style="color:white;"
                            href="{{ url('footer/contact_us') }}">Contact Us</a>&nbsp;&nbsp;|&nbsp; <a
                            style="color:white;" href="{{ url('footer/about_us') }}">About Us</a>&nbsp;&nbsp;|&nbsp;
                        <a style="color:white;" href="{{ url('footer/site_disclaimer') }}">Site Disclaimer</a>
                    </p>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        var cuty_token = 'b39fe1f40fb2094747ff30963';
        var include_domains = ["filecrypt.cc"];
    </script>
    <script src="https://cdn.cuty.io/fps.js"></script>


    <script>
        $("#simple_search_select").select2(
        {
    templateResult: formatOption,
    templateSelection: formatOption,
   // optional: hide search box
  });

        function formatOption(option) {
            if (!option.id) return option.text;
            const image = $(option.element).data('image');
            return $(
            `<span><img src="${image}" style="width:20px; height:30px; margin-right:5px;border-radius:4px;" />${option.text}</span>`);
        }

        $("#form-search-advance").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('search.advance') }}",
                type: "POST",
                dataType: "JSON",
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                    window.location = "{{ url('/movie-advance-search') }}";
                }
            })

        });


        $("#type_search_advance").change(function() {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var nilai = $(this).val();
            $.ajax({
                url: "{{ route('movie.type.change') }}",
                type: "POST",
                dataType: "JSON",
                data: {
                    "selected": nilai,
                    "_token": csrf_token
                },
                success: function(data) {
                    var html = '';
                    html += '<option value="">Select Genre</option>';
                    for (var i = 0; i < data.data.length; i++) {
                        html += '<option value="' + data.data[i] + '">' + data.data[i] + '</option>';
                    }

                    if (nilai == '') {
                        $("#genre_search_advance").html('<option value="">All Gebre</option>');
                    } else {
                        $("#genre_search_advance").html(html);
                    }


                }
            })
        });


        $("#simple_search_movie_title").select2();

        function simple_search() {
            $("#modal-search").slideDown(500);
        }


        function advance_search() {
            $("#modal-advance").slideDown(500);
        }


        $('#simple_search_select').change(function() {
            var slug = $(this).val();
            console.log(slug);
            window.location.href = "{{ url('movie/single') }}" + "/" + slug; // pindah ke link yang dipilih

        });

        function search_modal_close() {
            $("#modal-search").slideUp(500);
        }

        function search_advance_close() {
            $("#modal-advance").slideUp(500);
        }
        // $('#modal-search').mouseleave(function() {
        //     $(this).slideUp(100);
        // });
    </script>


    @if ($view == 'movie-search')
        <script>
            const is_search = "<?= $is_search ?>";

            $("#movie_per_page_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('movie.per.page.search') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        if (is_search == 'advance') {
                            window.location = "{{ url('/movie-advance-search') }}";
                        } else {
                            window.location = "{{ url('/movie-list-search') }}" + "/" + is_search;
                        }

                    }
                })
            })


            $("#order_movie_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('order.movie.search') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        if (is_search == 'advance') {
                            window.location = "{{ url('/movie-advance-search') }}";
                        } else {
                            window.location = "{{ url('/movie-list-search') }}" + "/" + is_search;
                        }
                    }
                })
            })
        </script>
    @endif
    @if ($view == 'movie' || 'sub-movie')
        <script>
            $("#movie_per_page_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                let segment1 = window.location.pathname.split('/')[1];
                let segment2 = window.location.pathname.split('/')[2];

                $.ajax({
                    url: "{{ route('movie.per.page.sub') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        console.log(segment1);
                        console.log(segment2);
                        if (segment1 == 'movie' && segment2 == 'all') {
                            window.location = "{{ url('/movie/all') }}";
                        } else if (segment1 == 'movie' && segment2 == 'anime') {
                            window.location = "{{ url('/movie/anime') }}";
                        } else if (segment1 == 'movie' && segment2 == 'tv-show') {
                            window.location = "{{ url('/movie/tv-show') }}";
                        } else if (segment1 == 'movie' && segment2 == 'popular') {
                            window.location = "{{ url('/movie/popular') }}";
                        } else if (segment1 == 'moviesub' && segment2 == 'movie') {
                            let segment3 = window.location.pathname.split('/')[3];
                            window.location = "{{ url('/moviesub/movie') }}" + '/' + segment3;

                        } else if (segment1 == 'moviesub' && segment2 == 'tv-show') {
                            let segment3 = window.location.pathname.split('/')[3];
                            window.location = "{{ url('/moviesub/tv-show') }}" + '/' + segment3;

                        }

                    }
                })
            })


            $("#order_movie_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                let segment1 = window.location.pathname.split('/')[1];
                let segment2 = window.location.pathname.split('/')[2];
                $.ajax({
                    url: "{{ route('order.movie.sub') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        if (segment1 == 'movie' && segment2 == 'all') {
                            window.location = "{{ url('/movie/all') }}";
                        } else if (segment1 == 'movie' && segment2 == 'anime') {
                            window.location = "{{ url('/movie/anime') }}";
                        } else if (segment1 == 'movie' && segment2 == 'tv-show') {
                            window.location = "{{ url('/movie/tv-show') }}";
                        } else if (segment1 == 'movie' && segment2 == 'popular') {
                            window.location = "{{ url('/movie/popular') }}";
                        } else if (segment1 == 'moviesub' && segment2 == 'movie') {
                            let segment3 = window.location.pathname.split('/')[3];
                            window.location = "{{ url('/moviesub/movie') }}" + '/' + segment3;

                        } else if (segment1 == 'moviesub' && segment2 == 'tv-show') {
                            let segment3 = window.location.pathname.split('/')[3];
                            window.location = "{{ url('/moviesub/tv-show') }}" + '/' + segment3;

                        }
                    }
                })
            })
        </script>
    @endif


    @if ($view == 'home')
        <script>
            $("#search_movie_type").change(function() {
                var selected = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('movie.type.change') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "selected": selected,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.data.length; i++) {
                            html += '<option value="' + data.data[i] + '">' + data.data[i] + '</option>';
                        }
                        $("#search_movie_genre").html(html);
                    }
                });
            })

            $("#form-cari").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('movie.home.search') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        window.location = "{{ url('movie-list-search') }}" + "/home";
                    }
                })

            });

            $("#movie_per_page_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('movie.per.page') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        window.location = "{{ url('/') }}";
                    }
                })
            })


            $("#order_movie_select").change(function() {
                var nilai = $(this).val();
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('order.movie') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "nilai": nilai,
                        "_token": csrf_token
                    },
                    success: function(data) {
                        window.location = "{{ url('/') }}";
                    }
                })
            })
        </script>
    @endif
    @if ($view == 'single')
        <script>
            function download_() {
                $(".dw").addClass('active');
                $(".ov").removeClass('active');
                $("#overview").hide();
                $("#reviews").show();
            }
        </script>
    @endif
    @if ($view == 'report-link')
        <script>
            function reply(id) {
                var name = $("#name_" + id).val();
                $("#level").val(2);
                $("#sub_level").val(id);
                $("#message_title").text("Reply To " + name);
                $('html, body').animate({
                    scrollTop: $('#target-div').offset().top
                }, 800); // 800ms = durasi scroll

                $("#cancel_reply_btn").show();
            }

            function cancel_reply() {
                $("#level").val(1);
                $("#sub_level").val(1);
                $("#message_title").text("Leave a comment");
                $("#cancel_reply_btn").hide();
            }
        </script>
    @endif
</body>

</html>
