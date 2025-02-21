<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::create([
            "subcategory_name" => "Chinese Drama",
            "category_slug" => "drama",
            "slug" => "chinese-drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Indian Drama",
            "category_slug" => "drama",
            "slug" => "indian-drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Japanese Drama",
            "category_slug" => "drama",
            "slug" => "japanese-drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Korean Drama",
            "category_slug" => "drama",
            "slug" => "korean-drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Thai Drama",
            "category_slug" => "drama",
            "slug" => "thai-drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Turkish Drama",
            "category_slug" => "drama",
            "slug" => "turkish-drama"
        ]);

        SubCategory::create([
            "subcategory_name" => "Action",
            "category_slug" => "movie",
            "slug" => "action"
        ]);
        SubCategory::create([
            "subcategory_name" => "Adventure",
            "category_slug" => "movie",
            "slug" => "adventure"
        ]);
        SubCategory::create([
            "subcategory_name" => "Animation",
            "category_slug" => "movie",
            "slug" => "animation"
        ]);
        SubCategory::create([
            "subcategory_name" => "Biography",
            "category_slug" => "movie",
            "slug" => "biography"
        ]);
        SubCategory::create([
            "subcategory_name" => "Comedy",
            "category_slug" => "movie",
            "slug" => "comedy"
        ]);
        SubCategory::create([
            "subcategory_name" => "Crime",
            "category_slug" => "movie",
            "slug" => "crime"
        ]);
        SubCategory::create([
            "subcategory_name" => "Documentary",
            "category_slug" => "movie",
            "slug" => "documentary"
        ]);
        SubCategory::create([
            "subcategory_name" => "Drama",
            "category_slug" => "movie",
            "slug" => "drama"
        ]);
        SubCategory::create([
            "subcategory_name" => "Family",
            "category_slug" => "movie",
            "slug" => "family"
        ]);
        SubCategory::create([
            "subcategory_name" => "Fantasy",
            "category_slug" => "movie",
            "slug" => "fantasy"
        ]);
        SubCategory::create([
            "subcategory_name" => "History",
            "category_slug" => "movie",
            "slug" => "history"
        ]);
        SubCategory::create([
            "subcategory_name" => "Horror",
            "category_slug" => "movie",
            "slug" => "horror"
        ]);
        SubCategory::create([
            "subcategory_name" => "Music",
            "category_slug" => "movie",
            "slug" => "music"
        ]);
        SubCategory::create([
            "subcategory_name" => "Mistery",
            "category_slug" => "movie",
            "slug" => "mistery"
        ]);
        SubCategory::create([
            "subcategory_name" => "Romance",
            "category_slug" => "movie",
            "slug" => "romance"
        ]);
        SubCategory::create([
            "subcategory_name" => "Sci-FI",
            "category_slug" => "movie",
            "slug" => "scifi"
        ]);
        SubCategory::create([
            "subcategory_name" => "Sport",
            "category_slug" => "movie",
            "slug" => "sport"
        ]);
        SubCategory::create([
            "subcategory_name" => "Thriller",
            "category_slug" => "movie",
            "slug" => "thriller"
        ]);
        SubCategory::create([
            "subcategory_name" => "War",
            "category_slug" => "movie",
            "slug" => "war"
        ]);
        SubCategory::create([
            "subcategory_name" => "Western",
            "category_slug" => "movie",
            "slug" => "western"
        ]);
    }
}
