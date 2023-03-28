<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Testimonial;
use App\Models\Kontak;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::where('status', 'aktif')->take(3)->get();
        $produkTerbaru = Produk::where('status', 'aktif')->latest()->take(2)->get();
        $products = Produk::where('status', 'aktif')->with('kategori')->paginate(12);
        $randomProducts = Produk::where('status', 'aktif')->with('kategori')->inRandomOrder()->paginate(12);
        $banner = Banner::where('status', 'aktif')->get();
        $tentang = AboutUs::where('id', 1)->first();
        $footer_gallery = ProductGallery::where('role', 'footer')->get();
        return view('guest.beranda.index', compact('testimonial','produkTerbaru', 'products', 'banner', 'tentang', 'randomProducts', 'footer_gallery'));
    }

    public function v2()
    {
        $testimonial = Testimonial::where('status', 'aktif')->take(3)->get();
        $produkTerbaru = Produk::where('status', 'aktif')->latest()->take(2)->get();
        $products = Produk::where('status', 'aktif')->with('kategori')->paginate(12);
        $randomProducts = Produk::where('status', 'aktif')->with('kategori')->inRandomOrder()->paginate(12);
        $banner = Banner::where('status', 'aktif')->get();
        $tentang = AboutUs::where('id', 1)->first();
        $footer_gallery = ProductGallery::where('role', 'footer')->get();
        return view('guest.beranda.revamp', compact('testimonial','produkTerbaru', 'products', 'banner', 'tentang', 'randomProducts', 'footer_gallery'));
    }

    public function kategori_produk($id)
    {
        $Produk = Produk::where('kategori_id', $id)->where('status', 'aktif')->with('kategori')->get();
        $produk_terbaru = Produk::with('kategori')
                        ->where('status', 'aktif')
                        ->orderBy('created_at', 'desc')
                        ->take(4)->get();
        $produk_terlaris = Produk::with('kategori')
        ->where('status', 'aktif')
        ->orderBy('created_at', 'asc')
        ->take(4)->get();
        $kategori = Kategori::where('id', $id)->first();
        return view('guest.katalog.kategori',compact('Produk', 'produk_terbaru', 'produk_terlaris', 'kategori'));
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
                        ->take(4)->get();
        $produk_terlaris = Produk::with('kategori')
        ->where('status', 'aktif')
        ->orderBy('created_at', 'asc')
        ->take(4)->get();
        return view('guest.katalog.index',compact('Produk', 'produk_terbaru', 'produk_terlaris'));
    }

    public function article_view()
    {
        $artikel = Artikel::where('status','=', 'aktif')->orderByDesc('id')->take(10)->get();
        $footer_gallery = ProductGallery::where('role', 'footer')->get();
        return view('guest.artikel.index', compact('artikel', 'footer_gallery'));
    }

    public function contact_view()
    {
        $about = AboutUs::where('id', 1)->first();
        $footer_gallery = ProductGallery::where('role', 'footer')->get();
        return view('guest.kontak.index', compact('about', 'footer_gallery'));
    }

    public function search(Request $request)
    {
		$cari = $request->cari;

        $produk_cari = Produk::where('nama','like',"%".$cari."%")->paginate();
        $Produk = Produk::where('status', 'aktif')->with('kategori')->get();
        $produk_terbaru = Produk::with('kategori')
                        ->where('status', 'aktif')
                        ->orderBy('created_at', 'desc')
                        ->take(4)->get();
        $produk_terlaris = Produk::with('kategori')
        ->where('status', 'aktif')
        ->orderBy('created_at', 'asc')
        ->take(4)->get();
        return view('guest.katalog.index',compact('Produk', 'produk_terbaru', 'produk_terlaris', 'produk_cari'));
    }

    public function detail_produk($slug){
        $products = Produk::where('status', 'aktif')->with('kategori')->latest()->limit(8)->get();
        $produk = Produk::where('slug', $slug)->where('status', 'aktif')->first();
        $category = Kategori::all();
        $gallery = ProductGallery::where('product_id', $produk->id)->where('role', 'produk')->get();
        return view('guest.katalog.detail', compact('produk', 'products', 'category', 'gallery'));
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
