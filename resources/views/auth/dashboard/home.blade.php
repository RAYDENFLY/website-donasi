<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-[#ccc] min-h-screen flex">
  <!-- Sidebar -->
  <aside class="w-64 bg-white flex flex-col justify-between">
    <div>
      <div class="p-6 border-b border-gray-200">
        <img
          alt="BaitulMaalKu logo with blue and turquoise geometric pattern and text BaitulMaalKu with tagline"
          class="w-28 h-auto"
          height="80"
          src="https://storage.googleapis.com/a1aa/image/7c1ca7dc-c068-4f40-3c64-d5cf206e13dc.jpg"
          width="120"
        />
      </div>
      <nav class="mt-6">
        <ul>
          <li>
            <a
              class="flex items-center gap-3 px-6 py-3 bg-blue-200 text-blue-600 text-base font-normal rounded-r-lg"
              href="#"
            >
              <i class="fas fa-th-large text-lg"></i> Dashboard
            </a>
          </li>
          <li>
            <a
              class="flex items-center gap-3 px-6 py-3 text-base font-normal text-black hover:bg-gray-100"
              href="#"
            >
              <i class="fas fa-hand-holding-heart text-lg"></i> Program
            </a>
          </li>
          <li>
            <a
              class="flex items-center gap-3 px-6 py-3 text-base font-normal text-black hover:bg-gray-100"
              href="#"
            >
              <i class="far fa-file-alt text-lg"></i> Riwayat Donasi
            </a>
          </li>
          <li>
            <a
              class="flex items-center gap-3 px-6 py-3 text-base font-normal text-black hover:bg-gray-100"
              href="#"
            >
              <i class="far fa-file text-lg"></i> Laporan
            </a>
          </li>
          <li>
            <a
              class="flex items-center gap-3 px-6 py-3 text-base font-normal text-black hover:bg-gray-100"
              href="#"
            >
              <i class="far fa-id-card text-lg"></i> Pengguna
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="mb-6 px-6">
      <a
        class="flex items-center gap-3 text-black text-base font-normal mb-6"
        href="#"
      >
        <i class="fas fa-cog text-lg"></i> Pengaturan
      </a>
      <a class="flex items-center gap-3 text-red-600 text-base font-normal" href="#">
        <i class="far fa-window-close text-lg"></i> Keluar
      </a>
    </div>
  </aside>
  <!-- Main content -->
  <main class="flex-1 p-8">
    <h1 class="text-2xl font-extrabold mb-6">Dashboard</h1>
    <section class="flex flex-col sm:flex-row gap-4 mb-6">
      <div
        class="bg-white rounded-xl p-6 flex-1 max-w-xs sm:max-w-none"
        style="min-width: 220px"
      >
        <p class="text-gray-600 text-sm mb-1">Total Donasi</p>
        <h2 class="text-2xl font-extrabold mb-2">Rp. 970.000.000</h2>
        <p class="text-green-500 text-sm">12.5% dari bulan lalu</p>
      </div>
      <div
        class="bg-white rounded-xl p-6 flex-1 max-w-xs sm:max-w-none"
        style="min-width: 220px"
      >
        <p class="text-gray-600 text-sm mb-1">Total Program</p>
        <h2 class="text-2xl font-extrabold mb-2">38</h2>
        <p class="text-green-500 text-sm">1.5% dari bulan lalu</p>
      </div>
      <div
        class="bg-white rounded-xl p-6 flex-1 max-w-xs sm:max-w-none"
        style="min-width: 220px"
      >
        <p class="text-gray-600 text-sm mb-1">Total Donatur</p>
        <h2 class="text-2xl font-extrabold mb-2">1,200</h2>
        <p class="text-green-500 text-sm">2,2% Dari bulan lalu</p>
      </div>
    </section>
    <section>
      <div
        class="bg-white rounded-xl p-4 max-w-4xl shadow-md"
        style="min-width: 320px; max-width: 600px; height: 320px;"
      >
        <h2 class="font-bold text-gray-800 mb-4">Tren Donasi</h2>
        <canvas id="donationChart" class="w-full h-full"></canvas>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById("donationChart").getContext("2d");
    const donationChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
          {
            label: "Donasi",
            data: [300000, 400000, 550000, 520000, 500000, 600000],
            borderColor: "#2f855a",
            backgroundColor: "transparent",
            tension: 0.3,
            fill: false,
            pointBackgroundColor: "#2f855a",
            pointBorderColor: "#fff",
            pointRadius: 5,
            pointHoverRadius: 7,
            borderWidth: 2,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 10,
            bottom: 10,
            left: 10,
            right: 10,
          },
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              callback: function (value) {
                return value.toLocaleString();
              },
              color: "#4a5568",
              font: {
                size: 12,
              },
            },
            grid: {
              color: "#e2e8f0",
            },
            max: 700000,
            min: 0,
            stepSize: 100000,
          },
          x: {
            ticks: {
              color: "#4a5568",
              font: {
                size: 12,
              },
            },
            grid: {
              color: "#e2e8f0",
            },
          },
        },
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            enabled: true,
            backgroundColor: "#2f855a",
            titleColor: "#fff",
            bodyColor: "#fff",
          },
        },
      },
    });
  </script>
</body>
</html>