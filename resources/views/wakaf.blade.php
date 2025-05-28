<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Wakaf</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
 <a class="hover:underline hover:text-[#0089FF]" href="/">Beranda</a>
    <a class="hover:underline hover:text-[#0089FF]" href="/zakat">Zakat</a>
    <a class="hover:underline hover:text-[#0089FF]" href="/infaq">Infaq</a>
    <a class="hover:underline hover:text-[#0089FF]" href="/wakaf">Wakaf</a>
    <a href="/donasi" class="bg-[#0089FF] text-white text-sm font-normal rounded-full px-5 py-2 hover:bg-[#0077e6] transition text-center block md:inline">Donasi Sekarang</a>
  </nav>
</header>
  <section class="bg-[#0a82ff] text-white text-center py-10 px-6">
    <h1 class="font-bold text-xl md:text-2xl mb-2">Wakaf</h1>
    <p class="text-xs md:text-sm max-w-[600px] mx-auto leading-tight">
      Salurkan wakaf Anda dalam bentuk uang maupun barang. Setiap wakaf akan dikelola dan disalurkan dengan amanah.
    </p>
  </section>

  <main class="max-w-md mx-auto mt-10 mb-20 px-6">
    <form class="bg-[#fafafa] rounded-xl p-8 space-y-6" id="wakafForm">
      <h2 class="font-bold text-lg mb-4 text-center">Form Wakaf</h2>

      <!-- Jenis Wakaf -->
      <div>
        <label class="block text-xs mb-1" for="jenisWakaf">Jenis Wakaf</label>
        <select id="jenisWakaf" name="jenisWakaf" class="w-full border border-black rounded-lg py-3 px-4 text-sm">
          <option value="uang">Uang</option>
          <option value="barang">Barang (Tanah, Al-Qur’an, dll)</option>
        </select>
      </div>

      <!-- Form Wakaf Uang -->
      <div id="formUang">
        <label class="block text-xs mb-1">Pilih Nominal</label>
        <div class="grid grid-cols-3 gap-4 mb-4">
          <button type="button" class="nominal-btn border border-black rounded-lg py-2 text-xs font-semibold hover:bg-[#0a82ff] hover:text-white transition">Rp 100.000</button>
          <button type="button" class="nominal-btn border border-black rounded-lg py-2 text-xs font-semibold hover:bg-[#0a82ff] hover:text-white transition">Rp 200.000</button>
          <button type="button" class="nominal-btn border border-black rounded-lg py-2 text-xs font-semibold hover:bg-[#0a82ff] hover:text-white transition">Rp 500.000</button>
        </div>
        <input id="nominal" name="nominal" type="text" placeholder="Nominal lainnya (Rp)" class="w-full border border-black rounded-lg py-3 px-4 text-sm placeholder:text-black placeholder:opacity-50"/>
      </div>

      <!-- Form Wakaf Barang -->
      <div id="formBarang" class="hidden space-y-4">
        <div>
          <label class="block text-xs mb-1" for="jenisBarang">Jenis Barang</label>
          <input type="text" id="jenisBarang" name="jenisBarang" placeholder="Contoh: Tanah, Al-Qur’an, dll" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
          <label class="block text-xs mb-1" for="jumlahBarang">Jumlah / Luas</label>
          <input type="text" id="jumlahBarang" name="jumlahBarang" placeholder="Contoh: 100 m² atau 50 buku" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
          <label class="block text-xs mb-1" for="lokasiBarang">Lokasi Penyerahan</label>
          <input type="text" id="lokasiBarang" name="lokasiBarang" placeholder="Contoh: Bandung, Jakarta, dll" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
      </div>

      <!-- Data Umum -->
      <div class="space-y-4">
        <div>
          <label class="block text-xs mb-1" for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
          <label class="block text-xs mb-1" for="email">Email</label>
          <input type="email" id="email" name="email" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
          <label class="block text-xs mb-1" for="telepon">Nomor Telepon</label>
          <input type="tel" id="telepon" name="telepon" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
          <label class="block text-xs mb-1" for="pesan">Pesan/Doa (Opsional)</label>
          <input type="text" id="pesan" name="pesan" class="w-full border border-black rounded-lg py-3 px-4 text-sm"/>
        </div>
        <div>
         <div id="formPembayaran">
            <label class="block text-xs mb-1" for="pembayaran">Pembayaran Via</label>
            <select id="pembayaran" name="pembayaran" class="w-full border border-black rounded-lg py-3 px-4 text-sm">
                <option value="">Pilih metode pembayaran</option>
                <option value="qris">QRIS</option>
                <option value="transfer">Transfer (BSI, CIMB, dll)</option>
            </select>
            </div>      
        </div>
      </div>

      <!-- Anonim -->
      <div class="flex items-center space-x-2 mt-2">
        <input type="checkbox" id="anonim" name="anonim" class="w-4 h-4 border border-black rounded"/>
        <label for="anonim" class="text-xs select-none">Sembunyikan nama saya (Hamba Allah)</label>
      </div>

      <!-- Tombol -->
      <div class="flex space-x-4 mt-6">
        <button type="submit" class="flex-1 bg-[#0a82ff] text-white rounded-lg py-3 text-sm font-normal hover:bg-[#0a82ffcc] transition">Kirim Wakaf</button>
        <button type="reset" class="flex-1 border border-[#0a82ff] text-sm font-normal rounded-lg py-3 hover:bg-[#0a82ff1a] transition">Reset</button>
      </div>
    </form>
  </main>

  <script>
    const jenisSelect = document.getElementById("jenisWakaf");
    const formUang = document.getElementById("formUang");
    const formBarang = document.getElementById("formBarang");
    const nominalInput = document.getElementById("nominal");
    const nominalBtns = document.querySelectorAll(".nominal-btn");
    const formPembayaran = document.getElementById("formPembayaran");

    // Toggle form based on jenis wakaf
    jenisSelect.addEventListener("change", () => {
      const value = jenisSelect.value;
      formUang.classList.toggle("hidden", value !== "uang");
      formBarang.classList.toggle("hidden", value !== "barang");
      formPembayaran.classList.toggle("hidden", value !== "uang");
    });

    // Set nominal input when button clicked
    nominalBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        nominalInput.value = btn.textContent.replace(/[^\d]/g, "");
      });
    });
  </script>
</body>
</html>
