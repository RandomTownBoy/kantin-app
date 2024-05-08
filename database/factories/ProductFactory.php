<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'deskripsi' => $this->faker->paragraph,
            'harga' => $this->faker->numberBetween(1000, 100000),
            'gambar' => 'path/to/image.jpg',
            'category_id' => 1, // Sesuaikan dengan kategori yang ada
        ];
    }
}
