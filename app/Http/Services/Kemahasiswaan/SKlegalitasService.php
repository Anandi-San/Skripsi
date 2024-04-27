<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class SKlegalitasService {
public function index()
    {
        $data = [
            'content' => 'Kemasiswaan/SKlegalitas/index',
        ];
        return view('Kemahasiswaan/skLegalitas/index', $data);
    }
}