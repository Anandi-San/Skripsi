<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class ProposalKegiatanService {
    public function index()
    {
        $data = [
            'content' => 'Kemahasiswaan/proposalKegiatan/index',
        ];
        return view('Kemahasiswaan/proposalKegiatan/index', $data);
    }
}