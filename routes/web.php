<?php
use App\Models\berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\BeritaDashboardController;
use App\Http\Controllers\JurusanDashboardController;
use App\Http\Controllers\KategoriDashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenDashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KontakDashboardController;
use App\Http\Controllers\PrestasiDashboardController;
use App\Http\Controllers\Request;
use App\Http\Controllers\BeritaHomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriDashboardController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/tampilan', function () {
    return view('tampilan.main');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// Route::get('/home', function () {
//     return view('home',['berita'=>berita::all()]);
// });
// Route::get('/beranda', function () {
//     return view('beranda');
// });

Route::GET('/login',[LoginController::class,'login'])-> name('login')-> middleware('guest');
Route::GET('/logout',[LoginController::class,'logout']);
Route::POST('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('berita', BeritaController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('beritahome', BeritaHomeController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa-dashboard', MahasiswaDashboardController::class)->parameter('mahasiswa-dashboard','mahasiswa')-> middleware('auth');
Route::resource('berita-dashboard', BeritaDashboardController::class)->parameter('berita-dashboard','berita')->middleware('auth');
Route::resource('jurusan-dashboard', JurusanDashboardController::class)->parameter('jurusan-dashboard','jurusan')-> middleware('auth');
Route::resource('kategori-dashboard', KategoriDashboardController::class)->parameter('kategori-dashboard','kategori')-> middleware('auth');
Route::resource('dosen-dashboard', DosenDashboardController::class)->parameter('dosen-dashboard','dosen')-> middleware('auth');
Route::resource('kontak', KontakController::class);
Route::resource('kontak-dashboard', KontakDashboardController::class)->parameter('kontak-dashboard','kontak')-> middleware('auth');
Route::resource('prestasi-dashboard', PrestasiDashboardController::class)->parameter('prestasi-dashboard','prestasi')-> middleware('auth');
Route::resource('galeri-dashboard', GaleriDashboardController::class)->parameter('galeri-dashboard','galeri')-> middleware('auth');
Route::resource('home', HomeController::class);
