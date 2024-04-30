<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class LpjkegiatanService {


public function index()
    {
        $data = [
            'content' => 'Kemahasiswaan/LPJKegiatan/index',
        ];
        return view('Kemahasiswaan/lpjKegiatan/index', $data);
    }
}