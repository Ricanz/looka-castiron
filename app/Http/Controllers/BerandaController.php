<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::where('status', 'aktif')->get();
        $produkTerbaru = Produk::where('status', 'aktif')->latest()->paginate(5);
        $products = Produk::where('status', 'aktif')->with('kategori')->paginate(12);
        $banner = Banner::where('status', 'aktif')->get();
        return view('guest.beranda.index', compact('testimonial','produkTerbaru', 'products', 'banner'));
    }
    public function kategori_produk($id)
    {
        $Produk = Produk::where('kategori_id',$id)->get();
        // dd($testimonial);
        return view('guest.katalog.index',compact('Produk'));
    }
    public function tentang_view()
    {
        return view('guest.tentang.index');
    }

    public function products_view()
    {
        $Produk = Produk::where('status', 'aktif')->with('kategori')->get();
        $produk_terbaru = Produk::with('kategori')
                        ->where('status', 'aktif')
                        ->orderBy('created_at', 'desc')
                        ->take(5)->get();
        $produk_terlaris = Produk::with('kategori')
        ->where('status', 'aktif')
        ->orderBy('created_at', 'asc')
        ->take(5)->get();
        return view('guest.katalog.index',compact('Produk', 'produk_terbaru', 'produk_terlaris'));
    }

    public function article_view()
    {
        $articles = Artikel::where('status', 'aktif')->paginate(10);
        return view('guest.artikel.index', compact('articles'));
    }

    public function contact_view()
    {
        return view('guest.kontak.index');
    }
}
