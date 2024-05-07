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
        $ormawa = $this->updateDataOrmawa->index();
        // dd($ormawa);

        return view('Ormawa/UpdateOrmawa/updateDetail', compact('ormawa'));
    }

    public function updateOrmawa(Request $request)
    {
        $updateService = new UpdateDataOrmawa();
        $updateService->updateOrmawa($request);

        return redirect()->route('ormawa.update');
    }

    public function indexKepengurusan()
    {
        $pengurusOrmawa = $this->updateDataOrmawa->indexKepengurusan();
        // dd($ormawa);

        return view('Ormawa/UpdateOrmawa/updateKepengurusan', compact('pengurusOrmawa'));
    }

        public function updateKepengurusan(Request $request)
    {
        // Meneruskan objek Request ke metode updateKepengurusan
        return $this->updateDataOrmawa->updateKepengurusan($request);
    }

    public function indexKegiatan()
    {
    return $this->updateDataOrmawa->indexKegiatan();
    }
    // public function updateKegiatan()
    // {
    // return $this->updateDataOrmawa->updateKegiatan();
    // }
}
