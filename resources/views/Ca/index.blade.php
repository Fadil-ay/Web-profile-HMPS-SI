@extends('layout.user')

@section('content')
<!-- Navbar -->
<header class="absolute top-0 left-0 w-full z-50 px-6 md:px-12 py-4 flex justify-between items-center">
    <div class="text-white font-bold text-2xl">HMPS-SI</div>
    <nav class="hidden md:flex space-x-8 text-white font-medium">
        <a href="#hero" class="hover:text-yellow-400">Home</a>
        <a href="#tentang" class="hover:text-yellow-400">Tentang</a>
        <a href="#visi-misi" class="hover:text-yellow-400">Visi & Misi</a>
        <a href="#kegiatan" class="hover:text-yellow-400">Kegiatan</a>
    </nav>
    <a href="{{ route('data_ca.create') }}"
       class="bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg transition">
        Daftar
    </a>
</header>

<!-- Hero Section -->
<section id="hero" class="relative h-[700px] bg-gradient-to-b from-purple-900 via-indigo-900 to-gray-900 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/img1.jpeg')}}" alt="Hero Background" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="relative z-10 text-center text-white px-6 max-w-3xl">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Selamat Datang di HMPS-SI</h1>
        <p class="text-lg md:text-xl text-gray-200 leading-relaxed mb-8">
            Himpunan Mahasiswa Program Studi Sistem Informasi <br>
            <span class="font-semibold text-yellow-400">STMIK Adhi Guna Palu</span>
        </p>
        <a href="{{ route('data_ca.create') }}"
           class="inline-block bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-white text-lg font-semibold px-8 py-3 rounded-full shadow-xl transition">
            Yuk Daftar Sekarang 
        </a>
    </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="relative bg-gradient-to-b from-gray-900 to-indigo-950 py-20 px-6 md:px-12">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-6">Tentang HMPS-SI</h2>
        <p class="text-gray-300 leading-relaxed max-w-3xl mx-auto">
            HMPS-SI adalah wadah bagi mahasiswa Program Studi Sistem Informasi untuk berkembang dalam bidang akademik, organisasi, dan kepemimpinan. 
            Kami menyelenggarakan berbagai kegiatan edukatif, kreatif, serta berorientasi pada kemajuan bersama.
        </p>
    </div>
</section>

<!-- Visi & Misi Section -->
<section id="visi-misi" class="bg-gradient-to-b from-indigo-950 to-purple-900 py-20 px-6 md:px-12">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Visi & Misi</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">Menjadi organisasi mahasiswa yang aktif, solutif, dan inovatif dalam mendukung pengembangan potensi mahasiswa.</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-gradient-to-b from-purple-800 to-indigo-900 p-8 rounded-3xl shadow-xl hover:scale-105 transition">
            <h3 class="text-xl font-bold text-yellow-400 mb-4">Visi</h3>
            <p class="text-gray-300">Mewujudkan Himpunan <b><u>"Mahasiswa Program Studi Sistem Informasi"</u></b> (HMPS-SI) sebagai organisasi yang aktif serta menjadikan wadah pengembangan mahasiswa yang solidaritas
            , profesional, dan berintegritas tinggi, serta mampu berkontribusi positif dalam dunia pendidikan, teknologi informasi dan masyarakat.</p>
        </div>
        <div class="bg-gradient-to-b from-indigo-800 to-purple-900 p-8 rounded-3xl shadow-xl hover:scale-105 transition">
            <h3 class="text-xl font-bold text-yellow-400 mb-4">Misi</h3>
            <ul class="text-gray-300 space-y-2 text-left list-disc list-inside">
                <li>Membangun dan memperkuat hubungan kekeluargaan antar anggota dengan menjunjung tinggi nilai solidaritas
                    profesionalisme dedikasi serta memperluas relasi dengan organisasi atau komunitas.
                </li>
                <li>Mengembangkan kompetensi mahasiswa dalam bidang teknologi informasi, keorganisasian, melalui kegiatan yang edukatif
                    dan pengabdian kepasa masyarakat.
                </li>
                <li>Menanamkan nilai-nilai keimanan dalam setiap aktivitas organisasi.</li>
            </ul>
        </div>
        <div class="bg-gradient-to-b from-purple-900 to-indigo-950 p-8 rounded-3xl shadow-xl hover:scale-105 transition">
            <h3 class="text-xl font-bold text-yellow-400 mb-4">Tujuan</h3>
            <p class="text-gray-300">Mendukung terciptanya lulusan Sistem Informasi yang profesional, berkarakter, dan siap bersaing di dunia kerja.</p>
        </div>
    </div>
</section>

<!-- Kegiatan Section -->
<section id="kegiatan" class="bg-gradient-to-b from-gray-900 to-indigo-950 py-20 px-6 md:px-12">
  <div class="max-w-6xl mx-auto text-center mb-16">
    <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">Galeri Kegiatan</h2>
    <p class="text-gray-300 max-w-2xl mx-auto">Berikut beberapa dokumentasi kegiatan seru yang telah kami lakukan.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    
    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{ asset('assets/img/pembelajaran.jpeg')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 1">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
          Kegiatan Pelatihan Hardware HMPS-SI
        </p>
      </div>
    </div>

    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{asset('assets/img/sosialisasi.jpeg')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 2">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
          Kegiatan Sosialisasi Program Studi Sistem Informasi
        </p>
      </div>
    </div>

    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{asset('assets/img/mubes.JPG')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 3">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
         Kegiatan Musyawarah Besar HMPS-SI
        </p>
      </div>
    </div>

    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{asset('assets/img/pmj.JPG')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 4">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
          Kegiatan Penerimaan Mahasiswa Jurusan (PMJ)
        </p>
      </div>
    </div>

    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{asset('assets/img/HariSampah.JPG')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 5">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
          Kegiatan Hari Peduli Sampah Nasional
        </p>
      </div>
    </div>

    <!-- Card -->
    <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-700 hover:border-yellow-400 transition">
      <img src="{{asset('assets/img/lomba web.JPG')}}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Kegiatan 6">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-end">
        <p class="text-white text-lg font-semibold p-4 transform translate-y-6 group-hover:translate-y-0 transition duration-500">
         Kegiatan Lomba Web Desain Antar Sekolah
        </p>
      </div>
    </div>

  </div>
</section>

<!-- CTA Section -->
<section class="relative bg-gradient-to-r from-yellow-400 to-orange-500 py-20 text-center">
    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Jadilah bagian dari HMPS-SI!</h3>
    <a href="{{ route('data_ca.create') }}"
       class="bg-white text-yellow-600 hover:bg-gray-100 font-semibold px-10 py-3 rounded-full shadow-xl transition">
        Daftar Sekarang
    </a>
</section>
@endsection
