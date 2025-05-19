<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Program Pilihan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Inter", sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-black">
 <header class="flex items-center justify-between px-6 py-4 max-w-[1300px] mx-auto relative">
  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <img class="w-30 h-12 object-contain" src="https://baitulmaalku.com/assets/img/bmku.png" alt="Logo" />
  </div>

  <!-- Hamburger (mobile only) -->
  <button class="md:hidden text-2xl" id="menu-toggle">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Menu -->
  <nav
  id="menu"
  class="hidden md:flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-6 text-sm font-normal p-6 md:p-0 md:static md:bg-transparent absolute md:relative top-full left-0 w-full md:w-auto bg-white md:shadow-none shadow-md z-50"
>
 <a class="hover:underline" href="/">Beranda</a>
    <a class="hover:underline" href="/zakat">Zakat</a>
    <a class="hover:underline" href="/infaq">Infaq</a>
    <a class="hover:underline" href="/wakaf">Wakaf</a>
    <a href="/donasi" class="bg-[#0089FF] text-white text-sm font-normal rounded-full px-5 py-2 hover:bg-[#0077e6] transition text-center block md:inline">Donasi Sekarang</a>
  </nav>
</header>

  <section class="bg-[#0089FF] py-12 px-6">
   <div class="max-w-[1200px] mx-auto">
    <h1 class="text-white font-extrabold text-3xl mb-3">
     Program Pilihan
    </h1>
    <p class="text-white text-sm max-w-[600px] mb-4">
     Pilih program yang sesuai dengan niat donasi Anda. Setiap donasi akan
        membantu mereka yang membutuhkan dan membawa keberkahan.
    </p>
   </div>
  </section>
  <section class="max-w-[1200px] mx-auto px-6 -mt-10">
   <form action="#" class="bg-white rounded-xl shadow-lg flex flex-col sm:flex-row items-center gap-4 p-4" method="GET">
    <label class="sr-only" for="search">
     Cari Program
    </label>
    <div class="flex items-center flex-1 border border-gray-400 rounded-lg px-4 py-2">
     <i class="fas fa-search text-lg mr-2">
     </i>
     <input class="w-full outline-none text-sm" id="search" name="search" placeholder="Cari Program" type="text"/>
    </div>
    <label class="sr-only" for="sort">
     Sort
    </label>
    <select class="border border-gray-400 rounded-lg px-4 py-2 text-sm cursor-pointer w-[160px]" id="sort" name="sort">
     <option>
      Terbaru
     </option>
    </select>
    <button aria-label="Filter" class="border border-gray-400 rounded-lg p-2 text-lg flex items-center justify-center" type="button">
     <i class="fas fa-filter">
     </i>
    </button>
   </form>
  </section>
  <section class="max-w-[1200px] mx-auto px-6 mt-8">
   <nav class="flex flex-wrap gap-4 text-sm font-normal mb-8">
    <button class="bg-[#0089FF] text-white rounded-full px-5 py-2 whitespace-nowrap" type="button">
     Semua
    </button>
    <button class="whitespace-nowrap" type="button">
     Pendidikan
    </button>
    <button class="whitespace-nowrap" type="button">
     Kesehatan
    </button>
    <button class="whitespace-nowrap" type="button">
     Pembangunan
    </button>
    <button class="whitespace-nowrap" type="button">
     Sosial
    </button>
    <button class="whitespace-nowrap" type="button">
     Dakwah
    </button>
    <button class="whitespace-nowrap" type="button">
     Kemanusiaan
    </button>
   </nav>
   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
    <!-- Card 1 -->
    <article class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
     <img alt="Blue placeholder image representing a mosque construction project" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/61cc3886-ccf6-41d4-d943-0cc8aa71c8df.jpg" width="600"/>
     <div class="p-4 flex flex-col flex-1">
      <span class="inline-block bg-[#0089FF]/30 text-[#0089FF] text-xs rounded-full px-2 py-0.5 mb-2 w-max">
       Pembangunan
      </span>
      <h2 class="font-bold text-sm leading-tight mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </h2>
      <p class="text-[10px] mb-3 leading-tight">
       Bantu warga desa memiliki tempat ibadah yang layak untuk beribadah
            dan mengaji.
      </p>
      <div class="mb-2">
       <div class="w-full bg-gray-300 rounded-full h-2.5">
        <div class="bg-[#0089FF] h-2.5 rounded-full" style="width: 65%">
        </div>
       </div>
      </div>
      <p class="text-[9px] text-gray-600 mb-4">
       Terkumpul: Rp 65.000.000
       <span class="float-right">
        65%
       </span>
      </p>
      <button class="bg-[#0089FF] text-white text-sm rounded-md py-2 mt-auto hover:bg-[#0077e6] transition">
       Donasi Sekarang
      </button>
     </div>
    </article>
    <!-- Card 2 -->
    <article class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
     <img alt="Blue placeholder image representing a mosque construction project" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/61cc3886-ccf6-41d4-d943-0cc8aa71c8df.jpg" width="600"/>
     <div class="p-4 flex flex-col flex-1">
      <span class="inline-block bg-[#0089FF]/30 text-[#0089FF] text-xs rounded-full px-2 py-0.5 mb-2 w-max">
       Pembangunan
      </span>
      <h2 class="font-bold text-sm leading-tight mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </h2>
      <p class="text-[10px] mb-3 leading-tight">
       Bantu warga desa memiliki tempat ibadah yang layak untuk beribadah
            dan mengaji.
      </p>
      <div class="mb-2">
       <div class="w-full bg-gray-300 rounded-full h-2.5">
        <div class="bg-[#0089FF] h-2.5 rounded-full" style="width: 65%">
        </div>
       </div>
      </div>
      <p class="text-[9px] text-gray-600 mb-4">
       Terkumpul: Rp 65.000.000
       <span class="float-right">
        65%
       </span>
      </p>
      <button class="bg-[#0089FF] text-white text-sm rounded-md py-2 mt-auto hover:bg-[#0077e6] transition">
       Donasi Sekarang
      </button>
     </div>
    </article>
    <!-- Card 3 -->
    <article class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
     <img alt="Blue placeholder image representing a mosque construction project" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/61cc3886-ccf6-41d4-d943-0cc8aa71c8df.jpg" width="600"/>
     <div class="p-4 flex flex-col flex-1">
      <span class="inline-block bg-[#0089FF]/30 text-[#0089FF] text-xs rounded-full px-2 py-0.5 mb-2 w-max">
       Pembangunan
      </span>
      <h2 class="font-bold text-sm leading-tight mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </h2>
      <p class="text-[10px] mb-3 leading-tight">
       Bantu warga desa memiliki tempat ibadah yang layak untuk beribadah
            dan mengaji.
      </p>
      <div class="mb-2">
       <div class="w-full bg-gray-300 rounded-full h-2.5">
        <div class="bg-[#0089FF] h-2.5 rounded-full" style="width: 65%">
        </div>
       </div>
      </div>
      <p class="text-[9px] text-gray-600 mb-4">
       Terkumpul: Rp 65.000.000
       <span class="float-right">
        65%
       </span>
      </p>
      <button class="bg-[#0089FF] text-white text-sm rounded-md py-2 mt-auto hover:bg-[#0077e6] transition">
       Donasi Sekarang
      </button>
     </div>
    </article>
   </div>
  </section>
 </body>
</html>