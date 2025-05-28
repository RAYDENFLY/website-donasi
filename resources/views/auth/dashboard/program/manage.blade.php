<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Manajemen Program
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
  <div class="flex min-h-screen">
   <!-- Sidebar -->
   <aside class="flex flex-col justify-between w-64 border-r border-gray-200">
    <div>
     <div class="p-6 border-b border-gray-200">
      <img alt="BaitulMaalKu logo with blue and green geometric design and text BaitulMaalKu Lembaga Amil Zakat Infaq Shodaqoh &amp; Wakaf" class="w-20 h-auto" height="80" src="https://storage.googleapis.com/a1aa/image/223ed134-6d50-4464-8a4a-64a113e20297.jpg" width="80"/>
     </div>
     <nav class="mt-6 flex flex-col gap-2 text-gray-900 text-base font-normal">
      <a class="flex items-center gap-3 px-6 py-3 hover:bg-gray-100" href="#">
       <i class="fas fa-th-large text-lg">
       </i>
       Dashboard
      </a>
      <a class="flex items-center gap-3 px-6 py-3 bg-blue-200 text-blue-600 rounded-lg" href="#">
       <i class="fas fa-hand-holding-heart text-lg">
       </i>
       Program
      </a>
      <a class="flex items-center gap-3 px-6 py-3 hover:bg-gray-100" href="#">
       <i class="far fa-file-alt text-lg">
       </i>
       Riwayat Donasi
      </a>
      <a class="flex items-center gap-3 px-6 py-3 hover:bg-gray-100" href="#">
       <i class="far fa-file text-lg">
       </i>
       Laporan
      </a>
      <a class="flex items-center gap-3 px-6 py-3 hover:bg-gray-100" href="#">
       <i class="far fa-id-card text-lg">
       </i>
       Pengguna
      </a>
     </nav>
    </div>
    <div class="mb-6 px-6 flex flex-col gap-6 text-sm font-normal text-gray-600">
     <a class="flex items-center gap-3 hover:text-gray-900" href="#">
      <i class="fas fa-cog text-base">
      </i>
      Pengaturan
     </a>
     <a class="flex items-center gap-3 text-red-600 hover:text-red-700 font-semibold" href="#">
      <i class="fas fa-mobile-alt text-base">
      </i>
      <span class="text-red-600">
       Keluar
      </span>
     </a>
    </div>
   </aside>
   <!-- Main content -->
   <main class="flex-1 bg-gray-300 p-8 rounded-tr-2xl rounded-br-2xl">
    <div class="flex justify-between items-center mb-6">
     <h1 class="text-3xl font-extrabold leading-tight text-black">
      Manajemen Program
     </h1>
     <button class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-normal text-base rounded-lg px-6 py-3" type="button">
      <i class="fas fa-plus">
      </i>
      Program Baru
     </button>
    </div>
    <section class="bg-white rounded-lg shadow-sm">
     <div class="flex flex-col md:flex-row gap-4 p-4">
      <input class="flex-1 border border-gray-400 rounded-lg px-5 py-3 text-base placeholder:text-black placeholder:font-normal" placeholder="Cari Program" type="text"/>
      <button class="border border-gray-400 rounded-lg px-6 py-3 text-base font-normal" type="button">
       Semua Kategori
      </button>
      <button class="border border-gray-400 rounded-lg px-6 py-3 text-base font-normal" type="button">
       Semua Status
      </button>
     </div>
     <table class="w-full border-collapse">
      <thead>
       <tr class="bg-gray-100 text-left text-base font-normal text-gray-900">
        <th class="py-3 px-6 rounded-tl-lg">
         Judul Program
        </th>
        <th class="py-3 px-6">
         Target
        </th>
        <th class="py-3 px-6">
         Terkumpul
        </th>
        <th class="py-3 px-6">
         Status
        </th>
        <th class="py-3 px-6 rounded-tr-lg">
         Aksi
        </th>
       </tr>
      </thead>
      <tbody>
       <tr class="border-t border-gray-300">
        <td class="py-4 px-6">
         Qurban Untuk Palestina
        </td>
        <td class="py-4 px-6">
         Rp. 1.000.000.000
        </td>
        <td class="py-4 px-6">
         Rp. 500.000.000
        </td>
        <td class="py-4 px-6">
         <span class="bg-green-200 text-green-800 rounded-full px-3 py-1 text-sm font-normal">
          Aktif
         </span>
        </td>
        <td class="py-4 px-6">
         <button aria-label="Delete program" class="text-red-600 hover:text-red-800" type="button">
          <i class="fas fa-trash-alt text-lg">
          </i>
         </button>
        </td>
       </tr>
       <tr class="border-t border-gray-300">
        <td class="py-4 px-6">
         Qurban Untuk Palestina
        </td>
        <td class="py-4 px-6">
         Rp. 1.000.000.000
        </td>
        <td class="py-4 px-6">
         Rp. 500.000.000
        </td>
        <td class="py-4 px-6">
         <span class="bg-green-200 text-green-800 rounded-full px-3 py-1 text-sm font-normal">
          Aktif
         </span>
        </td>
        <td class="py-4 px-6">
         <button aria-label="Delete program" class="text-red-600 hover:text-red-800" type="button">
          <i class="fas fa-trash-alt text-lg">
          </i>
         </button>
        </td>
       </tr>
       <tr class="border-t border-gray-300">
        <td class="py-4 px-6">
         Qurban Untuk Palestina
        </td>
        <td class="py-4 px-6">
         Rp. 1.000.000.000
        </td>
        <td class="py-4 px-6">
         Rp. 500.000.000
        </td>
        <td class="py-4 px-6">
         <span class="bg-green-200 text-green-800 rounded-full px-3 py-1 text-sm font-normal">
          Aktif
         </span>
        </td>
        <td class="py-4 px-6">
         <button aria-label="Delete program" class="text-red-600 hover:text-red-800" type="button">
          <i class="fas fa-trash-alt text-lg">
          </i>
         </button>
        </td>
       </tr>
       <tr class="border-t border-gray-300 border-b border-gray-300">
        <td class="py-4 px-6">
         Qurban Untuk Palestina
        </td>
        <td class="py-4 px-6">
         Rp. 1.000.000.000
        </td>
        <td class="py-4 px-6">
         Rp. 500.000.000
        </td>
        <td class="py-4 px-6">
         <span class="bg-green-200 text-green-800 rounded-full px-3 py-1 text-sm font-normal">
          Aktif
         </span>
        </td>
        <td class="py-4 px-6">
         <button aria-label="Delete program" class="text-red-600 hover:text-red-800" type="button">
          <i class="fas fa-trash-alt text-lg">
          </i>
         </button>
        </td>
       </tr>
      </tbody>
     </table>
     <div class="flex flex-col md:flex-row justify-between items-center px-6 py-4 text-gray-500 text-sm font-normal">
      <div>
       Menampilkan dari 1 10 dari 100 program
      </div>
      <nav class="flex gap-2 mt-4 md:mt-0">
       <button aria-label="Previous page" class="border border-gray-400 rounded-md px-3 py-1 text-base font-normal">
        &lt;
       </button>
       <button aria-current="page" class="border border-gray-400 rounded-md px-3 py-1 text-base font-normal bg-blue-600 text-white">
        1
       </button>
       <button class="border border-gray-400 rounded-md px-3 py-1 text-base font-normal">
        2
       </button>
       <button class="border border-gray-400 rounded-md px-3 py-1 text-base font-normal">
        3
       </button>
       <button aria-label="Next page" class="border border-gray-400 rounded-md px-3 py-1 text-base font-normal">
        &gt;
       </button>
      </nav>
     </div>
    </section>
   </main>
  </div>
 </body>
</html>