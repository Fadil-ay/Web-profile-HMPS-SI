<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\DataCa;

class data_CAController extends Controller
{
    // Tampilkan form pendaftaran (opsional)
    public function create()
    {
        return view('Ca.register');
    }

    // Simpan data pendaftaran
    public function store(Request $request)
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

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto-ca', 'public');
            $validatedData['foto'] = $foto;
        }

        DataCa::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}                                                     
