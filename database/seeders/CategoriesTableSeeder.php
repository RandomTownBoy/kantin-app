<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan kategori hanya jika belum ada
        if (!Category::where('slug', 'hotsale')->exists()) {
            Category::create([
                'slug' => 'hotsale',
                'name' => 'Hotsale',
            ]);
        }

        // Tambahkan kategori lainnya sesuai kebutuhan
        $categories = [
            ['slug' => 'list-menu', 'name' => 'List Menu'],
            ['slug' => 'minuman', 'name' => 'Minuman'],
            ['slug' => 'gorengan', 'name' => 'Gorengan'],
            ['slug' => 'snack', 'name' => 'Snack'],
        ];

        foreach ($categories as $category) {
            if (!Category::where('slug', $category['slug'])->exists()) {
                Category::create($category);
            }
        }
    }
}

