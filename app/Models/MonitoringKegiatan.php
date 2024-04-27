<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonitoringKegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_pengajuan_legalitas',
        'id_proposal_kegiatan',
        'saldo',
        'dana_terpakai',
        'status',
        'catatan',
    ];

    public function pengajuanLegalitas()
    {
        return $this->hasMany(PengajuanLegalitas::class, 'id_pengajuan_legalitas');
    }

    public function proposalKegiatan()
    {
        return $this->hasMany(ProposalKegiatan::class, 'id_proposal_kegiatan');
    }
}

