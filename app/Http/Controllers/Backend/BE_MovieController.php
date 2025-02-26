<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MovieList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BE_MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'movie-list';
        $category = Category::all();
        return view('backend.movie', compact('view','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
            'imdb_id' => 'required',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $pesan = $validator->errors();
            $pesanarr = explode(',', $pesan);
            $find = ['[', ']', '{', '}'];
            $html = '';
            foreach ($pesanarr as $p) {
                $html .= str_replace($find, '', $p) . '<br>';
            }
            return response()->json([
                'success' => false,
                'message' => $html,
            ]);
        }

        try {
            $id = $input['imdb_id'];
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
                    'dvd' => $request->DVD == null ? null : $data['DVD'],
                    'box_Office' => $request->BoxOffice == null ? null : $data['BoxOffice'],
                    'production' => $request->Production == null ? null : $data['Production'],
                    'website' => $request->Website == null ? null : $data['Website'],
                    'slug' => strtolower($slug),
                ];

                MovieList::create($insert);

                return response()->json([
                    'success' => true,
                    'message' => 'success',
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = MovieList::findorFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function movie_table()
    {
        $data = MovieList::all();

        return DataTables::of($data)
            ->addColumn('created_at', function ($data) {
                return date('d-m-Y', strtotime($data->created_at));
            })
            ->addColumn('is_banner', function ($data) {
                if ($data->is_banner == 1) {
                    return 'YES';
                } else {
                    return 'NO';
                }
            })
            ->addColumn('is_popular', function ($data) {
                if ($data->is_popular == 1) {
                    return 'YES';
                } else {
                    return 'NO';
                }
            })
            ->addColumn('is_new', function ($data) {
                if ($data->is_new == 1) {
                    return 'YES';
                } else {
                    return 'NO';
                }
            })
            ->addColumn('is_anime', function ($data) {
                if ($data->is_anime == 1) {
                    return 'YES';
                } else {
                    return 'NO';
                }
            })
            ->addColumn('plot', function ($data) {
                if (strlen($data->plot >= 30)) {
                    return substr($data->plot, 0, 30) . '....';
                } else {
                    return $data->plot;
                }
            })
            ->addColumn('poster', function ($data) {
                return '<a href="' . $data->poster . '" target="_blank"><img class="be-poster" src="' . $data->poster . '"></a>';
            })
            ->addColumn('action', function ($data) {
                return '
                <a title="Edit Data" onclick="editData(' .
                    $data->id .
                    ')" href="javascript:void(0)" class="btn btn-insoft btn-warning">
                  <i class="icofont-edit icon-insoft"></i>
                </a>
                <a style="margin-left:8px;" title="Delete Data" onclick="deleteData(' .
                    $data->id .
                    ')" href="javascript:void(0)" class="btn btn-insoft btn-danger">
                  <i class="icofont-ui-delete icon-insoft"></i>
                </a>';
            })
            ->rawColumns(['action', 'poster'])
            ->addIndexColumn()
            ->make(true);
    }
}
