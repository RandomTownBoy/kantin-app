@extends('layouts.app')
  @section('content')
    <div class="container mt-10 mx-auto px-4 py-5">
        <div class="flex">
            <!-- Gambar Produk -->
            <div class="w-1/2">
                <img class="w-full h-96 rounded-lg object-cover" src="{{ $product->gambar }}" alt="{{ $product->nama }}">
            </div>

            <!-- Informasi Produk -->
            <div class="w-1/2 px-16">
                <h1 class="text-3xl font-semibold mb-4">{{ $product->nama }}</h1>
                <p class="text-gray-500 text-sm mb-4">{{ $product->deskripsi }}</p>

                <!-- Harga -->
                <div class="flex items-center mb-4">
                    <span class="text-2xl font-semibold text-sky-300">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                </div>

                <!-- Tombol Beli -->
                <button class="bg-blue-500 text-white py-2 px-4 " id="addToCartBtn">Add to Cart</button>
            </div>
        
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var cartNotification = document.getElementById('cart-notification');
                    var addToCartBtn = document.getElementById('addToCartBtn');
        
                    addToCartBtn.addEventListener('click', function () {
                        // Increment the cart count
                        var currentCount = parseInt(cartNotification.innerText);
                        cartNotification.innerText = currentCount + 1;
                    });
                });
            </script>
        </div>
    </div>
    @endsection