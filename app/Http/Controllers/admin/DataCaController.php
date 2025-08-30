<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\DataCa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage; 

class DataCaController extends Controller
{    
    // Menampilkan semua data pendaftar untuk admin
    public function index()
    {
        $data = DataCa::all();
        return view('admin.data_ca', compact('data'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = DataCa::findOrFail($id);
        return view('admin.edit_data_ca', compact('data'));
    }

   // Update data
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama'             => 'nullable|string|max:50',
            'nim'              => 'required|string|max:13',
            'alamat'           => 'nullable|string|max:200',
            'tgl_lahir'        => 'nullable|date',
            'jenis_kelamin'    => 'required|string|max:50',
            'asal_sekolah'     => 'required|string|max:200',
            'agama'            => 'required|string|max:50',
            'hobi'             => 'required|string|max:200',
            'keahlian'         => 'nullable|string|max:200',
            'alasan_bergabung' => 'nullable|string|max:225',
            'foto'             => 'nullable|image|max:2048', 
        ]);

        $data = DataCa::findOrFail($id);

        // Cek kalau ada upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($data->foto && Storage::disk('public')->exists($data->foto)) {
                Storage::disk('public')->delete($data->foto);
            }

            // Simpan foto baru
            $foto = $request->file('foto')->store('foto-ca', 'public');
            $validatedData['foto'] = $foto;
        } else {
            // Kalau tidak upload foto, jangan update kolom foto
            unset($validatedData['foto']);
        }

        $data->update($validatedData);

        return redirect()->route('admin.data_ca.index')->with('success', 'Data berhasil diperbarui!');
    }

    // cetak PDF
    public function cetak()
    {
        $data = DataCa::all();

        $pdf = Pdf::loadView('admin.cetak_data_ca', compact('data'))
            ->setPaper('a4', 'landscape');
        return $pdf->download('data_ca.pdf'); 
        return $pdf->stream('data_ca.pdf'); 
    }

    // Hapus data
    public function destroy($id)
    {
        $item = DataCa::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
