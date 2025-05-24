@extends('frontend.master')


@section('content')
    <div class="slider sliderv2">
        <div class="hero">

        </div>
    </div>

    <div class="movie-items  full-width">
        <div class="row" style="margin-top:-50px; margin-bottom:-60px;">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>Popular</h2>
                    <a href="{{ url('movie/popular') }}" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">

                    <div class="tab-content">
                        <div id="tab1-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">

                                    @foreach ($popular as $m)
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img class="movie-poster" src="{{ $m->poster }}" alt="">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="{{ url('/movie/single/' . $m->slug) }}"> Read more <i
                                                            class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">{{ $m->title }}</a></h6>
                                                    <p><i class="ion-android-star"></i><span>{{ $m->imdb_rating }}</span>
                                                        /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tabs tab-bawah">

                    <div class="tab-content">
                        <div id="tab21-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($new as $n)
                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img ">
                                                    <img class="movie-poster" src="{{ $n->poster }}" alt="">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="{{ url('/movie/single/' . $n->slug) }}"> Read more <i
                                                            class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="#">{{ $n->title }}</a></h6>
                                                    <p><i class="ion-android-star"></i><span>{{ $n->imdb_rating }}</span>
                                                        /10</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="trailers full-width" style="margin-bottom: -80px;margin-top:-40px;">
        <div class="row ipad-width">
            <div class="col-md-8 col-sm-12 col-xs-12">
              
                <div class="flex-wrap-movielist">
                    @foreach ($movie as $m)
					<div class="movie-item-style-2 movie-item-style-1 little-movie">
                        <a href="{{ url('/movie/single/'.$m->slug) }}"><img class="grid-movie" src="{{ $m->poster }}" alt=""></a>
                        
                        
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="searh-form">
                        <h4 class="sb-title">Search for movie</h4>
                        <form class="form-style-1" action="#">
                            <div class="row">
                                <div class="col-md-12 form-it">
                                    <label>Movie name</label>
                                    <input type="text" placeholder="Enter keywords">
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Genres & Subgenres</label>
                                    <div class="group-ip">
                                        <select name="skills" multiple="" class="ui fluid dropdown">
                                            <option value="">Enter to filter genres</option>
                                            <option value="Action1">Action 1</option>
                                            <option value="Action2">Action 2</option>
                                            <option value="Action3">Action 3</option>
                                            <option value="Action4">Action 4</option>
                                            <option value="Action5">Action 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Rating Range</label>
                                    <select>
                                        <option value="range">-- Select the rating range below --</option>
                                        <option value="saab">-- Select the rating range below --</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Release Year</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">From</option>
                                                <option value="number">10</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">To</option>
                                                <option value="number">20</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <input class="submit" type="submit" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                    
                </div>
            </div>
        </div>

    </div> --}}

    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        {{-- <p>Found <span>1,608 movies</span> in total</p> --}}
                        <label>Sort by:</label>
                        <select id="order_movie_select">
                            <option <?php if ($movie_order == 'pop_desc') {
                                echo 'selected';
                            } ?> value="pop_desc">Popularity Descending</option>
                            <option <?php if ($movie_order == 'pop_asc') {
                                echo 'selected';
                            } ?> value="pop_asc">Popularity Ascending</option>
                            <option <?php if ($movie_order == 'rating_desc') {
                                echo 'selected';
                            } ?> value="rating_desc">Rating Descending</option>
                            <option <?php if ($movie_order == 'rating_asc') {
                                echo 'selected';
                            } ?> value="rating_asc">Rating Ascending</option>
                            <option <?php if ($movie_order == 'release_desc') {
                                echo 'selected';
                            } ?> value="release_desc">Release date Descending</option>
                            <option <?php if ($movie_order == 'release_asc') {
                                echo 'selected';
                            } ?> value="release_asc">Release date Ascending</option>
                        </select>

                        <a href="{{ url('movie/all') }}" class="grid"><i class="ion-grid"></i></a>
                    </div>
                    @foreach ($mlist as $m)
                        <div class="movie-item-style-2">
                            <img class="list-poster" src="{{ $m->poster }}" alt="">
                            <div class="mv-item-infor">
                                <h6><a href="{{ url('/movie/single/' . $m->slug) }}">{{ $m->title }}
                                        <span>({{ $m->year }})</span></a></h6>
                                <p class="rate"><i class="ion-android-star"></i><span>{{ $m->imdb_rating }}</span> /10
                                </p>
                                <p class="describe">{{ $m->plot }} ...</p>
                                <p class="run-time"> Run Time: {{ $m->run_time }} . <span>MMPA: {{ $m->rated }}
                                    </span> . <span>Release: {{ $m->released }}</span></p>
                                <p>Director: <a href="#">{{ $m->director }}</a></p>
                                <p>Stars: {{ $m->actors }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="topbar-filter">
                        <label>Movies per page:</label>
                        <select id="movie_per_page_select">
                            <option value="5" <?php if ($movie_per_page == '5') {
                                echo 'selected';
                            } ?>>5 Movies</option>
                            <option value="10" <?php if ($movie_per_page == '10') {
                                echo 'selected';
                            } ?>>10 Movies</option>
                            <option value="15" <?php if ($movie_per_page == '15') {
                                echo 'selected';
                            } ?>>15 Movies</option>
                            <option value="20" <?php if ($movie_per_page == '20') {
                                echo 'selected';
                            } ?>>20 Movies</option>
                            <option value="25" <?php if ($movie_per_page == '25') {
                                echo 'selected';
                            } ?>>25 Movies</option>
                        </select>
                        <div class="pagination2">
                            {{ $mlist->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Search for movie/TV Show</h4>
                            <form id="form-cari" class="form-style-1">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Movie/Tv Show name</label>
                                        <input id="search_movie_name" name="search_movie_name" type="text" placeholder="Enter movie name">
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Type</label>

                                        <select id="search_movie_type" name="search_movie_type">
                                            <option value="">All Type</option>
                                            <option value="movie">Movie</option>
                                            <option value="tv-show">TV Show</option>

                                        </select>


                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Genre</label>

                                        <select id="search_movie_genre" name="search_movie_genre">
                                            <option value="">Pilih Type Dahulu</option>
                                            
                                        </select>

                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Release Year</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select id="search_movie_year" name="search_movie_year">

                                                    <option value="">All Year</option>
                                                    @foreach ($tahun_release as $th)
                                                        <option value="{{ $th }}">{{ $th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="ads">
                            <img src="images/uploads/ads1.png" alt="">
                        </div>
                        <div class="sb-facebook sb-it">
                            <h4 class="sb-title">Find us on Facebook</h4>
                            <iframe src=""
                                data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhaintheme%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
                                height="315" style="width:100%;border:none;overflow:hidden"></iframe>
                        </div>
                        <div class="sb-twitter sb-it">
                            <h4 class="sb-title">Tweet to us</h4>
                            <div class="slick-tw">
                                <div class="tweet item" id="599202861751410688">
                                </div>
                                <div class="tweet item" id="297462728598122498">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
