<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimonial::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.create');
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
            'rating' => 'required',
            'foto' => 'required'
        ]);

        if ($request->foto) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/testimoni/". $file_name;
            $request->foto->storeAs('public/testimoni', $file_name);
        }

        $testimoni = Testimonial::create([
            'nama' => $request->nama,
            'instansi' => $request->instansi,
            'foto' => $txt,
            'deskripsi' => $request->deskripsi,
            'rating' => $request->rating,
        ]);
        if($testimoni){
            return redirect()->route('testimonial.index')
                ->with('success', 'testimonial Berhasil Ditambahkan');
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
        $data = Testimonial::find($id);
        return view('admin.testimoni.edit', compact('data'));
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
        $testimoni = Testimonial::find($id);

        if ($request->foto) {
            $extention = $request->foto->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/testimoni/". $file_name;
            $request->foto->storeAs('public/testimoni', $file_name);
            $testimoni->foto = $txt;
        }

        $testimoni->nama = $request->nama;
        $testimoni->instansi = $request->instansi;
        $testimoni->rating = $request->rating;
        $testimoni->deskripsi = $request->deskripsi;
        $testimoni->status = $request->status;
        $testimoni->save();

        return redirect()->route('testimonial.index')
                ->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimonial::findOrFail($id);
        Storage::delete("public/testimoni/$testimoni->foto");
        $testimoni->delete();
        return redirect()->route('testimonial.index')
            ->with('delete', 'Testimoni Berhasil Dihapus');

    }
}
