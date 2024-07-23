<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    DashboardController,
    PegawaiController,
    DokterController,
    JadwalKonsultasiController,
    ObatController,
    PasienController,
    PemeriksaanController,
    RekamMedisController,
};
use App\Models\Barang;

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::group([
    'middleware' => ['auth', 'role:admin,karyawan']
], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //rute dokter
    Route::resource('/dokter', DokterController::class)->except(['show']);
    Route::delete('/dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.delete');
    Route::get('/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    //rute dokter
    Route::resource('/pasien', PasienController::class)->except(['show']);
    Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.delete');
    Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
    //rute jadwal konsultasi
    Route::resource('/jadwal_konsultasi', JadwalKonsultasiController::class)->except(['show']);
    Route::delete('/jadwal_konsultasi/{id}', [JadwalKonsultasiController::class, 'destroy'])->name('jadwal_konsultasi.delete');
    Route::get('/jadwal_konsultasi/{jadwal_konsultasi}/edit', [JadwalKonsultasiController::class, 'edit'])->name('jadwal_konsultasi.edit');
    //rute rekam medis
    Route::resource('/rekam_medis', RekamMedisController::class)->except(['show']);
    Route::delete('/rekam_medis/{id}', [RekamMedisController::class, 'destroy'])->name('rekam_medis.delete');
    
    //rute pemeriksaan
    //Route::resource('/peneriksaan', PemeriksaanController::class)->except(['show']);
    //Route::delete('/pemeriksaan/{id}', [PemeriksaanController::class, 'destroy'])->name('pemeriksaan.delete');
    //Route::get('/pemeriksaan/{pemeriksaan}/edit', [PemeriksaanController::class, 'edit'])->name('pemeriksaan.edit');

    //rute obat
    Route::resource('/obat', ObatController::class)->except(['show']);
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.delete');
    Route::get('/obat/{obat}/edit', [ObatController::class, 'edit'])->name('obat.edit');

    Route::group([
        'middleware' => 'role:admin'
    ], function () {

    }); 
});
