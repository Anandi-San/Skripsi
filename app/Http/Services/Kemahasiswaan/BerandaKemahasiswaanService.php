<?php

namespace App\Http\Services\Kemahasiswaan;

use App\Models\Kemahasiswaan;

Class BerandaKemahasiswaanService {
    public function getKemahasiswaanByUserId($userId)
    {
        return Kemahasiswaan::where('id_pengguna', $userId)->first();
    }
}
    