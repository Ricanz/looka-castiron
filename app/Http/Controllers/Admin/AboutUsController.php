<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $data = AboutUs::where('id', 1)->first();
        $data2 = AboutUs::where('id', 2)->first();
        if(!$data){
            AboutUs::create([
                'id' => 1,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        if(!$data2){
            AboutUs::create([
                'id' => 2,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        return view('admin.about_us.index', compact('data', 'data2'));
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

        
        if ($request->gambar2 != null) {
            $data2 = AboutUs::findOrFail(2);
            $extention2 = $request->gambar2->extension();
            $file_name2 = time() . '.' . $extention2;
            $txt2 = "storage/aboutUs/" . $file_name2;
            $request->gambar2->storeAs('public/aboutUs', $file_name2);
            $data2->gambar = $txt2;
            $data2->save();
        }
        return redirect()->route('aboutUs.index')
                ->with('success', 'About Us Berhasil Diperbarui');
    }
}
