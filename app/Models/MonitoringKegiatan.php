<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonitoringKegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_monitoring_kegiatan';

    protected $fillable = [
        'id_pengajuan_legalitas',
        'id_proposal_kegiatan',
        'id_keterangan_pembayaran',
        'jumlah_dana',
        'saldo',
        'parameter_keberhasilan',
        'catatan',
    ];

    public function pengajuanLegalitas()
    {
        return $this->hasMany(PengajuanLegalitas::class, 'id_pengajuan_legalitas');
    }

    public function proposalKegiatan()
    {
        return $this->hasMany(Proposal_Kegiatan::class, 'id_proposal_kegiatan');
    }
    public function keteranganPembayaran()
    {
        return $this->hasMany(KeteranganPembayaran::class, 'id_monitoring_kegiatan');
    }
}

