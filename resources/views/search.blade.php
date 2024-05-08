@extends('layouts.app')

@section('content')
    <div class="container mt-1 mx-auto px-4 py-2">
        <h1 class="text-2xl font-bold mb-6">Hasil Pencarian</h1>

        @if($products->count() > 0)
            <div class="grid grid-cols-1 grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                    <!-- Produk -->
                    <a href="{{ route('show', ['id' => $product->id]) }}" class="group hover:scale-105 transform transition-transform duration-300 ease-in-out">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img class="h-48 w-full object-cover" src="{{ $product->gambar }}" alt="{{ $product->nama }}">
                        <div class="p-4">
                            <h2 class="text-md md:text-xl font-semibold mb-2">{{ $product->nama }}</h2>
                            <p class="text-gray-500 text-sm">{{ $product->deskripsi }}</p>
                            <div class="mt-3">
                            <span class="text-sky-300 text-sm">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                            </div>
                            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300">Beli Sekarang</button>
                        </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <p>Tidak ada produk yang ditemukan.</p>
        @endif
    </div>
@endsection
