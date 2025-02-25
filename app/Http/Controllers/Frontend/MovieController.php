<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MovieList;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($category)
    {
        $view = 'movie';
        if($category == 'all') {
            $movie = MovieList::all();
            $judul = 'All Movie';
        } else if($category == 'popular') {
            $movie = MovieList::where('is_popular', 1)->get();
            $judul = 'Popular Movie';
        } else if($category == 'anime') {
            $movie = MovieList::where('is_anime', 1)->get();
            $judul = 'Anime Movie';
        } else {
            $movie = MovieList::where('category', $category)->get();
            $judul = 'Anime Movie';
        }
        
        return view('frontend.movie', compact('view','movie','judul'));
    }

    public function single($title) {
        $view = 'single';
        $movie = MovieList::where('slug', $title)->first();
        return view('frontend.movie_single', compact('view','movie'));
    }
}
