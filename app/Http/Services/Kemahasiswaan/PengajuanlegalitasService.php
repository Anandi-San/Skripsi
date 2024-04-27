<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class PengajuanlegalitasService {
    public function index()
    {
        $data = [
            'content' => 'Kemahasiswaan/Pengajuanlegalitas/index',
        ];
        return view('Kemahasiswaan/pengajuanLegalitas/index', $data);
    }
}