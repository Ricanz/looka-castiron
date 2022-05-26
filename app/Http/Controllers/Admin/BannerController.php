<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'banner' => 'required',
        ]);

        if (isset($request->banner)) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/" . $file_name;
            $request->banner->storeAs('public/banner', $file_name);
        } else {
            $file_name = null;
        }
        $banner = Banner::create([
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $txt,
            'status' => 'aktif',
            'tombol_text' => $request->tombol,
            'tombol_link' => $request->link,
        ]);

        if ($banner) {
            return redirect()->route('banner.index')
                ->with('success', 'Banner Berhasil Ditambahkan');
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
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
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
        // dd($request->gambar);
        $banner = Banner::find($id);


        if ($request->gambar != null) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/" . $file_name;
            $request->gambar->storeAs('public/banner', $file_name);
            $banner->gambar = $txt;
        }

        $banner->judul = $request->judul;
        $banner->sub_judul = $request->sub_judul;
        $banner->deskripsi = $request->deskripsi;
        $banner->tombol_text = $request->tombol;
        $banner->tombol_link = $request->link;
        $banner->status = $request->status;
        $banner->save();


        return redirect()->route('banner.index')
            ->with('edit', 'Banner Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::delete("public/banner/$banner->gambar");
        $banner->delete();
        return redirect()->route('banner.index')
            ->with('delete', 'Banner Berhasil Dihapus');
    }
}
