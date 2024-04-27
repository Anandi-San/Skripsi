<?php

namespace App\Http\Services\Kemahasiswaan;

use Illuminate\Http\Request;

class OrmawaService {
    public function index()
    {
        $data = [
            'content' => 'Kemahasiswaan/Ormawa/index',
        ];
        return view('Kemahasiswaan/ormawa/index', $data);
    }
}

