<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::updateOrCreate(
            ['id' => 1],
            [
                'request_us' => 'testing',
                'dmca' => 'testing',
                'contact_us' => 'testing',
                'about_us' => 'testing',
                'site_disclaimer' => 'testing'
            ],
        );
    }
}
