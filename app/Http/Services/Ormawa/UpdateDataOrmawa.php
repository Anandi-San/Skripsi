<?php

namespace App\Http\Services\Ormawa;

use Illuminate\Http\Request;
use App\Models\Ormawa;
use App\Models\PengurusOrmawa;
use App\Models\MonitoringKegiatan;

class UpdateDataOrmawa {

    public function index()
    {
        $data = [
            'content' => 'ormawa/update/index',
        ];
        return view('Ormawa/UpdateOrmawa/updateDetail', $data);
    }

    public function indexKegiatan()
    {
        $data = [
            'content' => 'ormawa/update/indexKegiatan',
        ];
        return view('Ormawa/UpdateOrmawa/updateKegiatan', $data);
    }
}
