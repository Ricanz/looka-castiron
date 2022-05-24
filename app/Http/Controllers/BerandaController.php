<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('guest.beranda.index');
    }

    public function tentang_view(){
        return view('guest.tentang.index');
    }

    public function products_view(){
        return view('guest.katalog.index');
    }

    public function article_view(){
        return view('guest.artikel.index');
    }

    public function contact_view(){
        return view('guest.kontak.index');
    }
}
