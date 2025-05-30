@extends('frontend.master')
@section('content')
    <div class="hero">

    </div>
    <div class="page-single">
        <div class="container">
            @if($is_search == 'advance')
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 advance-container">
                    <div class="title-hd">
                        <h2>Advance Search</h2>

                    </div>
                    <form id="form-search-advance">
                        @csrf
                        <div class="col-md-12 form-it">

                            <div class="row">
                                <div class="col-md-12 form-it" style="margin-bottom: 10px;">
                                    <input id="name_search_advance" name="name_search_advance" type="text"
                                        placeholder="Search Movie Title">
                                </div>
                                <div class="col-md-2 form-it">
                                    <select id="type_search_advance" name="type_search_advance">
                                        <option value="">All Type</option>
                                        <option value="movie">Movie</option>
                                        <option value="tv-show">TV Show</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-it">
                                    <select id="genre_search_advance" name="genre_search_advance">
                                        <option value="">All Genre</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-it">
                                    <select id="rating_search_advance" name="rating_search_advance">
                                        <option value="">All Rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-it">
                                    @php
                                        $movies = \App\Models\MovieList::all();
                                        $tahun_release = [];
                                        foreach ($movies as $mvi) {
                                            $tahun = explode('–', $mvi->year);
                                            array_push($tahun_release, $tahun[0]);
                                        }

                                        $tahun_release = array_unique($tahun_release);
                                        sort($tahun_release);

                                    @endphp
                                    <select id="year_search_advance" name="year_search_advance">
                                        <option value="">All Year</option>
                                        @foreach ($tahun_release as $th)
                                            <option value="{{ $th }}">{{ $th }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 form-it">
                                    @php

                                        $list_langs = [];
                                        foreach ($movies as $m) {
                                            array_push($list_langs, $m->language);
                                        }

                                        $allLangs = [];

                                        foreach ($list_langs as $langs) {
                                            $langList = array_map('trim', explode(',', $langs));
                                            $allLangs = array_merge($allLangs, $langList);
                                        }

                                        $uniqueLang = array_unique($allLangs);
                                        sort($uniqueLang);

                                    @endphp
                                    <select id="lang_search_advance" name="lang_search_advance">
                                        <option value="">All Language</option>
                                        @foreach ($uniqueLang as $l)
                                            <option value="{{ $l }}">{{ $l }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 form-it">
                                    <select id="order_search_advance" name="order_search_advance">
                                        <option value="">Order By</option>
                                        <option value="newest">Newest</option>
                                        <option value="latest">Oldest</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mt-10">
                                    <button type="submit" class="btn btn-success btn-filter-advance">Filter</button>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
            @endif
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
