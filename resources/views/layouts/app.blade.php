<!DOCTYPE html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">

  <style>

    .vertical-line {
      border-left: 1px solid #ccc;
      height: 32px;
      margin: 0 1rem;
    }
    .carousel {
      background-color: #f0f0f0;
      margin: 0 auto;
      width: 80%;
      max-width: 1000px;
      margin-top: 40px;
    }
    .carousel-cell {
      display: block;
      width: 100%;
    }
    .carousel img {
    display: block;
    max-width: 100%;
    height: 12rem;
}

@media screen and (min-width: 768px) {
 .carousel img {
    height: 22.5rem;
 }
}
    .carousel-cell img.slide-image {
      height: 80%;
      width: 100%;
      object-fit: cover;
    }
    .flickity-page-dots {
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 10px;
    left: 0;
    right: 0;
  }

  /* Menyesuaikan tanda titik aktif */
  .flickity-page-dots .dot {
    width: 10px;
    height: 10px;
    margin: 0 5px;
    background: wheat; /* Warna latar belakang tanda titik */
    border-radius: 50%;
  }

  .flickity-page-dots .dot.is-selected {
    background: white; /* Warna latar belakang tanda titik aktif */
  
  }

  </style>
</head>
<body class="bg-blue-50">
  <div class="relative">
  <div class="flex bg-blue-950 pt-1 px-5 flex-shrink-0 justify-between">
    <div class="flex pb-1 items-center"> <!-- Menambahkan kelas mb-3 untuk memberikan jarak -->
      <div class="text-slate-100 text-sm flex"> <!-- Menambahkan kelas flex -->
        <!-- Menambahkan garis pemisah vertikal -->
        <a href="">Ikuti kami di</a>
        <i data-feather="facebook" class="text-2xl cursor-pointer ml-2 text-blue-600 scale-75"></i>
        <i data-feather="instagram" class="text-2xl cursor-pointer text-pink-500 scale-75"></i>
        <i data-feather="twitter" class="text-2xl cursor-pointer text-sky-400 scale-75"></i>
        <div class="ml-4 lg:ml-4 flex items-center absolute right-7"> <!-- Memindahkan elemen ke sebelah kanan -->
          <i data-feather="user" class="text-2xl text-slate-200 scale-75"></i>
          <span class="text-slate-200 text-sm ml-1 cursor-pointer">Pengguna</span>
        </div>
      </div>
    </div>
  </div>
  <div class="flex bg-blue-950 border-t-black border-t py-5 px-5 flex-shrink-0 justify-between">
  <div class="flex items-center mx-auto text-sm"> <!-- Memusatkan kotak pencarian di tengah secara horizontal -->
    <div class="relative">
      <form action="{{ route('search') }}" method="GET">
         <input type="text" name="search" placeholder="Cari..." class="px-1 py-1 border rounded-lg text-left w-full lg:w-96 focus:outline-none focus:ring focus:border-blue-300 pl-10">
         <span class="absolute inset-y-0 left-1 lg:left-1 pl-3 flex items-center">
            <i class="fas fa-search text-black"></i>
         </span>
      </form>
   </div>
  </div>
  <div class="flex items-center ml-auto relative ">
    <a href="#" class="ml-4 lg:ml-7 relative">
      <span id="cart-notification" class="absolute -top-3 -right-2 bg-red-500 text-white px-1.5 py-0.5 w-4 h-4 rounded-full text-xs flex items-center justify-center">0</span>
      <i data-feather="shopping-cart" class="text-2xl hover:text-white text-slate-400 scale-90"></i>
    </a>
    <hr class="vertical-line hidden lg:block">
    <a href="#" class="ml-4 lg:ml-2">
      <i data-feather="message-circle" class="text-2xl mt hover:text-white text-slate-400 scale-90"></i>
    </a>
  </div>
  </div>

    <main class="py-4">
            @yield('content')
    </main>
    <div class="flex bg-blue-950 fixed bottom-0 w-full  pt-1 px-5 h-6  flex-shrink-0 justify-between">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
    <script>
        feather.replace();
        // Initialization for ES Users
        var flkty = new Flickity('.carousel', {
          wrapAround: true,
          autoPlay: 2000, // Ganti angka ini (ms) sesuai dengan kecepatan yang Anda inginkan
        });
      </script>
    
    </body>
    </html>
