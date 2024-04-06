<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Brand A',
                'logo' => 'brand_a_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand B',
                'logo' => 'brand_b_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand C',
                'logo' => 'brand_c_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        // Insert data into the 'brands' table
        Brand::insert($brands);
    }
}
