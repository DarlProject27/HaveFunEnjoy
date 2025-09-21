<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Proyek</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Toggle sidebar
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('-translate-x-full');
    }
  </script>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div id="sidebar"
       class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50">
    <div class="flex items-center justify-between px-4 py-3 border-b">
      <h2 class="text-lg font-semibold text-gray-700">Menu</h2>
      <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-red-500">
        ✖
      </button>
    </div>
    <nav class="p-4 space-y-2">
      <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-500 hover:text-white">Dashboard</a>
      <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-500 hover:text-white">Unggah</a>
      <a href="#" class="block px-3 py-2 rounded hover:bg-indigo-500 hover:text-white">Riwayat</a>
    </nav>
  </div>

  <!-- Tombol toggle (mobile) -->
  <div class="lg:hidden p-3">
    <button onclick="toggleSidebar()" class="px-3 py-2 bg-indigo-600 text-white rounded shadow">
      ☰ Menu
    </button>
  </div>

  <!-- Konten utama -->
  <div class="lg:ml-64 p-6">
    <div class="max-w-6xl mx-auto bg-white shadow rounded-2xl p-6">
      <!-- Judul -->
      <h1 class="text-2xl font-bold text-indigo-900 mb-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit
      </h1>
      <p class="text-gray-600 mb-4">
        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>

      <!-- Tag -->
      <div class="flex gap-2 mb-4">
        <span class="px-3 py-1 text-sm rounded-full bg-purple-600 text-white">JENIS</span>
        <span class="px-3 py-1 text-sm rounded-full bg-purple-600 text-white">KATEGORI</span>
        <span class="px-3 py-1 text-sm rounded-full bg-purple-600 text-white">KATEGORI</span>
      </div>

      <!-- Layout Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Kiri -->
        <div class="lg:col-span-2 space-y-4">
          <div>
            <h3 class="font-semibold text-gray-800 mb-2">Deskripsi Singkat</h3>
            <p class="text-gray-600 text-sm">
              Lorem ipsum dolor sit amet consectetur adipisicing elit...
            </p>
          </div>

          <div class="grid grid-cols-2 gap-4 text-sm">
            <div class="flex items-center gap-2">
              <span>📅</span> <span>29 Agustus 2025</span>
            </div>
            <div class="flex items-center gap-2">
              <span>👥</span> <span>1/3</span>
            </div>
          </div>

          <div>
            <h3 class="font-semibold text-gray-800 mb-2">Informasi tambahan</h3>
            <p class="text-gray-600 text-sm">
              Lorem ipsum dolor sit amet consectetur adipisicing elit...
            </p>
          </div>

          <!-- Form ajakan -->
          <div class="border-t pt-4">
            <p class="font-semibold text-yellow-600 mb-2">
              Yuk, ajukan diri untuk bekerja sama!
            </p>
            <textarea class="w-full border rounded-lg p-3 text-sm focus:ring focus:ring-indigo-200"
                      placeholder="Berikan pesan singkat mengenai alasan kamu cocok..."></textarea>
            <button class="mt-3 w-full py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-lg">
              JADI PARTNER
            </button>
          </div>
        </div>

        <!-- Kanan -->
        <div class="border rounded-2xl p-4 bg-gray-50 space-y-4">
          <div class="flex flex-col items-center">
            <img src="https://via.placeholder.com/100" class="w-24 h-24 rounded-full mb-2" alt="Profile">
            <h3 class="font-bold text-gray-800">NAMA SAYA SIAPA</h3>
            <p class="text-sm text-gray-500">PENDIDIKAN MATEMATIKA 2025</p>
          </div>

          <div>
            <h4 class="font-semibold text-gray-800 mb-2">Bidang Pemintan:</h4>
            <div class="flex flex-wrap gap-2">
              <span class="px-2 py-1 bg-purple-600 text-white text-xs rounded-full">Pendidikan</span>
              <span class="px-2 py-1 bg-green-700 text-white text-xs rounded-full">Sains</span>
            </div>
          </div>

          <div>
            <h4 class="font-semibold text-gray-800 mb-2">Deskripsi Diri</h4>
            <p class="text-sm text-gray-600">
              Lorem ipsum dolor sit amet consectetur adipisicing elit...
            </p>
          </div>

          <div>
            <h4 class="font-semibold text-gray-800 mb-2">Riwayat Prestasi</h4>
            <ul class="list-disc pl-5 text-sm text-gray-600 space-y-1">
              <li>Juara 1 | 2025</li>
              <li>Juara 1 | 2025</li>
              <li>Juara 1 | 2025</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
