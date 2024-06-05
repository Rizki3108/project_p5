<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Guru;
use App\Models\Jurusan;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Artikel::all();
        $guru = Guru::all();
        $jurusan = Jurusan::all();
        return view('welcome', compact('artikel', 'guru', 'jurusan'));
    }
}