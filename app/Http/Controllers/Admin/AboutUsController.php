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
        $data3 = AboutUs::where('id', 3)->first();
        $data4 = AboutUs::where('id', 4)->first();
        $data5 = AboutUs::where('id', 5)->first();
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
        if(!$data3){
            AboutUs::create([
                'id' => 3,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        if(!$data4){
            AboutUs::create([
                'id' => 4,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        if(!$data5){
            AboutUs::create([
                'id' => 5,
                'gambar' => '',
                'deskripsi' => ''
            ]);
        }
        return view('admin.about_us.index', compact('data', 'data2', 'data3', 'data4', 'data5'));
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

        if ($request->gambar3 != null) {
            $data3 = AboutUs::findOrFail(3);
            $extention3 = $request->gambar3->extension();
            $file_name3 = time() . '.' . $extention3;
            $txt3 = "storage/aboutUs/" . $file_name3;
            $request->gambar3->storeAs('public/aboutUs', $file_name3);
            $data3->gambar = $txt3;
            $data3->save();
        }

        if ($request->gambar4 != null) {
            $data4 = AboutUs::findOrFail(4);
            $extention4 = $request->gambar4->extension();
            $file_name4 = time() . '.' . $extention4;
            $txt4 = "storage/aboutUs/" . $file_name4;
            $request->gambar4->storeAs('public/aboutUs', $file_name4);
            $data4->gambar = $txt4;
            $data4->save();
        }

        if ($request->gambar5 != null) {
            $data5 = AboutUs::findOrFail(5);
            $extention5 = $request->gambar5->extension();
            $file_name5 = time() . '.' . $extention5;
            $txt5 = "storage/aboutUs/" . $file_name5;
            $request->gambar5->storeAs('public/aboutUs', $file_name5);
            $data5->gambar = $txt5;
            $data5->save();
        }
        return redirect()->route('aboutUs.index')
                ->with('success', 'About Us Berhasil Diperbarui');
    }
}
