<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ormawa;

class OrmawaSeeder extends Seeder
{
    public function run(): void
    {
        Ormawa::create([
            'id_pengguna' => 3,
            'nama_ormawa' => 'Panti',
            'jenis_ormawa' => 'Eksekutif',
            'singkatan' => 'Panti',
            'logo_ormawa' => 'panti origin',
            'jurusan' => 'ilmu gaib',
        ]);
    }
}
