<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_masuk;

class SuratMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_masuk = Surat_masuk::all();
        return view('suratm.index', compact('surat_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratm.create');
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
            'no_surat'=>'required|string|max:255|unique:surat_masuk',
            'tgl_surat'=>'required|string|max:255',
            'pengirim'=>'required|string|max:255',
            'perihal'=>'required|string|max:255',
            'id_instansis'=>'required|string|max:255',
            'id_disposisi'=>'required|string|max:255',
            'ket_disposisi'=>'required|string|max:255',
            'file'=>'required|string|max:255',
        ]);
        $surat_masuk = new Surat_masuk;
        $surat_masuk->no_surat = $request->no_surat;
        $surat_masuk->tgl_surat = $request->tgl_surat;
        $surat_masuk->pengirim = $request->pengirim;
        $surat_masuk->perihal = $request->perihal;
        $surat_masuk->id_instansis = $request->id_instansis;
        $surat_masuk->id_disposisi = $request->id_disposisi;
        $surat_masuk->ket_disposisi = $request->ket_disposisi;
        $surat_masuk->file = $request->file;
        $surat_masuk->save();
        return redirect()->route('surat_masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_masuk = Surat_masuk::findOrFail($id);
        return view('suratm.show', compact('surat_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk = Surat_masuk::findOrFail($id);
        return view('suratm.edit', compact('surat_masuk'));
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
        $request->validate([
            'no_surat'=>'required|string|max:255',
            'tgl_surat'=>'required|string|max:255',
            'pengirim'=>'required|string|max:255',
            'perihal'=>'required|string|max:255',
            'id_instansis'=>'required|string|max:255',
            'id_disposisi'=>'required|string|max:255',
            'ket_disposisi'=>'required|string|max:255',
            'file'=>'required|string|max:255',
        ]);
        $surat_masuk = Surat_masuk::findOrFail($id);
        $surat_masuk->no_surat = $request->no_surat;
        $surat_masuk->tgl_surat = $request->tgl_surat;
        $surat_masuk->pengirim = $request->pengirim;
        $surat_masuk->perihal = $request->perihal;
        $surat_masuk->id_instansis = $request->id_instansis;
        $surat_masuk->id_disposisi = $request->id_disposisi;
        $surat_masuk->ket_disposisi = $request->ket_disposisi;
        $surat_masuk->file = $request->file;
        $surat_masuk->save();
        return redirect()->route('surat_masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_masuk = Surat_masuk::findOrFail($id);
        $surat_masuk->delete();
        return redirect()->route('surat_masuk.index');
    }
}
