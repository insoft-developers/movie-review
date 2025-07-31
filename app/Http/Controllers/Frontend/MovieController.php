<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MovieList;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($category)
    {
        $view = 'movie';
        if ($category == 'all') {
            $query = MovieList::query();
            $judul = 'All Movie';
        } elseif ($category == 'popular') {
            $query = MovieList::whereNotNull('box_office');
            $judul = 'Box Office';
        } elseif ($category == 'anime') {
            // $query = MovieList::where('is_anime', 1)->get();
            $query = MovieList::where('genre', 'LIKE', '%Animation%')->where('country', 'LIKE', '%Japan%');

            $judul = 'Anime Movies & Series';
        } else {
            $query = MovieList::where('category', $category);
            $judul = $category;
        }

        $movie_order = session('order_movie_sub') ?? 'pop_desc';

      

        if($movie_order == 'pop_desc') {
            $query->orderBy('imdb_votes', 'desc');
        }
        else if($movie_order == 'pop_asc') {
            $query->orderBy('imdb_votes', 'asc');
        } 
        else if($movie_order == 'rating_desc') {
            $query->orderBy('ratings', 'desc');
        }
        else if($movie_order == 'rating_asc') {
            $query->orderBy('ratings', 'asc');
        }
        else if($movie_order == 'release_desc') {
            $query->orderByRaw("STR_TO_DATE(released, '%d %b %Y') DESC");
        }
        else if($movie_order == 'release_asc') {
            $query->orderByRaw("STR_TO_DATE(released, '%d %b %Y') ASC");
        }

        $movie_per_page_sub = session('movie_per_page_sub') ?? 6;

        $movie_count = $query->count();
        $movie = $query->paginate($movie_per_page_sub);

        
        $is_search = 'home';
        return view('frontend.movie', compact('view', 'movie', 'judul', 'movie_per_page_sub','movie_order','movie_count','is_search'));
    }

    public function sub($category, $sub)
    {
        $view = 'sub-movie';

        $query = MovieList::where('category', $category)

            ->where('genre', 'LIKE', '%' . $sub . '%');
            

        $ct = Category::where('slug', $category)->first();
        $judul = $ct->category_name . ' - ' . $sub;

        $movie_per_page_sub = session('movie_per_page_sub') ?? 6;

        $movie_order = session('order_movie_sub') ?? 'pop_desc';

      

        if($movie_order == 'pop_desc') {
            $query->orderBy('imdb_votes', 'desc');
        }
        else if($movie_order == 'pop_asc') {
            $query->orderBy('imdb_votes', 'asc');
        } 
        else if($movie_order == 'rating_desc') {
            $query->orderBy('ratings', 'desc');
        }
        else if($movie_order == 'rating_asc') {
            $query->orderBy('ratings', 'asc');
        }
        else if($movie_order == 'release_desc') {
            $query->orderByRaw("STR_TO_DATE(released, '%d %b %Y') DESC");
        }
        else if($movie_order == 'release_asc') {
            $query->orderByRaw("STR_TO_DATE(released, '%d %b %Y') ASC");
        }

        $movie_count = $query->count();

        $movie = $query->paginate($movie_per_page_sub);
         $is_search = 'home';
        return view('frontend.movie', compact('view', 'movie', 'judul','movie_per_page_sub','movie_order','movie_count','is_search'));
    }

    public function single($title)
    {
        $view = 'single';
        $movie = MovieList::where('slug', $title)->first();
        return view('frontend.movie_single', compact('view', 'movie'));
    }

    public function movie_per_page_sub(Request $request)
    {
        $input = $request->all();
        session(['movie_per_page_sub' => $input['nilai']]);
        return response()->json(true);
    }

    public function order_movie_sub(Request $request) {
        $input = $request->all();
        session(['order_movie_sub' => $input['nilai']]);
        return response()->json(true);
    }
}
