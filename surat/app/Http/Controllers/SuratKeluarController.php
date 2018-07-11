<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_keluar;
use App\Instansi;
use App\Disposisi;

class SuratKeluarController extends Controller
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
        $surat_keluar = Surat_keluar::with('SKDisposisi', 'SKInstansi')->get();
        return view('suratk.index', compact('surat_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disposisi = Disposisi::all();
        $instansi = Instansi::all();
        return view('suratk.create', compact('disposisi','instansi'));
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
            'no_surat'=>'required|string|max:255|unique:surat_keluar',
            'tgl_surat'=>'required|string|max:255',
            'pengirim'=>'required|string|max:255',
            'perihal'=>'required|string|max:255',
            'tertuju'=>'required|string|max:255',
            'id_instansis'=>'required|string|max:255',
            'alamat'=>'required|string|max:255',
            'id_disposisi'=>'required|string|max:255',
            'ket_disposisi'=>'required|string|max:255',
            'file'=>'required|string|max:255',
        ]);
        $surat_keluar = new Surat_keluar;
        $surat_keluar->no_surat = $request->no_surat;
        $surat_keluar->tgl_surat = $request->tgl_surat;
        $surat_keluar->pengirim = $request->pengirim;
        $surat_keluar->perihal = $request->perihal;
        $surat_keluar->tertuju = $request->tertuju;
        $surat_keluar->id_instansis = $request->id_instansis;
        $surat_keluar->alamat = $request->alamat;
        $surat_keluar->id_disposisi = $request->id_disposisi;
        $surat_keluar->ket_disposisi = $request->ket_disposisi;
        $surat_keluar->file = $request->file;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = public_path(). '/assets/file/';
            $filename = str_random(3).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $surat_keluar->file = $filename;
        }
        $surat_keluar->save();
        return redirect()->route('surat_keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id);
        $disposisi = Disposisi::all();
        $instansi = Instansi::all();
        return view('suratk.show', compact('surat_keluar','disposisi','instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id);
        $disposisi = Disposisi::all();
        $instansi = Instansi::all();
        $sldis = Surat_keluar::findOrFail($id)->id_disposisi;
        $slins = Surat_keluar::findOrFail($id)->id_instansis;
        return view('suratk.edit', compact('surat_keluar','disposisi','instansi','slins','sldis'));
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
            'tertuju'=>'required|string|max:255',
            'id_instansis'=>'required|string|max:255',
            'alamat'=>'required|string|max:255',
            'id_disposisi'=>'required|string|max:255',
            'ket_disposisi'=>'required|string|max:255',
            'file'=>'required|string|max:255',
        ]);
        $surat_keluar = Surat_keluar::findOrFail($id);
        $surat_keluar->no_surat = $request->no_surat;
        $surat_keluar->tgl_surat = $request->tgl_surat;
        $surat_keluar->pengirim = $request->pengirim;
        $surat_keluar->perihal = $request->perihal;
        $surat_keluar->tertuju = $request->tertuju;
        $surat_keluar->id_instansis = $request->id_instansis;
        $surat_keluar->alamat = $request->alamat;
        $surat_keluar->id_disposisi = $request->id_disposisi;
        $surat_keluar->ket_disposisi = $request->ket_disposisi;
        $surat_keluar->file = $request->file;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destinationPath = public_path().'/assets/file/';
            $filename = str_random(3).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if ($surat_keluar->file) {
                $old_file = $surat_keluar->file;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/file/' . DIRECTORY_SEPARATOR . $surat_keluar-file;
                    try{
                        File::delete($filepath);
                    } catch (FileNotFoundException $e) {

                    }
                }
                    $surat_keluar->file = $filename;
            }
        
        $surat_keluar->save();
        return redirect()->route('surat_keluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id);
        $surat_keluar->delete();
        return redirect()->route('surat_keluar.index');
    }
}
