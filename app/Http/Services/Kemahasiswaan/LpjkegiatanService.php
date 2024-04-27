<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class LpjkegiatanService {


public function index()
    {
        $data = [
            'content' => 'Kemasiswaan/LPJKegiatan/index',
        ];
        return view('Kemasiswaan/lpjKegiatan/index', $data);
    }
}