<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HowToDownload;
use App\Models\MovieList;
use App\Models\ReportLink;
use App\Models\ReportMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $view = 'home';
        $popular = MovieList::where('is_popular', 1)->orderBy('id', 'asc')->get();
        $banners = MovieList::where('is_popular', 1)->orderBy('id', 'desc')->get();
        $new = MovieList::where('is_popular', 1)->orderBy('id', 'desc')->get();
        $movie = MovieList::all();
        $movie_per_page = session('movie_per_page') ?? 10;
        
        $movie_order = session('order_movie') ?? 'pop_desc';

        $query = MovieList::query();

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


        $mlist = $query->paginate($movie_per_page);

        return view('frontend.home', compact('view', 'popular', 'banners', 'new', 'movie', 'mlist','movie_per_page','movie_order'));
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

            $slug = str_replace(' ', '-', $data['Title']);

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
                'slug' => strtolower($slug),
                'is_new' => 1,
                'is_anime' => 0,
                'is_popular' => 0,
            ];

            MovieList::create($insert);

            return response()->json([
                'success' => true,
                'message' => 'success',
            ]);
        }
    }

    public function how_to()
    {
        $view = 'how-to-front';
        $data = HowToDownload::find(1);
        return view('frontend.how', compact('view', 'data'));
    }

    public function report_link()
    {
        $view = 'report-link';
        $data = ReportLink::find(1);

        $comments = ReportMessage::where('level', 1)->orderBy('id', 'desc')->paginate(10);
        $totalComments = $comments->total();
        
        return view('frontend.report_link', compact('view', 'data','comments','totalComments'));
    }

    public function comment(Request $request)
    {
        $input = $request->all();

        ReportMessage::create($input);
        // Menyimpan pesan untuk ditampilkan setelah refresh halaman
        session()->flash('message', 'Comment berhasil disimpan!');

        // Mengalihkan kembali ke halaman yang sama
        return redirect()->back();
    }

    public function movie_per_page(Request $request) {
        $input = $request->all();
        session(['movie_per_page' => $input['nilai']]);
        return response()->json(true);
    }


    public function order_movie(Request $request) {
        $input = $request->all();
        session(['order_movie' => $input['nilai']]);
        return response()->json(true);
    }
}
