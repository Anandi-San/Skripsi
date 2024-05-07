<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaService {
    public function index()
{
    // Menggunakan eager loading untuk memuat ormawaPembina dan data terkait ormawa
    $pembinaList = Pembina::with('ormawaPembina.ormawa')->get();
    
    // Mengirimkan data ke view
    return $pembinaList;
}

}