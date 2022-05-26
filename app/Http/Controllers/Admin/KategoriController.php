<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $Kategori = Kategori::all();
        return view('admin.kategori.index', compact('Kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
        ]);

        $Kategori = Kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($Kategori) {
            return redirect()->route('Kategori.index')
                ->with('success', 'Kategori Berhasil Ditambahkan');
        } else {
            return redirect()->back();
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
        $Kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('Kategori'));
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
        $Kategori = Kategori::find($id);
        $Kategori->nama = $request->nama;
        $Kategori->deskripsi = $request->deskripsi;
        $Kategori->save();

        return redirect()->route('Kategori.index')
            ->with('edit', 'Kategori Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Kategori = Kategori::findOrFail($id);
        $Kategori->delete();
        return redirect()->route('kategori.index')
            ->with('delete', 'Kategori Berhasil Dihapus');
    }
}
