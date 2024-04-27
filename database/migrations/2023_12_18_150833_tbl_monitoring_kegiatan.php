<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_monitoring_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajuan_legalitas');
            $table->foreignId('id_proposal_kegiatan');
            $table->float('saldo');
            $table->string('dana_terpakai');
            $table->enum('status', ['tidak_berhasil', 'berhasil']);
            $table->text('catatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_monitoring_kegiatan');
    }
};
