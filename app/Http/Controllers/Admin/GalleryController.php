<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $gallery = ProductGallery::all();
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
        //
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
}
