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
  <section class="bg-[#0099ff] text-white text-center py-12 px-6">
   <h1 class="font-extrabold text-2xl leading-tight">
    Bayar Zakat
   </h1>
   <p class="mt-2 max-w-xl mx-auto text-sm font-normal leading-relaxed">
    Tunaikan kewajiban zakat Anda dengan mudah dan amanah. Kami akan
      menyalurkan zakat Anda kepada yang berhak menerimanya.
   </p>
  </section>
  <main class="max-w-md mx-auto mt-10 mb-20 px-6">
   <form autocomplete="off" class="bg-[#fafafa] rounded-xl p-6 space-y-5 font-sans font-normal text-black text-sm">
    <h2 class="font-extrabold text-base leading-tight text-center">
     Kalkulator Zakat
    </h2>
    <p class="text-center text-xs leading-tight mb-4">
     Hitung zakat mu terlebih dahulu sebelum membayar zakat
    </p>
    <div>
     <label class="block mb-1 text-xs font-normal leading-tight" for="jenis-irigasi">
      Jenis Irigasi / Pengairan
     </label>
     <select class="w-full rounded-lg border border-black/60 px-4 py-3 text-sm font-normal leading-tight appearance-none" id="jenis-irigasi" name="jenis-irigasi">
      <option disabled="" selected="">
       Pilih Jenis Irigasi / Pengairan
      </option>
      <option>
       Irigasi A
      </option>
      <option>
       Irigasi B
      </option>
      <option>
       Irigasi C
      </option>
     </select>
    </div>
    <div>
     <label class="block mb-1 text-xs font-normal leading-tight" for="hasil-panen">
      Hasil Panen
     </label>
     <div class="relative">
      <input class="w-full rounded-lg border border-black/60 px-4 py-3 pr-14 text-sm font-normal leading-tight" id="hasil-panen" name="hasil-panen" placeholder=" " type="number"/>
      <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs font-normal text-black/80">
       Kg
      </span>
     </div>
    </div>
    <div>
     <label class="block mb-1 text-xs font-normal leading-tight" for="harga-pasar">
      Harga Pasar per Kg (Rp)
     </label>
     <input class="w-full rounded-lg border border-black/60 px-4 py-3 text-sm font-normal leading-tight" id="harga-pasar" name="harga-pasar" placeholder="Rp" type="number"/>
    </div>
    <div>
     <label class="block mb-1 text-xs font-normal leading-tight" for="waktu-panen">
      Waktu Panen
     </label>
     <input class="w-full rounded-lg border border-black/60 px-4 py-3 text-sm font-normal leading-tight" id="waktu-panen" name="waktu-panen" placeholder="Tanggal" type="date"/>
    </div>
    <div class="flex items-center space-x-2">
     <input class="w-5 h-5 border border-black/60 rounded" id="tahun-penghasilan" name="tahun-penghasilan" type="checkbox"/>
     <label class="text-xs font-normal leading-tight select-none" for="tahun-penghasilan">
      Sudah 1 Tahun Penghasilan Rutin?
     </label>
    </div>
    <div class="flex space-x-4">
     <button class="flex-1 bg-[#0099ff] text-white rounded-lg py-3 text-sm font-normal leading-tight hover:bg-[#0086e6] transition" type="submit">
      Hitung Zakat
     </button>
     <button class="flex-1 border border-[#0099ff] rounded-lg py-3 text-sm font-normal leading-tight hover:bg-[#f0f9ff] transition" type="reset">
      Reset
     </button>
    </div>
    <div class="bg-[#cce4ff] rounded-lg p-4 space-y-2">
     <p class="font-extrabold text-sm leading-tight">
      Zakat yang Harus Dibayarkan
     </p>
     <p class="font-extrabold text-lg leading-tight">
      Rp. 50.000
     </p>
     <div class="flex items-center space-x-4">
      <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-normal rounded-full px-5 py-2" type="button">
       Bayar Zakat
      </button>
      <a class="text-blue-600 text-sm font-normal hover:underline inline-block cursor-pointer" id="toggleDetails">
       Rincian Perhitungan &gt;
      </a>
     </div>
     <blockquote class="mt-3 p-4 bg-white border-l-4 border-blue-600 text-black text-sm" id="details" style="display:none;">
      <p>
       <strong>
        Total Harta:
       </strong>
       <span id="detailHarta">
        Rp 0
       </span>
      </p>
      <p>
       <strong>
        Total Hutang:
       </strong>
       <span id="detailHutang">
        Rp 0
       </span>
      </p>
      <p>
       <strong>
        Sudah dimiliki 1 tahun:
       </strong>
       <span id="detailTahun">
        Tidak
       </span>
      </p>
      <p>
       <strong>
        Ketentuan:
       </strong>
       <span id="detailKetentuan">
       </span>
      </p>
     </blockquote>
    </div>
   </form>
  </main>
  <script>
   const toggleDetails = document.getElementById('toggleDetails');
    const details = document.getElementById('details');

    toggleDetails.addEventListener('click', () => {
      if (details.style.display === 'none' || details.style.display === '') {
        details.style.display = 'block';
        toggleDetails.textContent = 'Rincian Perhitungan >';
      } else {
        details.style.display = 'none';
        toggleDetails.textContent = 'Rincian Perhitungan >';
      }
    });
  </script>
 </body>
</html>