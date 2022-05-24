<?php
//Admin
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BerandaController;
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
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    });
    Route::resource('produk', ProdukController::class);
});

//Guest
Route::get('about-us', [BerandaController::class, 'tentang_view'])->name('tentang_view');
Route::get('products', [BerandaController::class, 'products_view'])->name('products_view');
Route::get('article', [BerandaController::class, 'article_view'])->name('article_view');
Route::get('contact', [BerandaController::class, 'contact_view'])->name('contact_view');


// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('admin/artikel', ArtikelController::class);
//     Route::resource('admin/banner', BannerController::class);
//     Route::resource('admin/kategori', KategoriController::class);
//     Route::resource('admin/produk', ProdukController::class);
//     Route::resource('admin/testimonial', TestimonialController::class);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
