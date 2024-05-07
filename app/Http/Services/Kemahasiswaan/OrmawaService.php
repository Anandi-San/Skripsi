<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\Ormawa;
use Illuminate\Http\Request;

class OrmawaService {
    public function index()
    {
        $ormawaList = Ormawa::with(['ormawaPembina.pembina'])->get();
        // dd($ormawaList);
        
        return $ormawaList;
}
}

