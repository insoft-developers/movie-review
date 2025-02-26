@extends('frontend.master')


@section('content')
    <div class="slider sliderv2">
        <div class="container">
            <div class="row">
                <div class="slider-single-item">
                    @foreach ($banners as $banner)
                        <div class="movie-item">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="title-in">
                                        <div class="cate">
                                            @php
                                                $genres = explode(',', $banner->genre);
                                            @endphp
                                            @foreach ($genres as $g)
                                                <span class="orange"><a href="#">{{ $g }}</a></span>
                                            @endforeach
                                        </div>
                                        <h1><a href="#">{{ $banner->title }}<span>{{ $banner->year }}</span></a>
                                        </h1>
                                        
                                        <div class="mv-details">
                                            <p><i class="ion-android-star"></i><span>{{ $banner->imdb_rating }}</span>
                                                /10</p>
                                            <ul class="mv-infor">
                                                <li> Run Time: {{ $banner->run_time }} </li>
                                                <li> Rated: {{ $banner->rated }} </li>
                                                <li> Release: {{ $banner->released }}</li>
                                            </ul>
                                        </div>
                                        <div class="btn-transform transform-vertical">
                                            <div><a href="{{ url('/movie/single/'.$banner->slug) }}" class="item item-1 redbtn">more detail</a></div>
                                            <div><a href= "{{ url('/movie/single/'.$banner->slug) }}" class="item item-2 redbtn hvrbtn">more detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="mv-img-2">
                                        <a href="#"><img src="{{ $banner->poster }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
                                                    <a href="{{ url('/movie/single/'.$m->slug) }}"> Read more <i
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
                                                    <a href="{{ url('/movie/single/'.$n->slug) }}"> Read more <i
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
                    @foreach($movie as $m)
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
                                        <select>
                                                <option value="popularity">Popularity Descending</option>
                                                <option value="popularity">Popularity Ascending</option>
                                                <option value="rating">Rating Descending</option>
                                                <option value="rating">Rating Ascending</option>
                                                <option value="date">Release date Descending</option>
                                                <option value="date">Release date Ascending</option>
                                        </select>
                                        <a href="movielist.html" class="list"><i class="ion-ios-list-outline active"></i></a>
                                        <a  href="moviegrid.html" class="grid"><i class="ion-grid"></i></a>
                                </div>
								@foreach($mlist as $m)
                                <div class="movie-item-style-2">
                                        <img class="list-poster" src="{{ $m->poster }}" alt="">
                                        <div class="mv-item-infor">
                                                <h6><a href="{{ url('/movie/single/'.$m->slug) }}">{{ $m->title }} <span>({{ $m->year }})</span></a></h6>
                                                <p class="rate"><i class="ion-android-star"></i><span>{{ $m->imdb_rating }}</span> /10</p>
                                                <p class="describe">{{ $m->plot }} ...</p>
                                                <p class="run-time"> Run Time: {{ $m->run_time }}    .     <span>MMPA: {{ $m->rated }} </span>    .     <span>Release: {{ $m->released }}</span></p>
                                                <p>Director: <a href="#">{{ $m->director }}</a></p>
                                                <p>Stars: {{ $m->actors }}</p>
                                        </div>
                                </div>
                                @endforeach
                                <div class="topbar-filter">
                                        <label>Movies per page:</label>
                                        <select>
                                                <option value="5">5 Movies</option>
                                                <option value="10">10 Movies</option>
                                                <option value="15">15 Movies</option>
                                                <option value="20">20 Movies</option>
                                                <option value="25">25 Movies</option>
                                        </select>
                                        <div class="pagination2">
                                                {{ $mlist->onEachSide(5)->links() }}
                                        </div>
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
                                                                                <select
                                                                                        name="skills" multiple="" class="ui fluid dropdown">
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
                                                                                <option value="saab">-- Select the rating range below --</option>
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
                                                                                                <option value="number">20</option>
                                                                                                <option value="number">30</option>
                                                                                        </select>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                        <select>
                                                                                                <option value="range">To</option>
                                                                                                <option value="number">20</option>
                                                                                                <option value="number">30</option>
                                                                                                <option value="number">40</option>
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
                                                <iframe src="" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhaintheme%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
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
