<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $data = AboutUs::where('id', 1)->first();
        if(!$data){
            AboutUs::create([
                'id' => 1,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        return view('admin.about_us.index', compact('data'));
    }

    public function update(Request $request){
        $data = AboutUs::findOrFail(1);
        if ($request->gambar != null) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/aboutUs/" . $file_name;
            $request->gambar->storeAs('public/aboutUs', $file_name);
            $data->gambar = $txt;
        }
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('aboutUs.index')
                ->with('success', 'About Us Berhasil Diperbarui');
    }
}
