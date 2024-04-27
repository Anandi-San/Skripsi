<?php

namespace App\Http\Controllers\Ormawa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Ormawa\UpdateDataOrmawa;


class UpdateDataOrmawaController extends Controller
{
    private $updateDataOrmawa;

    public function __construct(UpdateDataOrmawa $updateDataOrmawa)
    {
        $this->updateDataOrmawa = $updateDataOrmawa;
    }

    public function index()
    {
    return $this->updateDataOrmawa->index();
    }

    public function indexKegiatan()
    {
    return $this->updateDataOrmawa->indexKegiatan();
    }
}
