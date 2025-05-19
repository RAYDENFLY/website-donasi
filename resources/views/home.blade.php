<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   BaitulMaalKu
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-black">
  <!-- Header -->
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

  <!-- Hero Section -->
  <section class="bg-[#0089FF] text-white text-center px-6 py-16 md:py-20">
   <h1 class="text-xl md:text-2xl font-bold mb-2">
    Berbagi Kebaikan, Raih Keberkahan
   </h1>
   <p class="text-xs md:text-sm max-w-xl mx-auto mb-6 leading-tight">
    Berbagi Kebaikan, Raih Keberkahan
    <br/>
    Salurkan zakat, infaq, dan shodaqoh Anda untuk membantu sesama dan meraih keberkahan hidup. Bersama kita bisa mengubah lebih banyak kehidupan.
   </p>
   <div class="flex justify-center gap-4">
    <button class="bg-white text-cyan-600 font-semibold text-xs md:text-sm rounded-full px-5 py-2 flex items-center gap-1 hover:bg-gray-100 transition">
     Donasi Sekarang
     <i class="fas fa-arrow-right text-xs">
     </i>
    </button>
    <button class="border border-white text-white font-semibold text-xs md:text-sm rounded-full px-5 py-2 hover:bg-white hover:text-cyan-600 transition">
     Hitung Zakat
    </button>
   </div>
  </section>
  <!-- Kategori Program Centered single row -->
  <section class="px-6 py-10 max-w-7xl mx-auto text-center">
   <h2 class="font-semibold text-base md:text-lg mb-1">
    Kategori Program
   </h2>
   <p class="text-xs md:text-sm mb-6 max-w-md mx-auto">
    Pilih kategori program yang sesuai dengan niat donasi Anda
   </p>
   <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 justify-center">
   <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px] md:max-w-none mx-auto">
     <i class="fas fa-book-open text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Pendidikan
     </div>
     <div class="text-xs text-gray-600">
      Bantuan biaya pendidikan
     </div>
    </div>
    <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px] md:max-w-none mx-auto">
     <i class="fas fa-heartbeat text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Kesehatan
     </div>
     <div class="text-xs text-gray-600">
      Bantuan biaya pendidikan
     </div>
    </div>
    <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px] md:max-w-none mx-auto">
     <i class="fas fa-building text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Pembangunan
     </div>
     <div class="text-xs text-gray-600">
      Infrastruktur dan fasilitas
     </div>
    </div>
    <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px] md:max-w-none mx-auto">
     <i class="fas fa-pray text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Dakwah
     </div>
     <div class="text-xs text-gray-600">
      Penyebaran nilai-nilai Islam
     </div>
    </div>
    <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px] md:max-w-none mx-auto">
     <i class="fas fa-hands-helping text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Sosial
     </div>
     <div class="text-xs text-gray-600">
      Bantuan untuk masyarakat
     </div>
    </div>
    <div class="border border-gray-200 p-4 flex flex-col items-center rounded-lg shadow-sm w-full max-w-[140px]  md:max-w-none mx-auto">
     <i class="fas fa-globe-americas text-[#0089FF] text-4xl mb-3"></i>
     <div class="font-semibold text-sm mb-1">
      Kemanusiaan
     </div>
     <div class="text-xs text-gray-600">
      Bantuan bencana dan kemanusiaan
     </div>
    </div>
   </div>
  </section>
  <!-- Program Pilihan -->
  <section class="px-6 md:px-20 max-w-7xl mx-auto">
   <div class="flex justify-between items-center mb-4">
    <div>
     <h3 class="font-semibold text-base md:text-lg">
      Program Pilihan
     </h3>
     <p class="text-xs md:text-sm">
      Pilih program yang ingin Anda dukung
     </p>
    </div>
    <a class="text-xs md:text-sm hover:underline hover:text-[#0089FF]" href="#">
     Lihat Semua→
    </a>
   </div>
   <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
     <img alt="Blue placeholder image representing a mosque building" class="w-full h-40 object-cover" height="160" src="https://storage.googleapis.com/a1aa/image/591eedc2-559c-4255-dc26-362592c53b88.jpg" width="300"/>
     <div class="p-3 text-xs md:text-sm">
      <div class="font-semibold mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </div>
      <p class="mb-2 leading-tight">
       Ranta warga desa memiliki tempat ibadah yang layak untuk beribadah dan mengaji.
      </p>
      <div class="text-[9px] text-gray-500 mb-2">
       Terkumpul s.d Rp 6.000.000
      </div>
      <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
       <div class="bg-[#0089FF] h-1.5 rounded-full w-[15%]">
       </div>
      </div>
      <button class="w-full bg-[#0089FF] text-white text-xs md:text-sm font-semibold rounded-md py-1.5 hover:bg-cyan-700 transition">
       Donasi Sekarang
      </button>
     </div>
    </div>
    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
     <img alt="Blue placeholder image representing a mosque building" class="w-full h-40 object-cover" height="160" src="https://storage.googleapis.com/a1aa/image/591eedc2-559c-4255-dc26-362592c53b88.jpg" width="300"/>
     <div class="p-3 text-xs md:text-sm">
      <div class="font-semibold mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </div>
      <p class="mb-2 leading-tight">
       Ranta warga desa memiliki tempat ibadah yang layak untuk beribadah dan mengaji.
      </p>
      <div class="text-[9px] text-gray-500 mb-2">
       Terkumpul s.d Rp 6.000.000
      </div>
      <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
       <div class="bg-[#0089FF] h-1.5 rounded-full w-[15%]">
       </div>
      </div>
      <button class="w-full bg-[#0089FF] text-white text-xs md:text-sm font-semibold rounded-md py-1.5 hover:bg-cyan-700 transition">
       Donasi Sekarang
      </button>
     </div>
    </div>
    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
     <img alt="Blue placeholder image representing a mosque building" class="w-full h-40 object-cover" height="160" src="https://storage.googleapis.com/a1aa/image/591eedc2-559c-4255-dc26-362592c53b88.jpg" width="300"/>
     <div class="p-3 text-xs md:text-sm">
      <div class="font-semibold mb-1">
       Bantu Bangun Masjid di Desa Terpencil
      </div>
      <p class="mb-2 leading-tight">
       Ranta warga desa memiliki tempat ibadah yang layak untuk beribadah dan mengaji.
      </p>
      <div class="text-[9px] text-gray-500 mb-2">
        Terkumpul s.d Rp 6.000.000
      </div>
      <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
       <div class="bg-[#0089FF] h-1.5 rounded-full w-[15%]">
       </div>
      </div>
      <button class="w-full bg-[#0089FF] text-white text-xs md:text-sm font-semibold rounded-md py-1.5 hover:bg-cyan-700 transition">
       Donasi Sekarang
      </button>
     </div>
    </div>
   </div>
  </section>
  <!-- Kalkulator Zakat -->
  <section class="px-6 md:px-20 max-w-7xl mx-auto py-10">
   <h3 class="font-semibold text-base md:text-lg text-center mb-1">
    Kalkulator Zakat
   </h3>
   <p class="text-xs md:text-sm text-center mb-6 max-w-mt mx-auto">
    Hitung kewajiban zakat Anda dengan mudah menggunakan kalkulator ini
   </p>
   <div class="flex flex-col md:flex-row bg-white border border-gray-300 rounded-lg overflow-hidden max-w-4xl mx-auto">
    <div class="bg-[#0089FF] text-white p-6 md:w-1/3 flex flex-col justify-center space-y-4 text-xs md:text-sm">
     <div class="flex justify-center">
      <i class="fas fa-calculator text-4xl">
      </i>
     </div>
     <div class="font-semibold">
      Panduan Zakat
     </div>
     <p>
      Zakat wajib dikeluarkan setiap muslim yang memiliki harta mencapai nisab (setara dengan 85 gram emas) yang telah dimiliki selama satu tahun.
     </p>
     <p>
      Besaran zakat yang dikeluarkan adalah 2.5% dari total harta yang Anda miliki.
     </p>
     <p>
      Masukkan nilai harta Anda pada form di samping untuk menghitung besaran zakat yang perlu dikeluarkan.
     </p>
    </div>
    <form class="p-6 md:w-2/3 space-y-4 text-xs md:text-sm" onsubmit="event.preventDefault(); calculateZakat();">
     <div>
      <label class="block mb-2 font-semibold" for="jenisZakat">
       Jenis Zakat:
      </label>
      <select class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" id="jenisZakat">
      <option>
        Zakat Maal
       </option> 
      <option>
        Zakat Penghasilan
       </option>
       <option>
        Zakat Perdagangan
       </option> 
       <option>
        Zakat Emas & Perak
       </option> 
       <option>
        Zakat Pertanian
       </option> 
      </select>
     </div>
     <div>
      <label class="block mb-2 font-semibold" for="jumlahPendapatan">
       Jumlah Pendapatan
      </label>
      <div class="relative">
       <span class="absolute left-3 top-2 text-gray-400">
        Rp
       </span>
       <input class="w-full border border-gray-300 rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" id="jumlahPendapatan" min="0" placeholder="0" type="number"/>
      </div>
     </div>
     <div>
      <label class="block mb-2 font-semibold" for="periodePendapatan">
       Periode Pendapatan
      </label>
      <select class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" id="periodePendapatan">
       <option>
        Perbulan
       </option>
       <option>
        Pertahun
       </option>
      </select>
     </div>
     <div class="flex gap-4 mb-2">
      <button class="bg-[#0089FF] text-white font-semibold rounded-full px-8 py-2 hover:bg-cyan-700 transition" type="submit">
       Hitung Zakat
      </button>
      <button class="border border-[#0089FF] text-cyan-600 font-semibold rounded-full px-8 py-2 hover:bg-cyan-50 transition" id="resetBtn" type="button">
       Reset
      </button>
     </div>
     <div class="bg-[rgba(0,137,255,0.2)] text-black rounded-md p-3 text-xs md:text-sm" id="hasilZakat">
      <div class="font-semibold">
       Hasil Perhitungan Zakat
      </div>
      <div>
       <span id="hasilNominal">
        Rp. 0
       </span>
      </div>
      <a class="text-[#0089FF] hover:underline inline-block mt-1" href="/zakat">
       Bayar Zakat Sekarang →
      </a>
     </div>
    </form>
   </div>
  </section>
  <!-- Dampak Donasi Anda -->
  <section class="px-6 md:px-20 max-w-7xl mx-auto py-10">
   <h3 class="font-semibold text-base md:text-lg text-center mb-1">
    Dampak Donasi Anda
   </h3>
   <p class="text-xs md:text-sm text-center mb-6 max-w-mt mx-auto ">
    Donasi yang Anda berikan telah membantu ribuan orang di seluruh Indonesia
   </p>
   <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-5xl mx-auto text-center text-xs md:text-sm">
    <div class="border border-gray-200 p-4 rounded flex flex-col items-center shadow-sm hover:shadow-md transition">
     <i class="fas fa-graduation-cap text-[#0089FF] text-4xl mb-2"></i>
     <div class="font-semibold text-lg md:text-xl mb-1">
      25.000
     </div>
     <div class="font-semibold">
      Pendidikan
     </div>
     <div class="text-gray-600">
      Bantuan biaya pendidikan
     </div>
    </div>
    <div class="border border-gray-200 p-4 rounded flex flex-col items-center shadow-sm hover:shadow-md transition">
     <i class="fas fa-stethoscope  text-[#0089FF] text-4xl mb-2"></i>
     <div class="font-semibold text-lg md:text-xl mb-1">
      120
     </div>
     <div class="font-semibold">
      Kesehatan
     </div>
     <div class="text-gray-600">
      Bantuan biaya pendidikan
     </div>
    </div>
    <div class="border border-gray-200 p-4 rounded flex flex-col items-center shadow-sm hover:shadow-md transition">
     <i class="fas fa-users  text-[#0089FF] text-4xl mb-2"></i>
     <div class="font-semibold text-lg md:text-xl mb-1">
      45.000+
     </div>
     <div class="font-semibold">
      Donatur Aktif
     </div>
     <div class="text-gray-600">
      Orang baik yang telah berkontribusi untuk program-program kami.
     </div>
    </div>
    <div class="border border-gray-200 p-4 rounded flex flex-col items-center shadow-sm hover:shadow-md transition">
     <i class="fas fa-map-marked-alt  text-[#0089FF] text-4xl mb-2"></i>
     <div class="font-semibold text-lg md:text-xl mb-1">
      350
     </div>
     <div class="font-semibold">
      Desa Terjangkau
     </div>
     <div class="text-gray-600">
      Desa-desa di seluruh Indonesia yang telah terjangkau oleh program kami.
     </div>
    </div>
   </div>
  </section>
  <!-- Testimoni -->
  <section class="px-6 md:px-20 max-w-4xl mx-auto py-10">
   <h3 class="font-semibold text-base md:text-lg text-center mb-1">
    Testimoni
   </h3>
   <p class="text-xs md:text-sm text-center mb-6 max-w-md mx-auto">
    Apa kata mereka tentang program dan layanan kami
   </p>
   <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
   <img id="testimonial-img" class="w-20 h-20 rounded-full" src="" alt="Foto Testimoni" />
     <div class="text-xs md:text-sm flex-1">
     <p id="testimonial-text" class="mb-2 italic text-gray-600"></p>
     <div id="testimonial-name" class="font-semibold"></div>
     <a id="testimonial-role" class="text-[#0089FF] hover:underline text-xs md:text-sm" href="#"></a>

      <div class="mt-3 flex justify-center space-x-4 text-[#0089FF] text-sm">
        <button id="prev-btn" aria-label="Previous testimonial" class="hover:text-cyan-700">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button id="next-btn" aria-label="Next testimonial" class="hover:text-cyan-700">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

    </div>
   </div>
      <div class="flex justify-center space-x-2 mt-4">
      <span class="dot w-3 h-3 rounded-full bg-gray-400"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-400"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-400"></span>
      </div>
  </section>
  <!-- Redesigned Footer White -->
  <footer class="bg-white text-gray-800 py-12 mt-10 border-t border-gray-200">
   <div class="max-w-7xl mx-auto px-6 md:px-20 grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="flex flex-col items-center md:items-start space-y-3">
     <img alt="BaitulMaalKu logo, blue geometric shape with text BaitulMaalKu" class="w-27 h-12" src="https://baitulmaalku.com/assets/img/bmku.png" />
    </div>
    <div>
     <h4 class="font-semibold mb-4 text-center md:text-left text-lg border-b border-[#0089FF] pb-2">
      Program Kami
     </h4>
     <ul class="space-y-2 text-sm text-center md:text-left">
      <li>
       <a class="hover:underline" href="#">
        Zakat
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Infaq &amp; Shodaqoh
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Wakaf Produktif
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Qurban
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Beasiswa Pendidikan
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Bantuan Kesehatan
       </a>
      </li>
     </ul>
    </div>
    <div>
     <h4 class="font-semibold mb-4 text-center md:text-left text-lg border-b border-[#0089FF] pb-2">
      Kontak Kami
     </h4>
     <ul class="space-y-2 text-sm text-center md:text-left">
      <li class="flex items-center justify-center md:justify-start">
       <i class="fas fa-map-marker-alt mr-2"></i> 
       Ruko Primadona, JL. Ahmad Yani No. A2, Desa Cikampek Selatan, Kecamatan Cikampek Kabupaten Karawang
      </li>
      <li class="flex items-center justify-center md:justify-start">
       <i class="fas fa-phone mr-2"></i> +62 8111 600 660
      </li>
      <li class="flex items-center justify-center md:justify-start">
       <i class="fas fa-envelope mr-2"></i> baitulmaalku@gmail.com
      </li>
      <li class="flex space-x-4 mt-3 justify-center md:justify-start">
       <a aria-label="Facebook" class="hover:text-[#0089FF] text-gray-600 hover:text-[#0089FF]" href="https://web.facebook.com/Baitulmaalku.official/">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a aria-label="Instagram" class="hover:text-[#0089FF] text-gray-600 hover:text-[#0089FF]" href="https://www.instagram.com/baitulmaalku.official/">
        <i class="fab fa-instagram"></i>
       </a>
       <a aria-label="LinkedIn" class="hover:text-[#0089FF] text-gray-600 hover:text-[#0089FF]" href="https://www.linkedin.com/company/baitulmaalku/">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </li>
     </ul>
    </div>
   </div>
   <div class="text-center text-xs text-gray-500 mt-8">
    &copy; 2025 BaitulMaalKu. All rights reserved.
   </div>
  </footer>
  <script>
   function calculateZakat() {
      const pendapatanInput = document.getElementById('jumlahPendapatan');
      const hasilNominal = document.getElementById('hasilNominal');
      let pendapatan = parseFloat(pendapatanInput.value);
      if (isNaN(pendapatan) || pendapatan <= 0) {
        hasilNominal.textContent = 'Rp. 0';
        return;
      }
      // Calculate zakat 2.5%
      let zakat = pendapatan * 0.025;
      // Format as Indonesian Rupiah
      hasilNominal.textContent = 'Rp. ' + zakat.toLocaleString('id-ID');
    }

    document.getElementById('resetBtn').addEventListener('click', () => {
      document.getElementById('jumlahPendapatan').value = '';
      document.getElementById('hasilNominal').textContent = 'Rp. 0';
    });
  </script>

  <script>
  const testimonials = [
    {
      text: `"Beasiswa yang saya terima telah mengubah hidup saya. Sekarang saya bisa fokus kuliah tanpa memikirkan biaya. Semoga Allah membalas kebaikan para donatur yang telah membantu saya meraih cita-cita."`,
      name: "Siti Aisyah",
      role: "Penerima Beasiswa",
      img: "https://storage.googleapis.com/a1aa/image/bb108bfc-445c-453f-c40e-fcbcf476a7f8.jpg"
    },
    {
      text: `"Program ini sangat membantu saya dalam mengembangkan kemampuan. Terima kasih kepada semua pihak yang telah mendukung."`,
      name: "Ahmad Zulfikar",
      role: "Alumni Program",
      img: "https://storage.googleapis.com/a1aa/image/sample-1.jpg"
    },
    {
      text: `"Saya sangat bersyukur bisa menjadi bagian dari program ini. Pengalaman dan manfaatnya luar biasa."`,
      name: "Nurul Hidayati",
      role: "Mahasiswi Aktif",
      img: "https://storage.googleapis.com/a1aa/image/sample-2.jpg"
    }
  ];

  let currentIndex = 0;

  function updateTestimonial(index) {
    const testimonial = testimonials[index];
    document.querySelector("#testimonial-text").textContent = testimonial.text;
    document.querySelector("#testimonial-name").textContent = testimonial.name;
    document.querySelector("#testimonial-role").textContent = testimonial.role;
    document.querySelector("#testimonial-img").src = testimonial.img;

    // Update indicator dots
    document.querySelectorAll(".dot").forEach((dot, i) => {
      dot.classList.toggle("bg-[#0089FF]", i === index);
      dot.classList.toggle("bg-gray-400", i !== index);
    });
  }

  document.querySelector("#next-btn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateTestimonial(currentIndex);
  });

  document.querySelector("#prev-btn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    updateTestimonial(currentIndex);
  });

  // Initial render
  updateTestimonial(currentIndex);
</script>

<script>
  const toggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");

  toggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>

 </body>
</html>