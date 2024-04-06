<?php

namespace Database\Seeders;

use App\Models\CrossSelling;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCrossSellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productIds = Product::pluck('id')->toArray();
        $crossSellingIds = CrossSelling::pluck('id')->toArray();

        $pivotRecordsCount = 10; 

        for ($i = 0; $i < $pivotRecordsCount; $i++) {
            $productId = $productIds[array_rand($productIds)];
            $crossSellingId = $crossSellingIds[array_rand($crossSellingIds)];

            // Check if the combination already exists
            if (!DB::table('product_cross_selling')
                    ->where('product_id', $productId)
                    ->where('cross_selling_id', $crossSellingId)
                    ->exists()) {
                DB::table('product_cross_selling')->insert([
                    'product_id' => $productId,
                    'cross_selling_id' => $crossSellingId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
