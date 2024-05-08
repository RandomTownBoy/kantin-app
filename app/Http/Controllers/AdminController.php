<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // AdminController.php

    public function index()
    {
        return view('admin.index');
    }
    
    public function products()
    {
    $products = Product::all();
    return view('admin.products.index', compact('products'));
    }
    
    public function createProduct()
    {
    return view('admin.products.create');
    }
    
    public function storeProduct(Request $request)
    {
    // Validasi input jika diperlukan
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        // Tambahkan validasi lainnya sesuai kebutuhan
    ]);

    Product::create($validatedData);

    return redirect()->route('admin.products')->with('success', 'Produk berhasil ditambahkan.');
    }
    
    public function editProduct($id)
    {
    $product = Product::findOrFail($id);
    return view('admin.products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
    $product = Product::findOrFail($id);

    // Validasi input jika diperlukan
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        // Tambahkan validasi lainnya sesuai kebutuhan
    ]);

    $product->update($validatedData);

    return redirect()->route('admin.products')->with('success', 'Produk berhasil diperbarui.');
    }

    public function deleteProduct($id)
    {
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.products')->with('success', 'Produk berhasil dihapus.');
    }

    // Fungsi Pengguna



    public function users()
    {
    $users = User::all();
    return view('admin.users.index', compact('users'));
    }

}
