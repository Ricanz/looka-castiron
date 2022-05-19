<?php
//Guest
use App\Http\Controllers\Guest\ArtikelController as GuestArtikel;
use App\Http\Controllers\Guest\BerandaController as GuestBeranda;
use App\Http\Controllers\Guest\KontakController as GuestKontak;
use App\Http\Controllers\Guest\ProdukController as GuestProduk;
use App\Http\Controllers\Guest\TentangController as GuestTentang;

//Admin
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

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
    return view('guest.beranda.index');
});

//Dashboard Admin Route Test
Route::get('/dashboard', function(){
    return view('admin.index');
});

//Guest
Route::resource('beranda', GuestBeranda::class);
Route::resource('artikel', GuestArtikel::class);
Route::resource('kontak', GuestKontak::class);
Route::resource('produk', GuestProduk::class);
Route::resource('tentang', GuestTentang::class);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('dashboard-artikel', ArtikelController::class);
    Route::resource('dashboard-banner', BannerController::class);
    Route::resource('dashboard-kategori', KategoriController::class);
    Route::resource('dashboard-produk', ProdukController::class);
    Route::resource('dashboard-testimonial', TestimonialController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
