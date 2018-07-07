<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;

class InstansiController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi = Instansi::all();
        return view('instansif.index', compact('instansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansif.create');
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
            'nama_instansi'=>'required|string|max:255',
            'kab_kota'=>'required|string|max:255',
            'telp'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'alamat'=>'required|string|max:255',
            'kepala'=>'required|string|max:255',
            'nip_kepala'=>'required|string|max:255|unique:instansis',
        ]);
        $instansi = new Instansi;
        $instansi->nama_instansi = $request->nama_instansi;
        $instansi->kab_kota = $request->kab_kota;
        $instansi->telp = $request->telp;
        $instansi->email = $request->email;
        $instansi->alamat = $request->alamat;
        $instansi->kepala = $request->kepala;
        $instansi->nip_kepala = $request->nip_kepala;
        $instansi->save();
        return redirect()->route('instansi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instansi = Instansi::findOrFail($id);
        return view('instansif.show', compact('Instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instansi = Instansi::findOrFail($id);
        return view('instansif.edit', compact('instansi'));
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
            'nama_instasi'=>'required|string|max:255',
            'kab_kota'=>'required|string|max:255',
            'telp'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:Instansi',
            'alamat'=>'required|string|max:255',
            'kepala'=>'required|string|max:255',
            'nip_kepala'=>'required|string|max:255|unique:Instansi',
        ]);
        $instansi = Instansi::findOrFail($id);
        $instansi->nama_instasi = $request->nama_instasi;
        $instansi->kab_kota = $request->kab_kota;
        $instansi->telp = $request->telp;
        $instansi->email = $request->email;
        $instansi->alamat = $request->alamat;
        $instansi->kepala = $request->kepala;
        $instansi->nip_kepala = $request->nip_kepala;
        $instansi->save();
        return redirect()->route('instansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->delete();
        return redirect()->route('instansi.index');
    }
}
