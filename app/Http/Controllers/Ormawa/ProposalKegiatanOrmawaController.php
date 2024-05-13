<?php

namespace App\Http\Controllers\Ormawa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Ormawa\ProposalKegiatan;

class ProposalKegiatanOrmawaController extends Controller
{
    private $proposalKegiatan;

    public function __construct(ProposalKegiatan $proposalKegiatan)
    {
        $this->proposalKegiatan = $proposalKegiatan;
    }

    public function unggah()
    {
    $proposal = "Proposal Kegiatan"; // Set the desired value for $proposal
        return $this->proposalKegiatan->unggah($proposal);
    }

    public function menunggu()
    {
    return $this->proposalKegiatan->menunggu();
    }

    public function listRevisi()
    {
    return $this->proposalKegiatan->listRevisi();
    }

    public function Revisi()
    {
    return $this->proposalKegiatan->Revisi();
    }

    public function store(Request $request)
    {
    return $this->proposalKegiatan->store($request);
    }
}
