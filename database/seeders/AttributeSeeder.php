<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            [
                'attribute_name' => 'Size',
                'color_code' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attribute_name' => 'Country of Origin',
                'color_code' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
}
