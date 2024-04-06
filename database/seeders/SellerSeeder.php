<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seller = [
            [
                'seller_name' => 'Test 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        // Insert data into the 'brands' table
        Seller::insert($seller);
    }
}
