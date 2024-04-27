<?php

namespace App\Http\Services\Pembina;

use Illuminate\Http\Request;
use App\Models\Ormawa;
use App\Models\OrmawaPembina;

class ViewOrmawaService {

    public function index()
    {
        $data = [
            'content' => 'Pembina/viewOrmawa/index',
        ];
        return view('Pembina/ViewOrmawa/index', $data);
    }

    public function store()
    {
        $data = [
            'content' => 'ormawa/ViewOrmawa/store',
        ];
        return view('Ormawa/ViewOrmawa/store', $data);
    }
}
