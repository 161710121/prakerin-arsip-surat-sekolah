<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disposisi;

class DisposisiController extends Controller
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
        $disposisi = Disposisi::all();
        return view('disposisi.index', compact('disposisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposisi.create');
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
            'disposisi'=>'required|string|max:255',
        ]);
        $disposisi = new Disposisi;
        $disposisi->disposisi = $request->disposisi;
        $disposisi->save();
        return redirect()->route('disposisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disposisi = Disposisi::findOrFail($id);
        return view('disposisi.show', compact('disposisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disposisi = Disposisi::findOrFail($id);
        return view('disposisi.edit', compact('disposisi'));
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
            'disposisi'=>'required|string|max:255',
        ]);
        $disposisi = Disposisi::findOrFail($id);
        $disposisi->disposisi = $request->disposisi;
        $disposisi->save();
        return redirect()->route('disposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disposisi = Disposisi::findOrFail($id);
        $disposisi->delete();
        return redirect()->route('disposisi.index');
    }
}
