<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\EkstrakurikulerController;

use App\Http\Controllers\Admin\SarprasController;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Ekstrakurikuler;
use App\Models\Sarpras;

Route::get('/', function () {

    $galeris = Galeri::latest('tanggal')->get();

    $prestasis = Prestasi::orderBy('tahun', 'desc')->get();

    $ekstrakurikulers = Ekstrakurikuler::orderBy('urutan', 'asc')->get();

    return view('index', [
        'galeris' => $galeris,
        'prestasis' => $prestasis,
        'ekstrakurikulers' => $ekstrakurikulers,
    ]);

})->name('home');


Route::get('/berita', [BeritaController::class, 'publicIndex'])
    ->name('berita');

Route::get('/sarpras', function () {

    $sarpras = Sarpras::orderBy('urutan')->get();

    return view('sarpras', [
        'sarpras' => $sarpras,
    ]);

})->name('sarpras');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/ikm', function () {
    return view('ikm');
})->name('ikm');

Route::get('/sp4n-lapor', function () {
    return view('sp4n-lapor');
})->name('sp4n-lapor');

Route::get('/maklumat-pelayanan', function () {
    return view('maklumat-pelayanan');
})->name('maklumat-pelayanan');

Route::get('/standar-pelayanan', function () {
    return view('standar-pelayanan');
})->name('standar-pelayanan');

Route::get('/spmb', function () {
    return view('spmb');
})->name('spmb');

Route::get('/legalisasi', function () {
    return view('legalisasi');
})->name('legalisasi');

Route::get('/mutasi', function () {
    return view('mutasi');
})->name('mutasi');

Route::get('/misi', function () {
    return view('misi');
})->name('misi');

Route::get('/sambutan-kepsek', function () {
    return view('sambutan-kepsek');
})->name('sambutan-kepsek');

Route::get('/aduan', function () {
    return view('aduan');
})->name('aduan');

route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

route::get('/sippn', function () {
    return view('sippn');
})->name('sippn');


Route::prefix('admin')->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('admin.login.process');


    // Halaman yang membutuhkan login
    Route::middleware('admin')->group(function () {

        // Dashboard
       Route::get('/dashboard', function () {

    $totalBerita = Berita::count();
    $totalGaleri = Galeri::count();
    $totalPrestasi = Prestasi::count();
    $totalEkstrakurikuler = Ekstrakurikuler::count();
    $totalSarpras = Sarpras::count();

    return view('admin.dashboard', [
        'totalBerita' => $totalBerita,
        'totalGaleri' => $totalGaleri,
        'totalPrestasi' => $totalPrestasi,
        'totalEkstrakurikuler' => $totalEkstrakurikuler,
        'totalSarpras' => $totalSarpras,
    ]);

})->name('admin.dashboard');

        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('admin.logout');

        // CRUD Berita
        Route::resource('/berita', BeritaController::class);

        Route::resource('/galeri', GaleriController::class);

        Route::resource('/prestasi', PrestasiController::class);

        Route::resource('/ekstrakurikuler',
        EkstrakurikulerController::class);

        Route::resource('/sarpras', SarprasController::class);

    });

});
  