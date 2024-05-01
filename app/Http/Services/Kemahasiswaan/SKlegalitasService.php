<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\SKlegalitas;
use Illuminate\Http\Request;

class SKlegalitasService {
public function index()
    {
        $skLegalitas = SKlegalitas::with('pengajuanLegalitas.ormawaPembina.ormawa')->get();

        return $skLegalitas;
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            // 'nama_ormawa' => 'sometimes|string|max:255',
            'nomor_SK' => 'required|string|max:255',
            'tanggal_terbit' => 'required|date',
            'tanggal_berlaku_mulai' => 'required|date',
            'tanggal_berlaku_selesai' => 'required|date',
            'file_SK' => 'required|file|max:5000|mimes:pdf,doc,docx', // Validasi file
        ]);

        dd($request);

        // Simpan file ke path storage/app/public/skLegalitas
        $filePath = null;
        if ($request->hasFile('file_SK')) {
            // Simpan file ke direktori 'skLegalitas' dalam storage publik
            $filePath = $request->file('file_SK')->store('skLegalitas', 'public');
        }

        // Simpan data yang diunggah ke database
        $skLegalitas = new SKlegalitas();
        $skLegalitas->pengajuan_legalitas_id = 1;
        $skLegalitas->nomor_SK = $request->input('nomor_SK');
        $skLegalitas->tanggal_terbit = $request->input('tanggal_terbit');
        $skLegalitas->tanggal_berlaku_mulai = $request->input('tanggal_berlaku_mulai');
        $skLegalitas->tanggal_berlaku_selesai = $request->input('tanggal_berlaku_selesai');
        
        // Simpan path file ke database jika file diunggah
        if ($filePath) {
            $skLegalitas->file_SK_path = $filePath;
        }

        // Simpan data ke database
        $skLegalitas->save();

        // Redirect setelah menyimpan
        return redirect()->route('Kemahasiswaan.skLegalitas.index')->with('success', 'Data berhasil disimpan');
    }
}