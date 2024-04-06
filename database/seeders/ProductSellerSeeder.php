<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSeller;
use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $sellers = Seller::all();

        foreach ($products as $product) {
            // Select random sellers count for each product
            $randomSellersCount = rand(1, count($sellers));

            // Attach random sellers to the product
            $randomSellers = $sellers->random($randomSellersCount);
            foreach ($randomSellers as $seller) {
                // Use pivot model to create pivot record with attributes
                ProductSeller::create([
                    'product_id' => $product->id,
                    'seller_id' => $seller->id,
                    'seller_stock' => rand(50, 200),
                    'est_shipping_days' => rand(1, 30),
                    'selling_price' => rand(100, 500),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
