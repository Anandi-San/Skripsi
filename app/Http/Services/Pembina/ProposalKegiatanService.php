<?php

namespace App\Http\Services\Pembina;

use App\Models\Pembina;
use App\Models\Proposal_Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalKegiatanService {

    public function index()
{
    // Ambil pengguna yang sedang login
    $user = Auth::user();
    
    // Temukan Pembina yang terkait dengan pengguna yang login
    $pembina = Pembina::where('id_pengguna', $user->id)->first();

    // Ambil daftar OrmawaPembina yang terkait dengan Pembina
    $ormawaPembinaList = $pembina->ormawaPembina;
    
    // Array untuk menampung data Proposal_Kegiatan
    $proposalKegiatanData = [];

    // Iterasi melalui OrmawaPembina yang terkait dengan Pembina
    foreach ($ormawaPembinaList as $ormawaPembina) {
        // Dapatkan daftar pengajuan legalitas terkait OrmawaPembina
        $pengajuanLegalitasList = $ormawaPembina->pengajuanLegalitas;
        
        // Loop melalui pengajuan legalitas untuk mendapatkan SK Legalitas
        foreach ($pengajuanLegalitasList as $pengajuanLegalitas) {
            $skLegalitas = $pengajuanLegalitas->skLegalitas;
            // dd($skLegalitas);
            
            // Pastikan bahwa $skLegalitas tidak null
            if ($skLegalitas) {
                // Loop melalui setiap SK Legalitas
                foreach ($skLegalitas as $skLegalitasItem) {
                    // Periksa apakah $skLegalitasItem memiliki relasi ke ProposalKegiatan
                    if (isset($skLegalitasItem->proposalKegiatan)) {
                        // Tambahkan data ProposalKegiatan ke dalam array
                        $proposalKegiatanData[] = $skLegalitasItem->proposalKegiatan;
                    }
                    dd($proposalKegiatanData);
                }
            }
        }
    }

    // Mengembalikan data ProposalKegiatan
    return view('nama_view_anda', ['proposalKegiatanData' => $proposalKegiatanData]);
}

    

    


    public function Revisi()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/Revisi',
        ];
        return view('Ormawa/ProposalKegiatan/Revisi', $data);
    }
}
