<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $attributes = Attribute::all();
        
        foreach ($products as $product) {
            foreach ($attributes as $attribute) {
                
                if ($attribute->values->isNotEmpty()) {
                    $randomValue = $attribute->values->random()->value;
                    $product->attributes()->attach($attribute->id, [
                        'value' => $randomValue,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
