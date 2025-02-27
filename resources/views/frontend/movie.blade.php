@extends('frontend.master')
@section('content')
    <div class="hero">

    </div>
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title-hd">
                        <h2>{{ $judul }}</h2>

                    </div>
                    <div class="topbar-filter fw">
                        <p>Found <span>1,608 movies</span> in total</p>
                        <label>Sort by:</label>
                        <select>
                            <option value="popularity">Popularity Descending</option>
                            <option value="popularity">Popularity Ascending</option>
                            <option value="rating">Rating Descending</option>
                            <option value="rating">Rating Ascending</option>
                            <option value="date">Release date Descending</option>
                            <option value="date">Release date Ascending</option>
                        </select>
                        <a href="movielist.html" class="list"><i class="ion-ios-list-outline "></i></a>
                        <a href="moviegridfw.html" class="grid"><i class="ion-grid active"></i></a>
                    </div>
                    <div class="flex-wrap-movielist mv-grid-fw">
                        @foreach ($movie as $m)
                            <div class="movie-item-style-2 movie-item-style-1">
                                <img class="movie-poster" src="{{ $m->poster }}" alt="">
                                <div class="hvr-inner">
                                    <a href="{{ url('/movie/single/'.$m->slug) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6><a href="#">{{ $m->title }}</a></h6>
                                    <p class="rate"><i class="ion-android-star"></i><span>{{ $m->imdb_rating }}</span> /10</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="topbar-filter">
                        <label>Movies per page:</label>
                        <select>
                            <option value="range">20 Movies</option>
                            <option value="saab">10 Movies</option>
                        </select>

                        <div class="pagination2">
                            <span>Page 1 of 2:</span>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">78</a>
                            <a href="#">79</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
