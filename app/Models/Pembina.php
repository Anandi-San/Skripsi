<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembina extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_pembina';

    protected $fillable = [
        'id_pengguna',
        'nama_pembina',
        'photo_pembina',
    ];

    public function user()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
