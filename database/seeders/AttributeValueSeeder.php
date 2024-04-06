<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = Attribute::all();

        $sampleValues = [
            'Size' => ['Small', 'Medium', 'Large'],
            'Country of Origin' => ['India', 'China', 'USA']
        ];

        foreach ($attributes as $attribute) {
            $attributeName = $attribute->attribute_name;

            if (isset($sampleValues[$attributeName])) {
               
                foreach ($sampleValues[$attributeName] as $value) {
                   
                    AttributeValue::create([
                        'attribute_id' => $attribute->id,
                        'value' => $value,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
