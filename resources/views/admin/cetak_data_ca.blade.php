<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Data CA</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11px; }
        h2 { text-align: center; margin-bottom: 15px; }

        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px; 
            table-layout: fixed; /* supaya kolom punya lebar tetap */
        }
        th, td { 
            border: 1px solid #000; 
            padding: 5px; 
            text-align: center; 
            word-wrap: break-word; /* teks panjang turun ke bawah */
        }
        th { 
            background: #f2f2f2; 
            font-weight: bold;
        }
        /* Atur lebar kolom biar proporsional */
        th:nth-child(1), td:nth-child(1) { width: 3%; }   /* No */
        th:nth-child(2), td:nth-child(2) { width: 10%; }  /* Nama */
        th:nth-child(3), td:nth-child(3) { width: 8%; }   /* NIM */
        th:nth-child(4), td:nth-child(4) { width: 15%; }  /* Alamat */
        th:nth-child(5), td:nth-child(5) { width: 8%; }   /* Tgl Lahir */
        th:nth-child(6), td:nth-child(6) { width: 8%; }   /* Jenis Kelamin */
        th:nth-child(7), td:nth-child(7) { width: 12%; }  /* Asal Sekolah */
        th:nth-child(8), td:nth-child(8) { width: 8%; }   /* Agama */
        th:nth-child(9), td:nth-child(9) { width: 10%; }  /* Hobi */
        th:nth-child(10), td:nth-child(10) { width: 10%; } /* Keahlian */
        th:nth-child(11), td:nth-child(11) { width: 13%; } /* Alasan Bergabung */
    </style>
</head>
<body>
    <h2>Data Calon Anggota</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Agama</th>
                <th>Hobi</th>
                <th>Keahlian</th>
                <th>Alasan Bergabung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $item)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tgl_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->asal_sekolah }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->hobi }}</td>
                <td>{{ $item->keahlian }}</td>
                <td>{{ $item->alasan_bergabung }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
