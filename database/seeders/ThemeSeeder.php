<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $themes = [
            [
                'name' => 'Theme A',
                'color' => '#ff0000', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Theme B',
                'color' => '#00ff00', 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insert data into the 'themes' table
        Theme::insert($themes);
    }
}
