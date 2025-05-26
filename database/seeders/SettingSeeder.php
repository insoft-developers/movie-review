<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "app_name" => "Movie Blockbuster",
            "app_title" => "Movie Blockbuster",
            "app_email" => "blockbuster@mail.com",
            "app_phone" => "0918-9900-0909",
            "app_address" => "Medan Tanjung Morawa",
            "app_contact_name" => "Keanu Reeves"
        ]);
    }
}
