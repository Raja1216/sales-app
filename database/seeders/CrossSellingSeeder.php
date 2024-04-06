<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CrossSelling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrossSellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = Brand::pluck('id')->toArray();
        $crossSelling = [[
            'name' => 'Cross Product 1',
            'thumbnail_image' => 'http://127.0.0.1:8000/assets/img1.jpg',
            'mrp' => 8000,
            'rating' => 0,
            'sales' => 0,
            'is_wholesale' => false,
            'org_choice' => true,
            'best_selling' => true,
            'carbon_footprint' => null,
            'brand_id' => $brands[array_rand($brands)],
        ],
        [
            'name' => 'Cross Product 2',
            'thumbnail_image' => 'http://127.0.0.1:8000/assets/img2.jpg',
            'mrp' => 7899,
            'rating' => 0,
            'sales' => 0,
            'is_wholesale' => false,
            'org_choice' => true,
            'best_selling' => true,
            'carbon_footprint' => null,
            'brand_id' => $brands[array_rand($brands)],
        ]
    ];

        CrossSelling::insert($crossSelling);
    }
}
