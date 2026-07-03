<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\KontakKamiController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PermohonanInformasiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\VisitorController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Beranda
Route::get('/', [HalamanController::class,'index'])->name('halaman.index');

//Profil
Route::get('/profil', [HalamanController::class,'profil'])->name('halaman.profil');
Route::get('/sejarah', [HalamanController::class,'sejarah'])->name('halaman.sejarah');
Route::get('/tugas', [HalamanController::class,'tugas'])->name('halaman.tugas');
Route::get('/visimisi', [HalamanController::class,'visimisi'])->name('halaman.visimisi');
Route::get('/strukturorg', [HalamanController::class,'strukturorg'])->name('halaman.strukturorg');

//Informasi Publik
Route::get('/infopsb', [HalamanController::class,'infopsb']);
Route::get('/daftar-informasi-publik/{id?}', [InformasiPublikController::class, 'home'])->name('infopub');
// Route::get('/daftar-informasi-publik/{id}', [InformasiPublikController::class, 'home'])->name('infopub');
Route::get('/daftar-informasi-publik/download/{id}', [InformasiPublikController::class, 'unduh'])->name('download.infopub');

//Daftar Informasi 
Route::get('/daftarinfo', [HalamanController::class, 'daftarinfo'])->name('halaman.daftarinfo');
Route::get('/infopsm', [HalamanController::class, 'infopsm'])->name('halaman.infopsm');
Route::get('/infopss', [HalamanController::class, 'infopss'])->name('halaman.infopss');
Route::get('/infodkc', [HalamanController::class, 'infodkc'])->name('halaman.infodkc');

//Permohonan Informasi
Route::get('/pemohon', [PermohonanInformasiController::class, 'index'])->name('pemohon.register');

Route::get('/pemohon/lembaga', [PermohonanInformasiController::class, 'indexlembaga'])->name('lembaga.register');
Route::post('/pemohon/lembaga', [PermohonanInformasiController::class, 'storelembaga'])->name('lembaga.register.store');

Route::get('/pemohon/perorangan', [PermohonanInformasiController::class, 'indexperorangan'])->name('perorangan.register');
Route::post('/pemohon/perorangan', [PermohonanInformasiController::class, 'storeperorangan'])->name('perorangan.register.store');

//Standar Pelayanan
Route::get('/standpel', [SopController::class, 'home'])->name('index');
Route::get('/standpel/download/{id}', [SopController::class, 'unduh'])->name('download.index');
Route::get('/kep90', [HalamanController::class, 'kep90']);

//Statistik
Route::get('/statistik-pengunjung', [VisitorController::class, 'index'])->name('visitors.index');
Route::get('/statistik', [HalamanController::class, 'statistik'])->name('halaman.statistik');

//FAQ
Route::get('/faq', [HalamanController::class, 'faq']);

//Unit Kerja
Route::get('/unitkerja', [HalamanController::class, 'unitkerja']);


//Kirim Pesan
Route::post('/kirim-pesan', [KontakKamiController::class, 'store'])->name('pesan.store');

// Halaman Login
Route::get('/sesi', [SessionController::class, 'index'])->name('login');
// Proses Login
Route::post('/sesi/login', [SessionController::class, 'login']);
// Logout
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');

// Dashboard Admin
// Route::prefix('admin')->name('admin.')
//     ->middleware('admin') // 🔥 proteksi
//     ->group(function () {

//     Route::get('/', function () {
//         return view('be.index');
//     })->name('dashboard');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {

        Route::get('/', [AdminController::class, 'index'])
            ->name('dashboard');

    // Klasifikasi
    Route::controller(KlasifikasiController::class)->group(function () {
        Route::get('/klasifikasi', 'index')->name('klasifikasi');
        Route::get('/klasifikasi/create', 'create')->name('klasifikasi.create');
        Route::post('/klasifikasi/store', 'store')->name('klasifikasi.store');
        Route::get('/klasifikasi/edit/{id}', 'edit')->name('klasifikasi.edit');
        Route::put('/klasifikasi/update/{id}', 'update')->name('klasifikasi.update');
        Route::delete('/klasifikasi/destroy/{id}', 'destroy')->name('klasifikasi.destroy');
    });

    // SOP
    Route::controller(SopController::class)->group(function () {
        Route::get('/sop', 'index')->name('sop');
        Route::get('/sop/create', 'create')->name('sop.create');
        Route::post('/sop/store', 'store')->name('sop.store');
        Route::get('/sop/edit/{id}', 'edit')->name('sop.edit');
        Route::put('/sop/update/{id}', 'update')->name('sop.update');
        Route::delete('/sop/destroy/{id}', 'destroy')->name('sop.destroy');
    });

    // Informasi Publik
    Route::controller(InformasiPublikController::class)->group(function () {
        Route::get('/informasipublik', 'index')->name('informasipublik');
        Route::get('/informasipublik/create', 'create')->name('informasipublik.create');
        Route::post('/informasipublik/store', 'store')->name('informasipublik.store');
        Route::get('/informasipublik/edit/{id}', 'edit')->name('informasipublik.edit');
        Route::get('/informasipublik/show/{id}', 'show')->name('informasipublik.show');
        Route::put('/informasipublik/update/{id}', 'update')->name('informasipublik.update');
        Route::delete('/informasipublik/destroy/{id}', 'destroy')->name('informasipublik.destroy');
    });

    // Pesan
    Route::controller(KontakKamiController::class)->group(function () {
        Route::get('/pesan', 'index')->name('pesan');
        Route::get('/pesan/show/{id}', 'show')->name('pesan.show');
        Route::delete('/pesan/destroy/{id}', 'destroy')->name('pesan.destroy');
        Route::get('/pesan/unread', 'unread')->name('pesan.unread');
    });

    // Lokasi
    // Route::resource('lokasi', LokasiController::class);
    Route::controller(LokasiController::class)->group(function () {
        Route::get('/lokasi', 'index')->name('lokasi');
        Route::get('/lokasi/create', 'create')->name('lokasi.create');
        Route::post('/lokasi/store', 'store')->name('lokasi.store');
        Route::get('/lokasi/edit/{id}', 'edit')->name('lokasi.edit');
        Route::get('/lokasi/show/{id}', 'show')->name('lokasi.show');
        Route::put('/lokasi/update/{id}', 'update')->name('lokasi.update');
        Route::delete('/lokasi/destroy/{id}', 'destroy')->name('lokasi.destroy');
    });
});

Route::get('refresh-captcha', function () {
    return response()->json(['captcha'=> captcha_img('flat')]);
});