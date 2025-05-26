<?php

namespace App\Console\Commands;

use App\Models\MovieList;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AutoRating extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-rating';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        MovieList::orderBy('id', 'asc')
            ->select('id', 'imdb_id')
            ->chunk(50, function ($movies) {
                foreach ($movies as $movie) {
                    $response = Http::timeout(10)
                        ->retry(2, 1000) // Retry 2 times, 1s delay
                        ->get('https://www.omdbapi.com/', [
                            'i' => $movie->imdb_id,
                            'apikey' => '919aecb3',
                        ]);

                    if ($response->failed()) {
                        Log::warning("Failed fetching OMDB data for: {$movie->imdb_id}");
                        continue;
                    }

                    $data = $response->json();

                    if (!isset($data['imdbRating']) || $data['imdbRating'] === 'N/A') {
                        Log::info("No rating for: {$movie->imdb_id}");
                        continue;
                    }

                    $update = [
                        'metascore' => $data['Metascore'] ?? null,
                        'imdb_rating' => $data['imdbRating'] ?? null,
                        'ratings' => $data['imdbRating'] ?? null,
                        'imdb_votes' => $data['imdbVotes'] ?? null,
                        'updated_at' => Carbon::now(),
                    ];

                    $movie->update($update);
                }
            });
    }
}
