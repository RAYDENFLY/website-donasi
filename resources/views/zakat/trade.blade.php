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
      font-family: 'Inter', sans-serif;
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

  <section class="bg-[#008CFF] text-white text-center py-12 px-6">
   <h1 class="font-extrabold text-3xl leading-tight mb-2">
    Bayar Zakat
   </h1>
   <p class="text-sm max-w-xl mx-auto leading-relaxed">
    Tunaikan kewajiban zakat Anda dengan mudah dan amanah. Kami akan
      menyalurkan zakat Anda kepada yang berhak menerimanya.
   </p>
  </section>
  <main class="max-w-md mx-auto mt-10 mb-20 px-6">
   <form aria-label="Kalkulator Zakat" class="bg-[#FAFAFA] rounded-xl p-6 space-y-4" onsubmit="return false">
    <h2 class="font-extrabold text-center text-lg text-black mb-1">
     Kalkulator Zakat
    </h2>
    <p class="text-sm mb-4 text-center">
     Hitung zakat mu terlebih dahulu sebelum membayar zakat
    </p>
    <div>
     <label class="block text-sm mb-1" for="modal">
      Modal yang Diputar selama 1 tahun
     </label>
     <input class="w-full rounded-lg border border-black/40 px-4 py-3 text-sm placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#008CFF]" id="modal" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block text-sm mb-1" for="keuntungan">
      Keuntungan selama 1 tahun
     </label>
     <input class="w-full rounded-lg border border-black/40 px-4 py-3 text-sm placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#008CFF]" id="keuntungan" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block text-sm mb-1" for="piutang">
      Piutang Dagang
     </label>
     <input class="w-full rounded-lg border border-black/40 px-4 py-3 text-sm placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#008CFF]" id="piutang" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block text-sm mb-1" for="utang">
      Utang jatuh tempo
     </label>
     <input class="w-full rounded-lg border border-black/40 px-4 py-3 text-sm placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#008CFF]" id="utang" placeholder="Rp" type="text"/>
    </div>
    <div>
     <label class="block text-sm mb-1" for="kerugian">
      Kerugian selama 1 tahun
     </label>
     <input class="w-full rounded-lg border border-black/40 px-4 py-3 text-sm placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#008CFF]" id="kerugian" placeholder="Rp" type="text"/>
    </div>
    <div class="flex items-center space-x-2 mt-2 mb-4">
     <input class="w-5 h-5 rounded border border-black/40 focus:ring-2 focus:ring-[#008CFF]" id="rutin" type="checkbox"/>
     <label class="text-sm select-none" for="rutin">
      Sudah 1 Tahun Penghasilan Rutin?
     </label>
    </div>
    <div class="flex space-x-4">
     <button class="flex-1 bg-[#008CFF] text-white rounded-lg py-3 text-sm font-normal hover:bg-[#0077e6] transition" id="hitungBtn" type="button">
      Hitung Zakat
     </button>
     <button class="flex-none border border-[#008CFF] text-[#008CFF] rounded-lg py-3 px-6 text-sm font-normal hover:bg-[#e6f0ff] transition" type="reset">
      Reset
     </button>
    </div>
    <div class="bg-[#D7E9FF] rounded-lg p-4 mt-6 text-sm">
     <p class="font-extrabold mb-1 text-black">
      Zakat yang Harus Dibayarkan
     </p>
     <p class="font-extrabold text-lg mb-3 text-black" id="zakatAmount">
      Rp. 50.000
     </p>
     <button class="bg-blue-600 text-white rounded-full px-4 py-1 text-sm font-normal hover:bg-blue-700 transition" id="bayarBtn" type="button">
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
   const toggleDetails = document.getElementById('toggleDetails');
    const details = document.getElementById('details');
    const bayarBtn = document.getElementById('bayarBtn');
    const hitungBtn = document.getElementById('hitungBtn');
    const zakatAmount = document.getElementById('zakatAmount');
    const detailHarta = document.getElementById('detailHarta');
    const detailHutang = document.getElementById('detailHutang');
    const detailTahun = document.getElementById('detailTahun');
    const detailKetentuan = document.getElementById('detailKetentuan');

    toggleDetails.addEventListener('click', () => {
      if (details.style.display === 'none') {
        details.style.display = 'block';
        toggleDetails.textContent = 'Sembunyikan Rincian Perhitungan >';
      } else {
        details.style.display = 'none';
        toggleDetails.textContent = 'Rincian Perhitungan >';
      }
    });

    function parseRp(value) {
      if (!value) return 0;
      return Number(value.toString().replace(/[^0-9.-]+/g,"")) || 0;
    }

    hitungBtn.addEventListener('click', () => {
      // Ambil nilai input
      const modal = parseRp(document.getElementById('modal').value);
      const keuntungan = parseRp(document.getElementById('keuntungan').value);
      const piutang = parseRp(document.getElementById('piutang').value);
      const utang = parseRp(document.getElementById('utang').value);
      const kerugian = parseRp(document.getElementById('kerugian').value);
      const rutin = document.getElementById('rutin').checked;

      // Hitung total harta dan hutang
      const totalHarta = modal + keuntungan + piutang - kerugian;
      const totalHutang = utang;

      // Hitung zakat (misal 2.5% dari total harta bersih)
      let zakat = 0;
      if (rutin) {
        zakat = totalHarta * 0.025;
      } else {
        zakat = (modal + keuntungan + piutang) * 0.025;
      }
      zakat = zakat > 0 ? zakat : 0;

      // Update tampilan
      zakatAmount.textContent = 'Rp. ' + zakat.toLocaleString('id-ID', {minimumFractionDigits: 0});
      detailHarta.textContent = 'Rp ' + totalHarta.toLocaleString('id-ID', {minimumFractionDigits: 0});
      detailHutang.textContent = 'Rp ' + totalHutang.toLocaleString('id-ID', {minimumFractionDigits: 0});
      detailTahun.textContent = rutin ? 'Ya' : 'Tidak';
      detailKetentuan.textContent = 'Zakat dihitung 2.5% dari total harta bersih';

      // Show details automatically when calculated
      details.style.display = 'block';
      toggleDetails.textContent = 'Sembunyikan Rincian Perhitungan >';
    });

    // Reset form and details on reset
    document.querySelector('form').addEventListener('reset', () => {
      zakatAmount.textContent = 'Rp. 50.000';
      detailHarta.textContent = 'Rp 0';
      detailHutang.textContent = 'Rp 0';
      detailTahun.textContent = 'Tidak';
      detailKetentuan.textContent = '';
      details.style.display = 'none';
      toggleDetails.textContent = 'Rincian Perhitungan >';
    });
  </script>
 </body>
</html>