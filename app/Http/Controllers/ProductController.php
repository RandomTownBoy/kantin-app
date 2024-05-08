<?php

namespace App\Http\Controllers;

use App\Models\Category; // Tambahkan baris ini untuk mengimpor model Category
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function showCategory($categorySlug)
{
    $category = Category::where('slug', $categorySlug)->firstOrFail();
    $products = $category->products;

    return view('category', compact('category', 'products'));
}
// ProductController.php

public function showByCategory($categorySlug)
{
    $category = Category::where('slug', $categorySlug)->firstOrFail();
    $products = $category->products;

    return view('show', compact('category', 'products')); // Ubah dari 'products.show' menjadi 'show'
}

// ProductController.php
public function show($id)
{
    // Cari produk berdasarkan ID
    $product = Product::find($id);

    // Jika produk tidak ditemukan, tampilkan halaman 404
    if (!$product) {
        abort(404);
    }

    // Dapatkan kategori produk
    $category = $product->category;

    // Ambil produk terkait dari kategori yang sama
    $relatedProducts = $category->products->where('id', '!=', $id);

    // Kirim data produk dan kategori ke tampilan
    return view('show', compact('product', 'category', 'relatedProducts'));

}
public function search(Request $request)
{
    $search = $request->input('search');
    $products = Product::where('nama', 'LIKE', "%$search%")->get();

    return view('search', ['products' => $products]);
}





}