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
            "subcategory_name" => "Western",
            "category_slug" => "tv-show",
            "slug" => "wester-tv-show"
        ]);
        SubCategory::create([
            "subcategory_name" => "Korean",
            "category_slug" => "tv-show",
            "slug" => "korean-tv-show"
        ]);
        SubCategory::create([
            "subcategory_name" => "Chinese",
            "category_slug" => "tv-show",
            "slug" => "chinese-tv-show"
        ]);
       
    }
}
