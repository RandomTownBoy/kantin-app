<?php

// ProductTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan logika untuk membuat data baru di sini
        $hotsaleCategory = Category::where('slug', 'hotsale')->first();
        $listMenuCategory = Category::where('slug', 'list-menu')->first();
        $minumanCategory = Category::where('slug', 'minuman')->first();
        $gorenganCategory = Category::where('slug', 'gorengan')->first();
        $snackCategory = Category::where('slug', 'snack')->first();

        Product::create([
            'nama' => 'Produk 2',
            'deskripsi' => 'Deskripsi produk 2',
            'harga' => 120000,
            'gambar' => '/images/snack.jpeg',
            'category_id' => $hotsaleCategory->id,
        ]);


        Product::create([
            'nama' => 'Snack 1',
            'deskripsi' => 'Deskripsi snack 1',
            'harga' => 25000,
            'gambar' => '/images/snack.jpeg',
            'category_id' => $snackCategory->id,
        ]);

        Product::create([
            'nama' => 'Snack 2',
            'deskripsi' => 'Deskripsi snack 2',
            'harga' => 18000,
            'gambar' => '/images/snack.jpeg',
            'category_id' => $snackCategory->id,
        ]);

        Product::create([
            'nama' => 'Gorengan 1',
            'deskripsi' => 'Deskripsi gorengan 1',
            'harga' => 5000,
            'gambar' => '/images/gorengan.jpeg',
            'category_id' => $gorenganCategory->id,
        ]);

       

        // Tambahkan produk lainnya sesuai kebutuhan
        // php artisan migrate:refresh --seed

    }
}
