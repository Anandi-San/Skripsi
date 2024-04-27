<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Ormawa\OrmawaController;
use App\Http\Controllers\Pembina\BerandaPembinaController;
use App\Http\Controllers\Pembina\ProposalKegiatanController;
use App\Http\Controllers\Pembina\SKlegalitasPembinaController;
use App\Http\Controllers\Pembina\LpjKegiatanPembinaController;
use App\Http\Controllers\Pembina\ViewOrmawaController;
use App\Http\Controllers\SuperAdmin\BerandaSuperAdminController;
use App\Http\Controllers\Ormawa\PengajuanLegalitasController;
use App\Http\Controllers\Ormawa\ProposalKegiatanOrmawaController;
use App\Http\Controllers\Ormawa\UpdateDataOrmawaController;
use App\Http\Controllers\Ormawa\LPJKegiatanController;
use App\Http\Controllers\Ormawa\SkLegalitasController;
use App\Http\Controllers\Kemahasiswaan\BerandaKemahasiswaanController;
use App\Http\Controllers\Kemahasiswaan\laporanakhirController;
use App\Http\Controllers\Kemahasiswaan\lpjkegiatankemasiswaanController;
use App\Http\Controllers\Kemahasiswaan\ormawakemahasiswaanController;
use App\Http\Controllers\Kemahasiswaan\pembinakemahasiswaanController;
use App\Http\Controllers\Kemahasiswaan\pengajuanlegalitaskemahasiswaanController;
use App\Http\Controllers\Kemahasiswaan\proposalkegiatankemahasiswaanController;
use App\Http\Controllers\Kemahasiswaan\skLegalitaskemahasiswaanController;




use App\Http\Middleware\RedirectByRole;
use App\Http\Middleware\Authenticate;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('/');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('/ormawa')->middleware('auth')->group(function () {
    
    Route::get('/beranda', [OrmawaController::class, 'index'])->name('ormawa');
    // Pengajuan Legalitas
    Route::get('/legalitas', [PengajuanLegalitasController::class, 'index'])->name('legalitas');
    Route::post('/legalitas/upload', [PengajuanLegalitasController::class, 'store'])->name('legalitas.upload');
    // Route::post('/legalitas/upload', [PengajuanLegalitasController::class, 'store'])->name('legalitas.upload');
    route::get('/legalitas/menunggu', [PengajuanLegalitasController::class, 'waitRevision'])->name('waitingrevision');
    route::get('/legalitas/daftarRevisi', [PengajuanLegalitasController::class, 'listRevisi'])->name('listRevisi');
    route::get('/legalitas/revision', [PengajuanLegalitasController::class, 'revision'])->name('revision');
    // Proposal Kegiatan
    Route::get('/proposalKegiatan', [ProposalKegiatanOrmawaController::class, 'unggah'])->name('proposalKegiatan'); 
    Route::post('/proposalKegiatan/upload', [ProposalKegiatanOrmawaController::class, 'store'])->name('proposalkegiatan.upload');
    Route::get('/proposalKegiatan/menunggu', [ProposalKegiatanOrmawaController::class, 'menunggu'])->name('menungguProposalKegiatan'); 
    Route::get('/proposalKegiatan/daftarRevisi', [ProposalKegiatanOrmawaController::class, 'listRevisi'])->name('ListRevisiproposalKegiatan'); 
    Route::get('/proposalKegiatan/Revisi', [ProposalKegiatanOrmawaController::class, 'Revisi'])->name('RevisiproposalKegiatan'); 

    //LPJ Kegiatan
    Route::get('/LPJKegiatan', [LPJKegiatanController::class, 'unggah'])->name('LPJKegiatan');
    // Route::get('/LPJKegiatan/upload', [LPJKegiatanController::class, 'store'])->name('LPJkegiatan.upload');
    Route::post('/LPJKegiatan/upload', [LPJKegiatanController::class, 'store'])->name('lpjkegiatan.upload');
    Route::get('/LPJKegiatan/menunggu', [LPJKegiatanController::class, 'menunggu'])->name('menungguLPJKegiatan'); 
    Route::get('/LPJKegiatan/daftarRevisi', [LPJKegiatanController::class, 'listRevisi'])->name('ListRevisiLPJKegiatan'); 
    Route::get('/LPJKegiatan/Revisi', [LPJKegiatanController::class, 'revisi'])->name('RevisiLPJKegiatan'); 
    
    //Sk Legalitas
    Route::get('/SKlegalitas', [SkLegalitasController::class, 'index'])->name('Sklegalitas');
    //view untuk editedit
    Route::get('/SKlegalitas/view', [SkLegalitasController::class, 'download'])->name('Sklegalitasview'); 

    
    //UpdateDataOrmawa
    Route::get('/update', [UpdateDataOrmawaController::class, 'index'])->name('ormawa.update');
    Route::get('/update/kegiatan', [UpdateDataOrmawaController::class, 'indexKegiatan'])->name('updatedataKegiatan');
});

Route::prefix('/pembina')->middleware('auth')->group(function () {
    Route::get('/beranda', [BerandaPembinaController::class, 'index'])->name('pembina');
    Route::resource('/proposalKegiatanPembina', ProposalKegiatanController::class);
    Route::resource('/LPJKegiatanPembina', LpjKegiatanPembinaController::class);
    Route::resource('/Ormawa', ViewOrmawaController::class);
    Route::resource('/SKlegalitas', SKlegalitasPembinaController::class);
});

Route::prefix('/kemahasiswaan')->middleware('auth')->group(function () {
    Route::get('/beranda', [BerandaKemahasiswaanController::class, 'index'])->name('kemahasiswaan');
    Route::resource('/pengajuanlegalitas',pengajuanlegalitaskemahasiswaanController::class);
    Route::resource('/proposalKegiatan',proposalkegiatankemahasiswaanController::class);
    Route::resource('/LPJKegiatan', lpjkegiatankemasiswaanController::class);
    Route::resource('/editOrmawa', ormawakemahasiswaanController::class);
    Route::resource('/Pembina', pembinakemahasiswaanController::class);
    Route::resource('/editSKlegalitas', sklegalitaskemahasiswaanController::class); 
    Route::resource('/laporanakhir', laporanAKhirController::class);
});


Route::middleware(['auth'])->group(function (){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/superadmin', [BerandaSuperAdminController::class, 'index'])->name('superadmin');
});