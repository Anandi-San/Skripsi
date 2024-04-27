<?php

namespace App\Http\Services\Ormawa;

use App\Models\Proposal_Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalKegiatan {

    public function unggah()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/index',
        ];
        return view('Ormawa/ProposalKegiatan/unggah', $data);
    }

    public function menunggu()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/menunggu',
        ];
        return view('Ormawa/ProposalKegiatan/menunggu', $data);
    }

    public function listRevisi()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/listRevisi',
        ];
        return view('Ormawa/ProposalKegiatan/ListRevisi', $data);
    }

    public function Revisi()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/Revisi',
        ];
        return view('Ormawa/ProposalKegiatan/Revisi', $data);
    }
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
        'judul_kegiatan',
        'pendahuluan_kegiatan',
        'tujuan_kegiatan',
        'nama_kegiatan',
        'bentuk_kegiatan',
        'sasaran',
        'parameter_keberhasilan',
        'waktu_dan_tempat_kegiatan',
        //ganti nanti typo ini
        'sususan_acara',
        'rancangan_anggaran_biaya',
        'kepanitiaan',
        'penanggung_jawab',
        'penutup',
    ];
    
    foreach ($textAreaFields as $index => $field) {
        $textAreaKey = "kegiatanTextArea-$index";
        $textData[$field] = $request->$textAreaKey;
    }

    $fileData = [];
    $fileFields = [
        'sampul_depan',
        'lampiran1',
        'lampiran2',
        'lampiran3',
        'sampul_belakang',
    ];
    $data = [
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
                $path = $uploadedFile->storeAs('public/proposal_kegiatan', $desiredFileName);
                $path = str_replace('public/proposal_kegiatan/', '', $path);
                // Simpan path file ke array fileData
                $fileData[$field] = $path;
            }
        }
    }

    // Masukkan data teks dan file ke dalam model Proposal_Kegiatan
    $proposalKegiatan = Proposal_Kegiatan::updateOrCreate(
        ['id_SK_legalitas' => 1], // Tentukan kondisi pencarian
        array_merge($textData, $fileData)
    );

    // Simpan model untuk menyimpan perubahan ke database
    $proposalKegiatan->save();

    // Arahkan ke halaman berikutnya
    return redirect()->route('waitingrevision');
}
}
