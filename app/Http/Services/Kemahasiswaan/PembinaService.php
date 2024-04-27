<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class PembinaService {
    public function index()
    {
        $data = [
            'content' => 'Kemahasiswaan/Pembina/index',
        ];
        return view('Kemahasiswaan/pembina/index', $data);
    }
}