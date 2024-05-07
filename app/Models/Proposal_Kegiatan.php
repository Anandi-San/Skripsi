<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposal_Kegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_proposal_kegiatan';

    protected $fillable = [
        'id_SK_legalitas',
        'sampul_depan',
        'judul_kegiatan',
        'pendahuluan_kegiatan',
        'tujuan_kegiatan',
        'nama_kegiatan',
        'bentuk_kegiatan',
        'sasaran',
        'parameter_keberhasilan',
        'waktu_dan_tempat_kegiatan',
        'sususan_acara',
        'rancangan_anggaran_biaya',
        'kepanitiaan',
        'penanggung_jawab',
        'penutup',
        'lampiran1',
        'lampiran2',
        'lampiran3',
        'sampul_belakang',
        'status',
    ];
    
    public function skLegalitas()
    {
        return $this->belongsTo(SKlegalitas::class, 'id_SK_legalitas');
    }
    public function proposalKegiatan()
    {
        return $this->hasOne(Proposal_Kegiatan::class, 'id_SK_legalitas');
    }
}

