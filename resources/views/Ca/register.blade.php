@extends('layout.register')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gray-900 py-12 px-6">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/img2.jpeg') }}" 
             alt="Background" 
             class="w-full h-full object-cover opacity-30">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <!-- Form Card -->
    <div class="relative bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl w-full max-w-2xl p-8">
        
        <!-- Judul -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800">PENDAFTARAN</h1>
            <h2 class="text-xl font-semibold text-yellow-600">Calon Anggota HMPS-SI</h2>
            <p class="mt-2 text-gray-500">Silakan isi data berikut dengan lengkap</p>
        </div>

        <!-- Notifikasi -->
        @if(session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('data_ca.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="block font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">NIM</label>
                <input type="text" name="nim" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 bg-white focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Agama</label>
                <select name="agama" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 bg-white focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
                    <option value="">Pilih</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Konghucu</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Hobi</label>
                <input type="text" name="hobi" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none" required>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Bidang Keahlian / Keterampilan</label>
                <input type="text" name="keahlian" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Alasan Bergabung</label>
                <textarea name="alasan_bergabung" rows="3" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none" required></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Upload Foto 3x4</label>
                <input type="file" name="foto" accept="image/*" class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            </div>

            <!-- Tombol -->
            <div class="flex justify-between items-center space-x-3 pt-6">
                <a href="{{ url('/') }}" class="w-1/2 bg-red-500 hover:bg-red-600 text-white py-3 rounded-lg text-center font-semibold shadow-lg transition">
                    Kembali
                </a>
                <button type="submit" class="w-1/2 bg-yellow-500 hover:bg-yellow-600 text-white py-3 rounded-lg font-semibold shadow-lg transition">
                    Kirim Pendaftaran
                </button>
            </div>
        </form>
    </div>
</div>
    <!-- Modal Sukses -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8 text-center relative">
            
            <h2 class="text-2xl font-bold text-gray-800">Pendaftaran Berhasil!</h2>
            <p class="mt-3 text-gray-600">Terima kasih telah mendaftar. Silakan bergabung ke grup WhatsApp untuk info lebih lanjut.</p>

            <!-- Tombol Join WhatsApp -->
            <a href="https://chat.whatsapp.com/BCcHtdPci3P8CQsNxHo6wS?mode=ems_copy_t" target="_blank"
            class="mt-6 inline-block w-full bg-yellow-500 hover:bg-green-600 text-white font-semibold py-3 rounded-lg shadow-lg transition">
                Gabung ke Grup WhatsApp
            </a>

            <!-- Tombol Close -->
            <button onclick="closeModal()" 
                    class="mt-3 w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 rounded-lg transition">
                Tutup
            </button>
        </div>
    </div>

<script>
    function closeModal() {
        document.getElementById('successModal').classList.add('hidden');
    }

    // Jika session sukses, tampilkan modal
    @if(session('success'))
        window.addEventListener('load', () => {
            document.getElementById('successModal').classList.remove('hidden');
        });
    @endif
</script>
@endsection
