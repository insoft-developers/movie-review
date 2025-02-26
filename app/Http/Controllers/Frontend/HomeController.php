<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MovieList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $view = 'home';
        $popular = MovieList::where('is_popular', 1)->get();
        $banners = MovieList::where('is_banner', 1)->get();
        $new = MovieList::where('is_popular', 1)->orderBy('id','desc')->get();
        $movie = MovieList::all();
        $mlist = MovieList::paginate(25);
        return view('frontend.home', compact('view','popular','banners','new','movie','mlist'));
    }

    public function get_movie($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.omdbapi.com/?i=' . $id . '&apikey=919aecb3',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            // CURLOPT_HTTPHEADER => ['key: ' . config('app.raja_key') . ''],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) { 
            return 'cURL Error #:' . $err;
        } else {
            $data = json_decode($response, true);

            $slug = str_replace(" ", "-", $data['Title']);

            $insert = [
                'title' => $data['Title'],
                'category' => $data['Type'],
                'year' => $data['Year'],
                'rated' => $data['Rated'],
                'released' => $data['Released'],
                'run_time' => $data['Runtime'],
                'genre' => $data['Genre'],
                'director' => $data['Director'],
                'writer' => $data['Writer'],
                'actors' => $data['Actors'],
                'plot' => $data['Plot'],
                'language' => $data['Language'],
                'country' => $data['Country'],
                'awards' => $data['Awards'],
                'poster' => $data['Poster'],
                'metascore' => $data['Metascore'],
                'imdb_rating' => $data['imdbRating'],
                'ratings' => $data['imdbRating'],
                'imdb_votes' => $data['imdbVotes'],
                'imdb_id' => $data['imdbID'],
                'type' => $data['Type'],
                'dvd' => $data['DVD'],
                'box_Office' => $data['BoxOffice'],
                'production' => $data['Production'],
                'website' => $data['Website'],
                'slug' => strtolower($slug)
                
            ];

            MovieList::create($insert);

            return response()->json([
                "success" => true,
                "message" => 'success'
            ]);
        }
    }
}
