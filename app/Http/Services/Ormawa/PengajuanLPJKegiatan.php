<?php

namespace App\Http\Services\Ormawa;

use Illuminate\Http\Request;
use App\Models\LPJkegiatan;

class PengajuanLPJkegiatan {

    public function unggah()
    {
        $data = [
            'content' => 'ormawa/LpjKegiatan/index',
        ];
        return view('Ormawa/LpjKegiatan/unggah', $data);
    }

    public function menunggu()
    {
        $data = [
            'content' => 'ormawa/LpjKegiatan/menunggu',
        ];
        return view('Ormawa/LpjKegiatan/menunggu', $data);
    }

    public function listRevisi()
    {
        $data = [
            'content' => 'ormawa/LpjKegiatan/listRevisi',
        ];
        return view('Ormawa/LpjKegiatan/listRevisi', $data);
    }

    public function Revisi()
    {
        $data = [
            'content' => 'ormawa/LpjKegiatan/Revisi',
        ];
        return view('Ormawa/LpjKegiatan/revisi', $data);
    }

    // ATUR Status
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            // Aturan validasi untuk input teks
            'kegiatanTextArea-0' => 'required|string',
            'kegiatanTextArea-1' => 'required|string',
            'kegiatanTextArea-2' => 'required|string',
            'kegiatanTextArea-3' => 'required|string',
            'kegiatanTextArea-4' => 'required|string',
            'kegiatanTextArea-5' => 'required|string',
            'kegiatanTextArea-6' => 'required|string',
            'kegiatanTextArea-7' => 'required|string',
            'kegiatanTextArea-8' => 'required|string',
            'kegiatanTextArea-9' => 'required|string',
            'kegiatanTextArea-10' => 'required|string',
            'kegiatanTextArea-11' => 'required|string',
            'kegiatanTextArea-12' => 'required|string',
            // Aturan validasi untuk input file
            'files.*' => 'required|file|max:5120',
        ]);
        // dd($request);

        // Simpan data ke dalam variabel
        $textData = [];
        $textAreaFields = [
            'judul_LPJ',
            'pendahuluan_LPJ',
            'tujuan_LPJ',
            'nama_dan_tema_kegiatan',
            'sasaran_kegiatan',
            'laporan_kegiatan',
            'realisasi_pencapaian',
            'evaluasi_kegiatan',
            'susunan_acara',
            'kepanitiaan',
            'dokumentasi_kegiatan',
            'penangung_jawab_kegiatan',
            'penutup',
        ];
        
        foreach ($textAreaFields as $index => $field) {
            $textAreaKey = "kegiatanTextArea-$index";
            $textData[$field] = $request->$textAreaKey;
        }

        $fileData = [];
        $fileFields = [
            'SPJ_kegiatan',
            'sampul_depan',
            'lampiran1',
            'lampiran2',
            'lampiran3',
            'sampul_belakang',
        ];
        $data = [
            'SPJ Kegiatan',
            'Sampul Depan',
            'Lampiran 1',
            'Lampiran 2',
            'Lampiran 3',
            'Sampul Belakang',
        ];
        
        // Proses setiap file
        foreach ($fileFields as $index => $field) {
            $fileInputName = 'file-upload-' . $index;
            
            if ($request->hasFile($fileInputName)) {
                $uploadedFile = $request->file($fileInputName);
                if ($uploadedFile) {
                    // Dapatkan nama file yang diinginkan
                    $desiredFileName = $data[$index] . '.' . $uploadedFile->getClientOriginalExtension();

                    // Simpan file ke storage
                    $path = $uploadedFile->storeAs('public/lpjKegiatan', $desiredFileName);
                    $path = str_replace('public/lpjKegiatan/', '', $path);
                    // Simpan path file ke array fileData
                    $fileData[$field] = $path;
                }
            }
        }

        // Masukkan data teks dan file ke dalam model Proposal_Kegiatan
        $lpjKegiatan = LPJkegiatan::updateOrCreate(
            ['id_proposal_kegiatan' => 1], // Tentukan kondisi pencarian
            array_merge($textData, $fileData)
        );

        // Simpan model untuk menyimpan perubahan ke database
        $lpjKegiatan->save();

        // Arahkan ke halaman berikutnya
        return redirect()->route('waitingrevision');
    }
}
