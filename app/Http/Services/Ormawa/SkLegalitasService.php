<?php

namespace App\Http\Services\Ormawa;

use Illuminate\Http\Request;
use App\Models\SKlegalitas;

class SkLegalitasService {

    public function index()
    {
        $data = [
            'content' => 'ormawa/SkLegalitas/index',
        ];
        return view('Ormawa/SkLegalitas/index', $data);
    }

    public function download()
    {
        $data = [
            'content' => 'ormawa/SkLegalitas/download',
        ];
        return view('Ormawa/SkLegalitas/download', $data);
    }
}
