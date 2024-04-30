<?php

namespace App\Http\Services\Ormawa;

use App\Models\Proposal_Kegiatan;
use App\Models\SKlegalitas;
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
        // Aturan validasi untuk input file
        'files.*' => 'required|file|max:5120',
    ]);
    // dd($request);

    // Simpan data ke dalam variabel
    $textData = [];
    $textAreaFields = [
        'nomor_SK',
        'tanggal_terbit',
        'tanggal_berlaku_mulai',
        'tanggal_berlaku_selesai',
    ];
    
    foreach ($textAreaFields as $index => $field) {
        $textAreaKey = "kegiatanTextArea-$index";
        $textData[$field] = $request->$textAreaKey;
    }

    $fileData = [];
    $fileFields = [
        'nomor_SK',
        'tanggal_terbit',
        'tanggal_berlaku_mulai',
        'tanggal_berlaku_selesai',
    ];
    $data = [
        'nomor_SK',
        'tanggal_terbit',
        'tanggal_berlaku_mulai',
        'tanggal_berlaku_selesai',
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
                $path = $uploadedFile->storeAs('public/sk_legalitas', $desiredFileName);
                $path = str_replace('public/sk_legalitas/', '', $path);
                // Simpan path file ke array fileData
                $fileData[$field] = $path;
            }
        }
    }

    // Masukkan data teks dan file ke dalam model Proposal_Kegiatan
    $sk_legalitas = SKlegalitas::updateOrCreate(
        ['id_pengajuan_legalitas' => 1], // Tentukan kondisi pencarian
        array_merge($textData, $fileData)
    );

    // Simpan model untuk menyimpan perubahan ke database
    $sk_legalitas->save();

    // Arahkan ke halaman berikutnya
    return redirect()->route('waitingrevision');
}
}
