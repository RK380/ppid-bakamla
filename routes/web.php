<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\KontakKamiController;
use App\Http\Controllers\PermohonanInformasiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\VisitorController;
use App\Http\Middleware\isLogin;
use App\Http\Middleware\isTamu;

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

//Login
Route::get('/sesi', [SessionController::class,'index'])->middleware(isTamu::class);
Route::post('/sesi/login', [SessionController::class,'login'])->middleware(isTamu::class);
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/sesi/register', [SessionController::class,'register'])->middleware(isTamu::class);
Route::post('/sesi/create', [SessionController::class,'create'])->middleware(isTamu::class);

// Dashboard Admin
// Route::get('/admin', [AdminController::class,'index'])->middleware('isLogin');
Route::middleware(isLogin::class)->get('/admin', function () {
    return view('be.index');
});

// Route::group(['middleware' => ['auth','role:admin'],'prefix'=>'admin'],function (){
// BE Klasifikasi
Route::middleware(isLogin::class)->group(function () {
    Route::get('/klasifikasi', [KlasifikasiController::class, 'index'])->name('admin.klasifikasi');
    Route::get('/klasifikasi/create', [KlasifikasiController::class, 'create'])->name('admin.klasifikasi.create');
    Route::post('/klasifikasi/store', [KlasifikasiController::class, 'store'])->name('admin.klasifikasi.store');
    Route::get('/klasifikasi/edit/{id}', [KlasifikasiController::class, 'edit'])->name('admin.klasifikasi.edit');
    Route::put('/klasifikasi/update/{id}', [KlasifikasiController::class, 'update'])->name('admin.klasifikasi.update');
    Route::delete('/klasifikasi/destroy/{id}', [KlasifikasiController::class, 'destroy'])->name('admin.klasifikasi.destroy');
    // BE Informasi Publik
    Route::get('/infopub', [InformasiPublikController::class, 'index'])->name('admin.informasipublik');
    Route::get('/infopub/create', [InformasiPublikController::class, 'create'])->name('admin.informasipublik.create');
    Route::post('/infopub/store', [InformasiPublikController::class, 'store'])->name('admin.informasipublik.store');
    Route::delete('/infopub/destroy/{id}', [InformasiPublikController::class,'destroy'])->name('admin.informasipublik.destroy');
    Route::get('/infopub/edit/{id}', [InformasiPublikController::class,'edit'])->name('admin.informasipublik.edit');
    Route::put('/infopub/update/{id}', [InformasiPublikController::class,'update'])->name('admin.informasipublik.update');
    
    // BE Standar Operasional Layanan
    Route::get('/sop', [SopController::class, 'index'])->name('admin.sop');
    Route::get('/sop/create', [SopController::class, 'create'])->name('admin.sop.create');
    Route::post('/sop/store', [SopController::class, 'store'])->name('admin.sop.store');
    Route::delete('/sop/destroy/{id}', [SopController::class,'destroy'])->name('admin.sop.destroy');
    Route::get('/sop/edit/{id}', [SopController::class,'edit'])->name('admin.sop.edit');
    Route::put('/sop/update/{id}', [SopController::class,'update'])->name('admin.sop.update');
    // });

    // BE Pesan Masuk
    Route::get('/pesan', [KontakKamiController::class, 'index'])->name('admin.pesan');
});

Route::get('refresh-captcha', function () {
    return response()->json(['captcha'=> captcha_img('flat')]);
});