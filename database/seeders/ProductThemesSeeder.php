<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve some sample products and themes
        $products = Product::pluck('id')->toArray();
        $themes = Theme::pluck('id')->toArray();

        foreach ($products as $productId) {
            // Randomly assign themes to products
            $numberOfThemes = rand(1, count($themes));
            $selectedThemes = array_rand($themes, $numberOfThemes);

            if (!is_array($selectedThemes)) {
                $selectedThemes = [$selectedThemes];
            }

            foreach ($selectedThemes as $themeIndex) {
                $themeId = $themes[$themeIndex];
                DB::table('product_themes')->insert([
                    'product_id' => $productId,
                    'theme_id' => $themeId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
