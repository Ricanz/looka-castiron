<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ProductGallery;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = ProductGallery::where('role', 'produk')->get();
        return view('admin.produk.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Produk::all();
        return view('admin.produk.gallery-create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seq = ProductGallery::where('product_id', $request->product_id)->latest()->pluck('sequence')->first();
        
        $date = date("his");
        $extension = $request->file('gambar')->extension();
        $file_name = "Produk_$date.$extension";
        $txt = "storage/Produk/" . $file_name;
        $path = $request->file('gambar')->storeAs('public/Produk', $file_name);

        $gallery = ProductGallery::create([
            'product_id' => $request->product_id,
            'image' => $txt,
            'sequence' => $seq != null ? $seq+1 : 1,
            'role' => 'produk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($gallery){
            return redirect()->route('gallery.index')
                ->with('success', 'Gallery Berhasil Ditambahkan');
        }

        dd("tidak berhasil, periksa kembali!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = ProductGallery::findOrFail($id);
        Storage::delete("public/Produk/$gallery->gambar");
        $gallery->delete();
        return redirect()->route('gallery.index')
            ->with('delete', 'Produk Berhasil Dihapus');
    }
    
    public function footer_gallery(){
        $gallery = ProductGallery::where('role', 'footer')->get();
        return view('admin.footer.gallery', compact('gallery'));
    }

    public function create_footer_gallery(){
        return view('admin.footer.create-gallery');
    }

    public function store_footer_gallery(Request $request){
        $seq = ProductGallery::where('product_id', $request->product_id)->latest()->pluck('sequence')->first();
        
        $date = date("his");
        $extension = $request->file('gambar')->extension();
        $file_name = "Produk_$date.$extension";
        $txt = "storage/Produk/" . $file_name;
        $path = $request->file('gambar')->storeAs('public/Produk', $file_name);

        $gallery = ProductGallery::create([
            'product_id' => $request->product_id,
            'image' => $txt,
            'sequence' => $seq != null ? $seq+1 : 1,
            'role' => 'footer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($gallery){
            return redirect()->route('footer_gallery')
                ->with('success', 'Gallery Berhasil Ditambahkan');
        }

        dd("tidak berhasil, periksa kembali!");
    }

    public function footer_gallery_destroy(Request $request)
    {
        $id = $request->id;
        $gallery = ProductGallery::findOrFail($id);
        Storage::delete("public/Produk/$gallery->gambar");
        $gallery->delete();
        return redirect()->route('footer_gallery')
            ->with('delete', 'Gallery Berhasil Dihapus');
    }

    public function why_us(){
        $gallery = Gallery::where('role', 'why-us')->where('status', 'active')->get();
        return view('admin.gallery.why-us', compact('gallery'));
    }

    public function store_gallery(Request $request){
        $gallery = Gallery::findOrFail($request->id);
        if ($request->gambar != null) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/aboutUs/" . $file_name;
            $request->gambar->storeAs('public/aboutUs', $file_name);
            $gallery->image = $txt;
        }
        $gallery->deskripsi = $request->judul;
        $gallery->save();
        return redirect()->route('why_us')
            ->with('post', 'Gallery Berhasil Disimpan');
    }
}
