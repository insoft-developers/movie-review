<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "name" => "Admin",
            "email" => "admin@mail.com",
            "password" => '$2y$10$OXMyqbqat1GinkzyWx2j4ujKny6AfJdbbsCcf3rud2pM34g1FArqK',
            "level" => 'super'

        ]);
    }
}
