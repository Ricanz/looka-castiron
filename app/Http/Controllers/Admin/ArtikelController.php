<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.create');
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        if ($request->gambar) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/artikel/". $file_name;
            $request->gambar->storeAs('public/artikel', $file_name);
        }

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'gambar' => $txt,
            'deskripsi' => $request->deskripsi,
            'status' => 'aktif'
        ]);
        if($artikel){
            return redirect()->route('artikel.index')
                ->with('success', 'Artikel Berhasil Ditambahkan');
        }
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
        $artikel = Artikel::find($id);
        return view('admin.artikel.edit', compact('artikel'));
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
        $artikel = Artikel::findOrFail($id);

        if ($request->gambar) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/artikel/". $file_name;
            $request->gambar->storeAs('public/artikel', $file_name);
            $artikel->gambar = $txt;
        }

        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->status = $request->status;
        $artikel->save();
        return redirect()->route('artikel.index')
                ->with('success', 'Artikel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        // dd($artikel);
        Storage::delete("public/artikel/$artikel->gambar");
        $artikel->delete;
        return redirect()->route('artikel.index')
            ->with('delete', 'Artikel Berhasil Dihapus');
    }
}
