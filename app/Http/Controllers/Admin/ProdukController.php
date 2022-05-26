<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produk::all();
        return view('admin.produk.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kategori = Kategori::all();
        return view('admin.produk.create', compact('Kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required',
        ]);

        // dd($request->all());

        $date = date("his");
        $extension = $request->file('gambar')->extension();
        $file_name = "Produk_$date.$extension";
        $txt = "storage/Produk/" . $file_name;
        $path = $request->file('gambar')->storeAs('public/Produk', $file_name);

        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $txt,
            'harga' => $request->harga,
            'slug' => str_replace(' ', '-', strtolower($request->nama)),
            'shopee_link' => $request->shopee_link,
            'tokopedia_link' => $request->tokopedia_link,
            'lazada_link' => $request->lazada_link,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect()->route('produk.index')
            ->with('success', 'Produk Berhasil Ditambahkan');
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
        $Kategori = Kategori::all();
        $Produk = Produk::find($id);
        // dd($Produk);
        return view('admin.produk.edit', compact('Kategori', 'Produk'));
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
        $Produk = Produk::find($id);
        if ($Produk) {
            if ($request->gambar != null) {

                $date = date("his");
                $extension = $request->file('gambar')->extension();
                $file_name = "Produk_$date.$extension";
                $request->gambar->storeAs('public/Produk', $file_name);
                $txt = "storage/Produk/" . $file_name;
                $Produk->gambar = $txt;
            } 

            $Produk->nama = $request->nama;
            $Produk->deskripsi = $request->deskripsi;
            $Produk->harga = $request->harga;
            $Produk->slug = str_replace(' ', '-', strtolower($request->nama));
            $Produk->shopee_link = $request->shopee_link;
            $Produk->lazada_link = $request->lazada_link;
            $Produk->kategori_id = $request->kategori_id;
            $Produk->save();
        }

        return redirect()->route('produk.index')
            ->with('edit', 'Produk Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Produk = Produk::findOrFail($id);
        Storage::delete("public/Produk/$Produk->gambar");
        $Produk->delete();
        return redirect()->route('produk.index')
            ->with('delete', 'Produk Berhasil Dihapus');
    }
}
