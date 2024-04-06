<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'brand_id' => 1, 
                'name' => 'Product A',
                'added_by' => 'Admin', 
                'thumbnail_image' => 'product_a_thumbnail.jpg', 
                'currency_symbol' => '₹', 
                'mrp' => 100, 
                'is_wholesale' => false, 
                'rating' => 4.5, 
                'rating_count' => 10, 
                'description' => 'Description of Product A', 
                'video_link' => null, 
                'org_choice' => false, 
                'best_selling' => true, 
                'est_shipping_time' => 5, 
                'is_refurbished' => false, 
                'is_in_cart' => false, 
                'is_in_wishlist' => false, 
                'meta_title' => 'Meta Title for Product A', 
                'meta_description' => 'Meta Description for Product A', 
                'meta_img' => 'product_a_meta_img.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 2, 
                'name' => 'Product B',
                'added_by' => 'Admin', 
                'thumbnail_image' => 'product_b_thumbnail.jpg', 
                'currency_symbol' => '₹',
                'mrp' => 100, 
                'is_wholesale' => false, 
                'rating' => 4.5, 
                'rating_count' => 10, 
                'description' => 'Description of Product B', 
                'video_link' => null, 
                'org_choice' => false, 
                'best_selling' => true, 
                'est_shipping_time' => 5, 
                'is_refurbished' => false, 
                'is_in_cart' => false, 
                'is_in_wishlist' => false, 
                'meta_title' => 'Meta Title for Product B', 
                'meta_description' => 'Meta Description for Product B', 
                'meta_img' => 'product_b_meta_img.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insert data into the 'products' table
        Product::insert($products);
    }
}
