<?php
//Admin

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontakController;
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



//Dashboard Admin Route Test
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    });
    Route::resource('kategori', KategoriController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('aboutUs', AboutUsController::class);
    Route::resource('gallery', GalleryController::class);
    Route::get('/footer-gallery', [GalleryController::class, 'footer_gallery'])->name('footer_gallery');
    Route::get('/footer-gallery/create', [GalleryController::class, 'create_footer_gallery'])->name('create_footer_gallery');
    Route::post('/footer-gallery/submit', [GalleryController::class, 'store_footer_gallery'])->name('store_footer_gallery');
    Route::post('/footer-gallery/destroy', [GalleryController::class, 'footer_gallery_destroy'])->name('footer_gallery_destroy');
});


//Guest
Route::get('/', [BerandaController::class, 'index']);
Route::get('about-us', [BerandaController::class, 'tentang_view'])->name('tentang_view');
Route::get('products', [BerandaController::class, 'products_view'])->name('products_view');
Route::get('article', [BerandaController::class, 'article_view'])->name('article_view');
Route::get('contact', [BerandaController::class, 'contact_view'])->name('contact_view');
Route::post('contact_store', [BerandaController::class, 'contact_store'])->name('contact_store');
Route::get('products/{id}', [BerandaController::class, 'kategori_produk'])->name('kategori_produk');
Route::get('search', [BerandaController::class, 'search'])->name('search');
Route::get('produk/detail/{slug}', [BerandaController::class, 'detail_produk'])->name('detail_produk');
Route::get('artikel/detail/{slug}', [BerandaController::class, 'detail_artikel'])->name('detail_artikel');
Route::resource('kontak', KontakController::class);
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
