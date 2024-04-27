<?php

namespace App\Http\Services;

use App\Models\Ormawa;

Class OrmawaService {
    public function getOrmawaByUserId($userId)
    {
        return Ormawa::where('id_pengguna', $userId)->first();
    }
}
    