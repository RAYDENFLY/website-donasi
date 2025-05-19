<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Bayar Zakat
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
 <body class="bg-white">
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


  <section class="bg-blue-600 text-white text-center py-12 px-6">
   <h1 class="font-extrabold text-3xl mb-2">
    Bayar Zakat
   </h1>
   <p class="text-sm max-w-xl mx-auto leading-relaxed">
    Tunaikan kewajiban zakat Anda dengan mudah dan amanah. Kami akan
      menyalurkan zakat Anda kepada yang berhak menerimanya.
   </p>
  </section>
  <main class="max-w-xl mx-auto p-6">
   <form aria-label="Kalkulator Zakat form" class="bg-gray-50 rounded-xl p-8 space-y-6" onsubmit="return false">
    <div>
     <h2 class="font-bold text-lg mb-1 text-black">
      Kalkulator Zakat
     </h2>
     <p class="text-sm text-black">
      Hitung zakat mu terlebih dahulu sebelum membayar zakat
     </p>
    </div>
    <div>
     <label class="block mb-1 text-sm text-black font-normal" for="penghasilanPerBulan">
      Penghasilan Per Bulan
     </label>
     <input class="w-full rounded-lg border border-gray-400 px-4 py-3 text-black text-base placeholder-black placeholder-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500" id="penghasilanPerBulan" name="penghasilanPerBulan" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block mb-1 text-sm text-black font-normal" for="penghasilanLainnya">
      Penghasilan Lainnya
     </label>
     <input class="w-full rounded-lg border border-gray-400 px-4 py-3 text-black text-base placeholder-black placeholder-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500" id="penghasilanLainnya" name="penghasilanLainnya" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block mb-1 text-sm text-black font-normal" for="pengeluaranKebutuhan">
      Pengeluaran Kebutuhan Pokok Bulanan
     </label>
     <input class="w-full rounded-lg border border-gray-400 px-4 py-3 text-black text-base placeholder-black placeholder-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500" id="pengeluaranKebutuhan" name="pengeluaranKebutuhan" placeholder="Rp" type="text"/>
    </div>
    <div class="flex items-center space-x-3">
     <input class="w-5 h-5 rounded-md border border-gray-400 text-blue-600 focus:ring-blue-500" id="sudah1Tahun" name="sudah1Tahun" type="checkbox"/>
     <label class="text-sm text-black font-normal" for="sudah1Tahun">
      Sudah 1 Tahun Penghasilan Rutin?
     </label>
    </div>
    <div>
     <select aria-label="Metode Perhitungan" class="w-full rounded-lg border border-gray-400 px-4 py-3 text-black text-base appearance-none bg-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="metodePerhitungan" name="metodePerhitungan">
      <option>
       Metode Perhitungan
      </option>
     </select>
    </div>
    <div class="flex space-x-4">
     <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-base font-normal rounded-lg py-3" type="submit">
      Hitung Zakat
     </button>
     <button class="flex-none border border-blue-500 text-blue-600 text-base font-normal rounded-lg px-6 py-3 hover:bg-blue-50" type="reset">
      Reset
     </button>
    </div>
    <div class="bg-blue-100 rounded-lg p-5 space-y-2">
     <p class="font-bold text-black text-sm">
      Zakat yang Harus Dibayarkan
     </p>
     <p class="font-extrabold text-black text-2xl">
      Rp. 50.000
     </p>
     <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-normal rounded-full px-5 py-2" type="button">
      Bayar Zakat
     </button>
     <a class="text-blue-600 text-sm font-normal hover:underline inline-block cursor-pointer" id="toggleDetails">
      Rincian Perhitungan &gt;
     </a>
     <blockquote class="mt-3 p-4 bg-white border-l-4 border-blue-600 text-black text-sm" id="details" style="display:none;">
      <p><strong>Total Harta:</strong> <span id="detailHarta">Rp 0</span></p>
      <p><strong>Total Hutang:</strong> <span id="detailHutang">Rp 0</span></p>
      <p><strong>Sudah dimiliki 1 tahun:</strong> <span id="detailTahun">Tidak</span></p>
      <p><strong>Ketentuan:</strong> <span id="detailKetentuan"></span></p>
     </blockquote>
    </div>
   </form>
  </main>
  <script>
   const toggleDetails = document.getElementById("toggleDetails");
    const details = document.getElementById("details");

    toggleDetails.addEventListener("click", () => {
      if (details.style.display === "none") {
        details.style.display = "block";
        toggleDetails.textContent = "Rincian Perhitungan \u25B2";
      } else {
        details.style.display = "none";
        toggleDetails.textContent = "Rincian Perhitungan >";
      }
    });
  </script>
 </body>
</html>