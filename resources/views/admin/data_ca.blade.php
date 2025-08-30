@extends('layout.master') 

@section('title')
    Data-Ca
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
         <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-primary">Data Pendaftar Calon Anggota HMPS-SI</h3>
        <a href="{{ route('admin.data_ca.cetak') }}" class="btn btn-success btn-sm" target="_blank">
            <i class="fa fa-print"></i> Cetak PDF
        </a>
    </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table id="datalaporan" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Agama</th>
                            <th>Hobi</th>
                            <th>Keahlian</th>
                            <th>Alasan Bergabung</th>
                            <th>Foto Diri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $item)
                        <tr>
                            <td class="text-center fw-bold">{{ $loop->iteration }}</td>
                            <td class="text-center fw-bold">{{ $item->nama }}</td>
                            <td class="text-center fw-bold">{{ $item->nim }}</td>
                            <td class="text-center fw-bold">{{ $item->alamat}}</td>
                            <td class="text-center fw-bold">{{ $item->tgl_lahir}}</td>
                            <td class="text-center fw-bold">{{ $item->jenis_kelamin }}</td>
                            <td class="text-center fw-bold">{{ $item->asal_sekolah }}</td>
                            <td class="text-center fw-bold">{{ $item->agama }}</td>
                            <td class="text-center fw-bold">{{ $item->hobi}}</td>
                            <td class="text-center fw-bold">{{ $item->keahlian}}</td>
                            <td class="text-center fw-bold">{{ $item->alasan_bergabung}}</td>
                            <td class="text-center fw-bold">
                                @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" width="100">
                                @else
                                -
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.data_ca.edit', $item->id_ca) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.data_ca.destroy', $item->id_ca) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="13" class="text-center fw-bold">Belum ada data pendaftar.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- jQuery & DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    document.getElementById('btn-logout').addEventListener('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan keluar dari sesi ini.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout!',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
});

    $(document).ready(function() {
        $('#datalaporan').DataTable({
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
        });
    });
</script>
@endsection
