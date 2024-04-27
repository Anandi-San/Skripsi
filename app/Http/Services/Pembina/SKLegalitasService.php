<?php

namespace App\Http\Services\Pembina;

use Illuminate\Http\Request;
use App\Models\SKlegalitas;

class SKLegalitasService {

    public function index()
    {
        $data = [
            'content' => 'Pembina/proposalKegiatan/index',
        ];
        return view('Pembina/SKLegalitas/index', $data);
    }

    public function store()
    {
        $data = [
            'content' => 'ormawa/proposalKegiatan/store',
        ];
        return view('Ormawa/ProposalKegiatan/store', $data);
    }
}
