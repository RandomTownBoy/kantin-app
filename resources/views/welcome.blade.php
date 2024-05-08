@extends('layouts.app')
  @section('content')
  <div class="carousel md:w-full" data-flickity='{ "wrapAround": true, "autoPlay": 2000 }'>
    <div class="carousel-cell">
      <img src="images/kantin1.jpeg" class="w-full object-cover"  alt="Slide 1">
    </div>
    <div class="carousel-cell">
      <img src="images/kantin2.jpeg" class="w-full object-cover"  alt="Slide 2">
    </div>
    <div class="carousel-cell">
      <img src="images/kantin3.jpeg" class="w-full object-cover"  alt="Slide 3">
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10 mx-10 md:mx-44">
    <!-- Saat kecil dan medium: Lingkaran 1, 2, dan 3 -->
    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('category.show', ['category' => 'hotsale']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/hot-sale.jpeg" class="w-full object-cover" alt="">
            </div>
        </a>
        <a href="{{ route('category.show', ['category' => 'list-menu']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/listMenu.jpeg" class="h-14 w-14 sm:h-20 sm:w-20 object-cover scale-75 " alt="">
            </div>
        </a>
        <a href="{{ route('category.show', ['category' => 'minuman']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/drink.jpeg" class="h-14  w-14 sm:h-20 sm:w-20 object-cover scale-125 " alt="">
            </div>
        </a>
    </div>

    <!-- Saat kecil dan medium: Lingkaran 4, 5, dan 6 -->
    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('category.show', ['category' => 'snack']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/snack.jpeg" class="h-14 w-14 sm:h-20 sm:w-20 object-cover scale-75 " alt="">
            </div>
        </a>
        <a href="{{ route('category.show', ['category' => 'gorengan']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/gorengan.jpeg" class="h-14 w-14 sm:h-20 sm:w-20 object-cover scale-75 " alt="">
            </div>
        </a>
        <a href="{{ route('category.show', ['category' => 'keranjang']) }}" class="flex items-center justify-center">
            <div class="bg-blue-100 rounded-full h-14 w-14 sm:h-20 sm:w-20">
                <img src="images/keranjang.jpeg" class="h-14 w-14 sm:h-20 sm:w-20 object-cover scale-50 " alt="">
            </div>
        </a>
    </div>
</div>




<div class="container mt-10 mx-auto px-4 py-5">
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
        </div>
      </div>
    </a>
    @endforeach

  </div>
</div>



@endsection