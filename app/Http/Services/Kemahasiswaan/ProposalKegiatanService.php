<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\Proposal_Kegiatan;
use Illuminate\Http\Request;

class ProposalKegiatanService {
    public function index()
{
    // Gunakan eager loading untuk memuat relasi hingga ormawa
    $data = Proposal_Kegiatan::with('skLegalitas.pengajuanLegalitas.ormawaPembina.ormawa')->get();
    // dd($data);
    // Kembalikan data ke view
    return view('Kemahasiswaan.proposalKegiatan.index', compact('data'));
}
}