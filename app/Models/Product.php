<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar', 'category_id', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
use App\Models\Product;

// ...

