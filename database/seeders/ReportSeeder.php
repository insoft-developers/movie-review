<?php

namespace Database\Seeders;

use App\Models\ReportLink;
use App\Models\ReportMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReportLink::updateOrCreate(
            ['id' => 1], // cari berdasarkan email
            [
                'report_dead_link' => 'Welcome ', // data yang akan diupdate/insert
            ],
        );
    }
}
