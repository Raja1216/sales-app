<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BrandSeeder::class,
            ThemeSeeder::class,
            ProductSeeder::class,
            ProductThemeSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductAttributeSeeder::class,
            SellerSeeder::class,
            ProductSellerSeeder::class,
            CrossSellingSeeder::class,
            ProductCrossSellingSeeder::class
        ]);
    }
}
