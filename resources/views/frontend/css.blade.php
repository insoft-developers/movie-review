
@if($view == 'home')
<style>
    .header{
        background: transparent !important;
    }


</style>
@endif

<style>
    

    .advance-container {
        background: #2424245e;
        padding-top: 27px;
        padding-bottom: 27px;
        padding-left: 17px;
        padding-right: 17px;
        border-radius: 5px;
        margin-bottom: 50px;
    }

    .select2-container {
        width: 200px !important;
        padding-left: 23px !important;
    }

    .quick-search {}

    .btn-filter-advance {
        margin-top: 27px;
    }

    .mdl-advance {
        height: 230px;
        background: #0b1924;
        width: 74% !important;
        position: absolute;
        top: 81px !important;
        left: 105px;
        border-radius: 5px;
        border: 2px solid white;
        padding-top: 22px;
    }

    .simple-search-close {
        color: red;
        float: right;
        margin-top: 5px;
        margin-right: 5px;
        font-weight: bold;
    }

    .advance-search-close {
        color: red;
        float: right;
        margin-top: 5px;
        margin-right: 5px;
        font-weight: bold;
        bottom: -79px !important;
        position: relative;
    }

    .mdl {
        height: 87px;
        background: #0b1924;
        width: 24% !important;
        position: absolute;
        top: 81px !important;
        left: 742px;
        border-radius: 5px;
        border: 2px solid white;
        padding-top: 22px;
    }

    @if ($view == 'report-link')

        nav[role="navigation"] {
            display: block;
            float: right;
            margin-top: -11px;
            position: relative;
            color: white !important;
            /* margin-left: 10px; */
        }
    @endif
    .cancel-reply-btn {
        right: 16px;
        position: absolute;
        bottom: 420px;
        font-size: small;
        color: red;
        font-weight: bold;
        cursor: pointer;
    }

    header .navbar-default .navbar-nav .dropdown .dropdown-menu.level1 li a:hover {
        color: #dd003f !important;
    }

    .tab-bawah {
        margin-top: -26px;
        margin-bottom: -26px;
    }

    .little-movie {
        width: 107px !important;
        height: 130px;
    }

    .movie-poster {
        height: 246px !important;
        object-fit: cover !important;
    }

    .list-poster {
        height: 226px !important;
        width: 19% !important;
        object-fit: cover !important;
    }

    .grid-movie {
        height: 130px !important;
        object-fit: fill;
    }

    .hero {
        height: 110px !important;
    }

    .hero2 {
        background-position: center;
        text-align: center;
        background-size: cover;
        position: relative;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 529px !important;
        background: #333;
    }

    .sliderv2 .movie-item .title-in .redbtn {
        font-size: 11px !important;
    }

    .movie-items .movie-item .hvr-inner a {
        font-size: 11px !important;
    }
</style>

<style>
    @media only screen and (max-width: 768px) {
        #form-search-advance select {
            margin-bottom: 10px;
        }

        .movie-items .movie-item {
            object-fit: cover !important;
            /* width: 300px !important; */
            display: block;
        }

        .movie-poster {
            height: auto !important;
        }


        .movie-items .movie-item .title-in {
            margin-left: 60px;
            margin-bottom: 115px;
        }

        .movie-item-style-2 img {
            width: auto !important;
            margin-bottom: 15px;
        }

        .movie-item-style-2 {
            display: flex;
            flex-direction: row;
        }

        .list-poster {
            height: 226px !important;
            width: 19% !important;
            object-fit: cover !important;
            position: relative;
            top: -97px;
            margin-right: 20px !important;
        }

    }
</style>
