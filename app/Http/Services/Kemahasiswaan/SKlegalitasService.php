<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\SKlegalitas;
use Illuminate\Http\Request;

class SKlegalitasService {
public function index()
    {
        $data = [
            'content' => 'Kemasiswaan/SKlegalitas/index',
        ];
        return view('Kemahasiswaan/skLegalitas/index', $data);
    }

    public function store(Request $request)
    {
        $skLegalitas = new SKlegalitas;

        // Mengisi properti model dengan data permintaan
        $skLegalitas->nama_ormawa = $request->input('nama_ormawa');
        $skLegalitas->nomor_sk = $request->input('nomor_sk');
        $skLegalitas->tanggal_terbit = $request->input('tanggal_terbit');
        $skLegalitas->tanggal_mulai = $request->input('tanggal_mulai');
        $skLegalitas->tanggal_selesai = $request->input('tanggal_selesai');

        // Menyimpan file SK ke storage lokal di direktori yang diinginkan
        if ($request->hasFile('file_sk')) {
            $filePath = $request->file('file_sk')->store('sklegalitas', 'public');
            // Menyimpan path file sebagai string dalam basis data
            $skLegalitas->file_sk = $filePath;
        }

        // Menyimpan data ke basis data
        $skLegalitas->save();

        // Mengarahkan pengguna kembali ke halaman index
        return redirect()->route('skLegalitas.index');
    }
}