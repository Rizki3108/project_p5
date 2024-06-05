<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Guru;
use App\Models\Jurusan;

class BerandaController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $guru = Guru::all();
        $jurusan = Jurusan::all();
        return view('welcome', compact('artikel', 'guru', 'jurusan'));

    }   

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('beranda.show', compact('artikel'));
    }
}