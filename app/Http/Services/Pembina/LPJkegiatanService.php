<?php

namespace App\Http\Services\Pembina;

use Illuminate\Http\Request;

class LPJkegiatanService {

    public function index()
    {
        $data = [
            'content' => 'Pembina/LPJKegiatan/index',
        ];
        return view('Pembina/LpjKegiatan/index', $data);
    }

    public function Revisi()
    {
        $data = [
            'content' => 'ormawa/LPJKegiatan/Revisi',
        ];
        return view('Ormawa/LpjKegiatan/Revisi', $data);
    }
}
