<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Product::truncate();

        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        // Tambahkan seeder lainnya jika ada
    }
}
