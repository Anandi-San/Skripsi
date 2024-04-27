<?php

namespace App\Http\Services\Pembina;

use Illuminate\Http\Request;
use App\Models\ProposalLegalitas;

class ProposalKegiatanService {

    public function index()
    {
        $data = [
            'content' => 'Pembina/proposalKegiatan/index',
        ];
        return view('Pembina/ProposalKegiatan/index', $data);
    }

    public function Revisi()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/Revisi',
        ];
        return view('Ormawa/ProposalKegiatan/Revisi', $data);
    }
}
