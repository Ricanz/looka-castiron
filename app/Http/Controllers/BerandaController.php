<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        $produkTerbaru = Produk::latest()->paginate(5);
        // dd($testimonial);
        return view('guest.beranda.index', compact('testimonial','produkTerbaru'));
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
        $Produk = Produk::all();
        return view('guest.katalog.index',compact('Produk'));
    }

    public function article_view()
    {
        return view('guest.artikel.index');
    }

    public function contact_view()
    {
        return view('guest.kontak.index');
    }
}
