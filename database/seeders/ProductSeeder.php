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
                'name' => 'Product 1',
                'added_by' => 'admin',
                'thumbnail_image' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
                'currency_symbol' => '₹',
                'mrp' => 900,
                'is_wholesale' => 1,
                'rating' => 4,
                'rating_count' => 2,
                'description' => '<p>sample</p>',
                'video_link' => '',
                'org_choice' => true,
                'best_selling' => true,
                'est_shipping_time' => 0,
                'is_refurbished' => 0,
                'is_in_cart' => 0,
                'is_in_wishlist' => 0,
                'meta_title' => 'Tiles',
                'meta_description' => 'tiles',
                'meta_img' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
            ],
            [
                'name' => 'Product 2',
                'added_by' => 'admin',
                'thumbnail_image' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
                'currency_symbol' => '₹',
                'mrp' => 900,
                'is_wholesale' => 1,
                'rating' => 4,
                'rating_count' => 2,
                'description' => '<p>sample</p>',
                'video_link' => '',
                'org_choice' => true,
                'best_selling' => true,
                'est_shipping_time' => 0,
                'is_refurbished' => 0,
                'is_in_cart' => 0,
                'is_in_wishlist' => 0,
                'meta_title' => 'Tiles',
                'meta_description' => 'tiles',
                'meta_img' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
            ],
            [
                'name' => 'Product 3',
                'added_by' => 'admin',
                'thumbnail_image' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
                'currency_symbol' => '₹',
                'mrp' => 900,
                'is_wholesale' => 1,
                'rating' => 4,
                'rating_count' => 2,
                'description' => '<p>sample</p>',
                'video_link' => '',
                'org_choice' => true,
                'best_selling' => true,
                'est_shipping_time' => 0,
                'is_refurbished' => 0,
                'is_in_cart' => 0,
                'is_in_wishlist' => 0,
                'meta_title' => 'Tiles',
                'meta_description' => 'tiles',
                'meta_img' => 'http://127.0.0.1:8000/assets/img/placeholder.jpg',
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
