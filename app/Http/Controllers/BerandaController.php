<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Testimonial;
use App\Models\Kontak;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::where('status', 'aktif')->get();
        $produkTerbaru = Produk::where('status', 'aktif')->latest()->paginate(5);
        $products = Produk::where('status', 'aktif')->with('kategori')->paginate(12);
        $banner = Banner::where('status', 'aktif')->get();
        $tentang = AboutUs::where('id', 1)->first();
        return view('guest.beranda.index', compact('testimonial','produkTerbaru', 'products', 'banner', 'tentang'));
    }
    public function kategori_produk($id)
    {
        $Produk = Produk::where('kategori_id',$id)->get();
        // dd($testimonial);
        return view('guest.katalog.index',compact('Produk'));
    }
    public function tentang_view()
    {
        $tentang = AboutUs::where('id', 1)->first();
        return view('guest.tentang.index', compact('tentang'));
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

    public function search(Request $request)
    {
		$cari = $request->cari;

        $produk_cari = Produk::where('nama','like',"%".$cari."%")->paginate();
        $Produk = Produk::where('status', 'aktif')->with('kategori')->get();
        $produk_terbaru = Produk::with('kategori')
                        ->where('status', 'aktif')
                        ->orderBy('created_at', 'desc')
                        ->take(5)->get();
        $produk_terlaris = Produk::with('kategori')
        ->where('status', 'aktif')
        ->orderBy('created_at', 'asc')
        ->take(5)->get();
        return view('guest.katalog.index',compact('Produk', 'produk_terbaru', 'produk_terlaris', 'produk_cari'));
    }

    public function detail_produk($slug){
        $produk = Produk::where('slug', $slug)->where('status', 'aktif')->first();
        return view('guest.katalog.detail', compact('produk'));
    }

    public function detail_artikel($slug){
        $artikel = Artikel::where('slug', $slug)->where('status', 'aktif')->first();
        return view('guest.artikel.detail', compact('artikel'));
    }

    public function contact_store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
         ]);

         Kontak::create([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'message' => $request->message
         ]);

         Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('looka@gmail.com')->subject('Saran/Kritik/Pesan Pelanggan');
        });

        return redirect()->back()->with('success', 'pesan telah terkirim!');
    }
}
