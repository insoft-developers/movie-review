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
                        <p>Found <span>{{ $movie_count }} movies</span> in total</p>
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

                    </div>
                    <div class="flex-wrap-movielist mv-grid-fw">
                        @foreach ($movie as $m)
                            <div class="movie-item-style-2 movie-item-style-1">
                                <img class="movie-poster" src="{{ $m->poster }}" alt="">
                                <div class="hvr-inner">
                                    <a href="{{ url('/movie/single/' . $m->slug) }}"> Read more <i
                                            class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6><a href="#">{{ $m->title }}</a></h6>
                                    <p class="rate"><i class="ion-android-star"></i><span>{{ $m->imdb_rating }}</span> /10
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="topbar-filter">
                        <label>Movies per page:</label>
                        <select id="movie_per_page_select">
                            <option <?php if ($movie_per_page_sub == '6') {
                                echo 'selected';
                            } ?> value="6">6 Movies</option>
                            <option <?php if ($movie_per_page_sub == '12') {
                                echo 'selected';
                            } ?> value="12">12 Movies</option>
                            <option <?php if ($movie_per_page_sub == '18') {
                                echo 'selected';
                            } ?> value="18">18 Movies</option>
                            <option <?php if ($movie_per_page_sub == '24') {
                                echo 'selected';
                            } ?> value="24">24 Movies</option>
                            <option <?php if ($movie_per_page_sub == '30') {
                                echo 'selected';
                            } ?> value="30">30 Movies</option>
                        </select>

                        <div class="pagination2">
                            {{ $movie->onEachSide(6)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
