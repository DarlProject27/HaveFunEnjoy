<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kolaborasi Untuk Prestasi</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    window.toggleSidebar = function () {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");

      // Toggle class supaya sidebar muncul/ilang
      sidebar.classList.toggle("-translate-x-full");
      overlay.classList.toggle("hidden");
    };
  });
</script>

</head>
<body class="font-['Segoe_UI'] bg-[#f9f9fb] text-[#333] flex">

<!-- Sidebar -->
<aside id="sidebar"
  class="fixed top-0 left-0 w-[230px] min-h-screen bg-white border-r border-gray-200 p-5
  transform transition-transform duration-300
  -translate-x-full lg:translate-x-0 z-50 shadow-lg">

  <div class="flex items-center justify-between mb-6">
    <div class="w-[60px] h-[60px] bg-[#725cad] rounded-full"></div>
    <!-- Tombol close, hanya muncul di mobile -->
    <button class="lg:hidden text-xl" onclick="toggleSidebar()">✖</button>
  </div>
  <!-- Overlay -->
    <h2 class="mb-8 text-[#111] text-xl font-semibold">Nama Web</h2>
    <ul class="space-y-3">
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Beranda</a></li>
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Jelajahi</a></li>
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Notifikasi</a></li>
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Pesan</a></li>
      <!-- Menu di Navbar -->
<li>
  <a href="#"
     onclick="openModal()"
     class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">
     Unggah
  </a>
</li>
      <li><a href="/login" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Profil</a></li>
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Tentang</a></li>
      <li><a href="#" class="block px-3 py-2 rounded-md hover:bg-[#6c63ff] hover:text-white transition">Bantuan</a></li>
    </ul>
</aside>


  </aside>

  <!-- Overlay untuk sidebar mobile -->
  <div id="overlay" class="hidden fixed inset-0 bg-black/40 z-40 lg:hidden" onclick="toggleSidebar()"></div>

  <!-- Content -->
  <main class="flex-1 w-full lg:ml-[230px]">

    <!-- Navbar Mobile -->
    <header class="lg:hidden flex items-center justify-between bg-white border-b border-gray-200 p-4 sticky top-0 z-30 shadow-sm" data-aos="fade-down">
      <h1 class="font-bold text-lg">Nama Web</h1>
      <button onclick="toggleSidebar()" class="text-2xl">☰</button>
    </header>

    <!-- HERO -->
    <section class="flex flex-col lg:flex-row items-center justify-between text-white px-6 lg:px-[250px] py-20 lg:py-[200px] bg-cover bg-center relative"
             style="background-image:url('/images/gedung.png')">
      <div class="text-center lg:text-left max-w-xl" data-aos="fade-right">
        <h1 class="text-4xl md:text-6xl lg:text-[90px] leading-tight font-extrabold drop-shadow-md">
          KOLABORASI <br> UNTUK <span class="text-[#FFD166]">PRESTASI</span>
        </h1>
        <p class="mt-4 text-base md:text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
        </p>
      </div>
      <div class="mt-10 lg:mt-0" data-aos="fade-left">
        <img src="{{ asset('images/robot.png') }}" alt="Robot"
             class="w-[250px] md:w-[400px] lg:w-[600px] animate-bounce mx-auto drop-shadow-lg">
      </div>
    </section>

    <!-- KATEGORI -->
    <section class="text-center mb-40 px-6 relative">
      <h2 class="text-3xl md:text-5xl lg:text-[70px] mt-24 mb-16 font-extrabold" data-aos="zoom-in">WUJUDKAN BERSAMA</h2>
      <div class="flex justify-center gap-6 lg:gap-[90px] flex-wrap relative z-10">
        <!-- Card -->
        <div data-aos="fade-up" data-aos-delay="200"
             class="bg-gradient-to-t from-[#5f8fa5] to-[#8ccdeb] px-6 py-8 rounded-3xl font-bold text-lg transform translate-y-10 lg:translate-y-[150px] transition cursor-pointer hover:translate-y-32 hover:shadow-2xl w-[250px]">
          <p class="text-[#ffe3a9]">Kompetisi</p>
          <img src="images/buku.png" alt="Kompetisi" class="w-[200px] h-[200px] mx-auto mt-6">
        </div>
        <div data-aos="fade-up" data-aos-delay="400"
             class="bg-gradient-to-t from-[#4e3f77] to-[#725cad] px-6 py-8 rounded-3xl font-bold text-lg transition cursor-pointer hover:-translate-y-2 hover:shadow-2xl w-[250px] text-white">
          <p>Riset</p>
          <img src="images/kacap.png" alt="Riset" class="w-[200px] h-[200px] mx-auto mt-6">
        </div>
        <div data-aos="fade-up" data-aos-delay="600"
             class="bg-gradient-to-t from-[#5f8fa5] to-[#8ccdeb] px-6 py-8 rounded-3xl font-bold text-lg transform translate-y-10 lg:translate-y-[150px] transition cursor-pointer hover:translate-y-32 hover:shadow-2xl w-[250px]">
          <p class="text-[#ffe3a9]">Proyek</p>
          <img src="images/pesawatk.png" alt="Proyek" class="w-[200px] h-[200px] mx-auto mt-6">
        </div>
      </div>
      <div class="absolute inset-x-0">
        <img src="{{ asset('images/awan.png') }}" alt="Awan" class="w-[90%] mx-auto -translate-y-[70%] opacity-70 pointer-events-none">
      </div>
    </section>

   <div class="relative py-56">
     <!-- SEARCH -->
    <section class="text-center mb-16 px-6" data-aos="fade-up">
      <h2 class="text-xl md:text-6xl font-bold mb-6">MULAI TEMUKAN PARTNER</h2>
      <div>
        <img src="images/gedungs.png" class="justify-self-center translate-y-3">
        <input type="text" placeholder="Cari berdasarkan kata kunci atau filter..."
               class="w-full z-[999] md:w-4/5 max-w-[600px] px-6 py-3 rounded-full border border-gray-300 shadow-sm outline-none focus:border-[#6c63ff] focus:shadow-md transition">
      </div>
    </section>

    <!-- POSTINGAN -->
    <section class="px-6 pb-20" data-aos="fade-up" data-aos-delay="200">
      <h2 class="text-xl md:text-2xl font-bold mb-6">Unggahan Terbaru</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition hover:border-[#6c63ff] hover:shadow-lg hover:-translate-y-1">
          <h3 class="text-lg font-bold mb-2">OWASP API Security Top 10</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet...</p>
          <a href="/artikel" class="inline-block mt-3 px-4 py-2 bg-[#6c63ff] text-white rounded-lg font-medium hover:bg-[#5846d9] transition">Selengkapnya →</a>
          <p class="mt-3 text-sm text-gray-400">12 September 2025</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition hover:border-[#6c63ff] hover:shadow-lg hover:-translate-y-1">
          <h3 class="text-lg font-bold mb-2">Tips Kolaborasi Tim Efektif</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet...</p>
          <a href="/artikel" class="inline-block mt-3 px-4 py-2 bg-[#6c63ff] text-white rounded-lg font-medium hover:bg-[#5846d9] transition">Selengkapnya →</a>
          <p class="mt-3 text-sm text-gray-400">15 September 2025</p>
        </div>
      </div>
    </section>
   </div>
   <div class="absolute" data-aos="fade-up">
    <img src="images/gunungk.png" class="w-[10000px] h-auto justify-self-center translate-y-3">
   </div>
   <div id="uploadModal"
     class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden px-4 sm:px-6 py-6 overflow-y-auto">

  <!-- Card Modal -->
  <div id="modalCard"
       class="bg-white w-[90%] max-w-lg rounded-2xl shadow-xl transform scale-90 opacity-0 transition-all duration-300
              max-h-[90vh] overflow-y-auto">

        <!-- Header -->
        <div class="flex justify-between items-center border-b px-6 py-4">
            <h2 class="text-lg font-bold text-center flex-1">UNGGAHAN BARU</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>
        </div>

        <!-- Body form dsb -->
<div class="p-6 space-y-6">

  <!-- Judul -->
  <div>
    <label class="block font-semibold mb-1">Judul</label>
    <input type="text"
           class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none"
           placeholder="Masukkan judul">
  </div>

  <!-- Deskripsi -->
  <div>
    <label class="block font-semibold mb-1">Deskripsi singkat</label>
    <textarea class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none resize-y"
              rows="3" placeholder="Masukkan deskripsi singkat"></textarea>
  </div>

  <!-- Waktu & Kapasitas (grid 2 kolom di md ke atas) -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block font-semibold mb-1">Waktu Pelaksanaan</label>
      <input type="date"
             class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none">
    </div>
    <div>
      <label class="block font-semibold mb-1">Kapasitas Tim</label>
      <input type="number"
             class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none"
             placeholder="Masukkan jumlah orang">
    </div>
  </div>

  <!-- Informasi tambahan -->
  <div>
    <label class="block font-semibold mb-1">Informasi tambahan</label>
    <input type="text"
           class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none"
           placeholder="Masukkan informasi tambahan">
  </div>

  <!-- Kategori -->
  <div>
    <label class="block font-semibold mb-1">Pilih Kategori</label>
    <input type="text"
           class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200 focus:outline-none"
           placeholder="Masukkan kategori">
  </div>

  <!-- Jenis -->
  <div>
    <label class="block font-semibold mb-2">Jenis</label>
    <div class="flex flex-wrap gap-3">
      <label class="cursor-pointer">
        <input type="radio" name="jenis" value="Kompetisi" class="hidden peer">
        <span class="peer-checked:bg-[#c62828] peer-checked:text-white
                     bg-red-100 text-red-700 px-4 py-1 rounded-full transition cursor-pointer">
          Kompetisi
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="radio" name="jenis" value="Riset" class="hidden peer">
        <span class="peer-checked:bg-[#0288d1] peer-checked:text-white
                     bg-blue-100 text-blue-700 px-4 py-1 rounded-full transition cursor-pointer">
          Riset
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="radio" name="jenis" value="Proyek" class="hidden peer">
        <span class="peer-checked:bg-[#fbc02d] peer-checked:text-white
                     bg-yellow-100 text-yellow-700 px-4 py-1 rounded-full transition cursor-pointer">
          Proyek
        </span>
      </label>
    </div>
  </div>

  <!-- Bidang -->
  <div>
    <label class="block font-semibold mb-2">Bidang</label>
    <div class="flex flex-wrap gap-3">
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Pendidikan" class="hidden peer">
        <span class="peer-checked:bg-[#7b1fa2] peer-checked:text-white
                     bg-purple-100 text-purple-700 px-4 py-1 rounded-full transition cursor-pointer">
          Pendidikan
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Sains" class="hidden peer">
        <span class="peer-checked:bg-[#2e7d32] peer-checked:text-white
                     bg-green-100 text-green-700 px-4 py-1 rounded-full transition cursor-pointer">
          Sains
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Teknologi" class="hidden peer">
        <span class="peer-checked:bg-[#00897b] peer-checked:text-white
                     bg-cyan-100 text-cyan-700 px-4 py-1 rounded-full transition cursor-pointer">
          Teknologi
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Bahasa" class="hidden peer">
        <span class="peer-checked:bg-[#ef6c00] peer-checked:text-white
                     bg-orange-100 text-orange-700 px-4 py-1 rounded-full transition cursor-pointer">
          Bahasa
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Sosial" class="hidden peer">
        <span class="peer-checked:bg-[#ad1457] peer-checked:text-white
                     bg-pink-100 text-pink-700 px-4 py-1 rounded-full transition cursor-pointer">
          Sosial
        </span>
      </label>
      <label class="cursor-pointer">
        <input type="checkbox" name="bidang[]" value="Ekonomi" class="hidden peer">
        <span class="peer-checked:bg-[#5d4037] peer-checked:text-white
                     bg-yellow-100 text-yellow-800 px-4 py-1 rounded-full transition cursor-pointer">
          Ekonomi
        </span>
      </label>
    </div>
  </div>

</div>


        <!-- Footer -->
        <div class="px-6 py-4">
            <button class="w-full bg-sky-500 text-white py-2 rounded-lg hover:bg-sky-600 transition">
                Unggah
            </button>
        </div>
    </div>
</div>

  </main>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="/js/style.js"></script>
</body>
</html>
{{-- yaudah lah ya --}}
