<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category_name" => "Anime",
            "slug" => "anime",
        ]);
        Category::create([
            "category_name" => "Drama",
            "slug" => "drama"
        ]);
        Category::create([
            "category_name" => "Movie",
            "slug" => "movie"
        ]);
        Category::create([
            "category_name" => "TV Show",
            "slug" => "tv-show"
        ]);
    }
}
