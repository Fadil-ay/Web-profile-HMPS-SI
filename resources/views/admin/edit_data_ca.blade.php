@extends('layout.master')

@section('title', 'Edit Data CA')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="mb-4 text-primary">Edit Data Calon Anggota</h3>

        <form action="{{ route('admin.data_ca.update', $data->id_ca) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" value="{{ old('nim', $data->nim) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat', $data->alamat) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir', $data->tgl_lahir) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah', $data->asal_sekolah) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Agama</label>
                <select name="agama" class="form-control" required>
                    <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ $data->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ $data->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ $data->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Hobi</label>
                <input type="text" name="hobi" value="{{ old('hobi', $data->hobi) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Bidang Keahlian</label>
                <input type="text" name="keahlian" value="{{ old('keahlian', $data->keahlian) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Alasan Bergabung</label>
                <textarea name="alasan_bergabung" rows="3" class="form-control">{{ old('alasan_bergabung', $data->alasan_bergabung) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Foto</label><br>
                @if($data->foto)
                    <img src="{{ asset('storage/' . $data->foto) }}" width="120" class="mb-2 rounded">
                @endif
                <input type="file" name="foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.data_ca.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
