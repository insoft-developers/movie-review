@extends('frontend.master')
@section('content')
    
        <div class="slider sliderv2">
            <div class="hero2"></div>
        </div>
    
    <div class="page-single movie-single movie_single" style="margin-top:-600px;padding-bottom:130px;">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{ $movie->poster }}" alt="">
                        <div class="movie-btn">
                            {{-- <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch
                                        Trailer</a></div>
                                <div><a href="https://www.youtube.com/embed/o-0hcF97wy0"
                                        class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a>
                                </div>
                            </div> --}}
                            <div onclick="download_()"  class="btn-transform transform-vertical">
                                <div><a href="javascript:void(0);" class="item item-1 yellowbtn"> <i class="ion-download"></i> Download</a></div>
                                <div><a  href="javascript:void(0);" class="item item-2 yellowbtn"><i class="ion-download"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $movie->title }} <span>{{ $movie->year }}</span></h1>
                        <div class="social-btn">
                            {{-- <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                            <div class="hover-bnt">
                                <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                <div class="hvr-item">
                                    <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>{{ $movie->imdb_rating }}</span> /10<br>
                                    <span class="rv">{{ $movie->imdb_votes }} Reviews</span>
                                </p>
                            </div>
                            <div class="rate-star">
                                <p>Rate This Movie: </p>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star-outline"></i>
                            </div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    
                                    <li class="active dw"><a href="#reviews"> Downloads</a></li>
                                    <li class="ov"><a href="#overview">Overview</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    
                                    <div id="reviews" class="tab review active">
                                        <div class="row">
                                            <?= $movie->download ;?>
                                        </div>
                                    </div>
                                    <div id="overview" class="tab">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>{{ $movie->plot }}</p>
                                                
                                                <div class="title-hd-sm">
                                                    <h4>cast</h4>
                                                    <a href="#" class="time">Full Cast & Crew <i
                                                            class="ion-ios-arrow-right"></i></a>
                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    @php
                                                        $actors = explode(",", $movie->actors);
                                                    @endphp

                                                    @foreach($actors as $actor)
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="{{ asset('template/frontend') }}/images/uploads/cast1.jpg" alt="">
                                                            <a href="#">{{ $actor }}</a>
                                                        </div>
                                                        <p>... {{$actor}}.</p>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                               
                                               
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>Director: </h6>
                                                    <p><a href="#">{{ $movie->director }}</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Writer: </h6>
                                                    <p><a href="#">{{ $movie->writer }}</a>
                                                    </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Stars: </h6>
                                                    <p>{{ $movie->actors }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Genres:</h6>
                                                    <p>{{ $movie->genre }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Release Date:</h6>
                                                    <p>{{ $movie->released }} ({{ $movie->country }})</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Run Time:</h6>
                                                    <p>{{ $movie->run_time }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>MMPA Rating:</h6>
                                                    <p>{{ $movie->rated }}</p>
                                                </div>
                                                
                                                <div class="ads">
                                                    <img src="{{ $movie->poster }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection