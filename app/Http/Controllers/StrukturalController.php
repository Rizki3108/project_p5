<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Struktural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $struktural = Struktural::all();
        return view('strukturals.index', compact('struktural'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $jabatan = Jabatan::all();
        return view('strukturals.create', compact('guru', 'jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = Validator::make($request->all(), [
            'id_guru' => 'required|unique:strukturals,id_guru', //nama guru harus unik
            'id_jabatan' => 'required|exists:jabatans,id', //id jabatan harus ada di tabel jabatan
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()], 442);
        }

        //periksa apakah sudah ada guru dengan nama yang sama dan jabatan yang sama
        $existingStruktural = Struktural::where('id_guru', $request->nama_guru)
            ->where('id_jabatan', $request->id_jabatan)
            ->first();

        if ($existingStruktural) {
            return response()->json(['error' => 'Guru dengan nama dan jabatan yang sama sudah ada'], 442);
        }
        
        $struktural = new Struktural;
        $struktural->id_guru = $request->id_guru;
        $struktural->id_jabatan = $request->id_jabatan;

        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/struktural', $name);
            $struktural->sampul = $name;

        }

        $struktural->save();
        return redirect()->route('struktural.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $struktural = Struktural::findOrFail($id);
        return view('strukturals.show', compact('struktural'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktural = Struktural::findOrFail($id);
        $guru = Guru::all();
        $jabatan = Jabatan::all();
        return view('strukturals.edit', compact('struktural', 'guru', 'jabatan'));
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
        //validasi data
        $validated = Validator::make($request->all(), [
            'id_guru' => 'required',
            'id_jabatan' => 'required|exists:jabatans,id',
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()], 422);
        }

        //periksa apakah sudah ada nama guru dengan nama yang sama dan jabatan yang sama
        //kecuali guru yang sedang di update
        $existingStruktural = Struktural::where('id_guru', $request->nama_guru)
            ->where('id_jabatan', $request->id_jabatan)
            ->where('id', '!=', $id) //kecuali guru yang sedang di update
            ->first();

        if ($existingStruktural) {
            return response()->json(['error' => 'Guru dengan nama dan jabatan yang sama sudah ada'], 442);
        }

        $struktural = Struktural::findOrFail($id);
        $struktural->id_guru = $request->id_guru;
        $struktural->id_jabatan = $request->id_jabatan;

        if ($request->hasFile('sampul')) {
            $struktural->deleteImage();
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/struktural', $name);
            $struktural->sampul = $name;

        }
        
        $struktural->save();
        return redirect()->route('struktural.index')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktural = Struktural::findOrFail($id);
        $struktural->delete();
        return redirect()->route('struktural.index')->with('success', 'Berhasil menghapus data');
    }
}
