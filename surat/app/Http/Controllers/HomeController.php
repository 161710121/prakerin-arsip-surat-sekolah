<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_masuk;
use App\Surat_keluar;
use App\Instansi;
use App\User;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sm = Surat_masuk::count();
        $sk = Surat_keluar::count();
        $in = Instansi::count();
        $us = User::count();
        return view('home', compact('sm', 'sk', 'in', 'us'));
    }
}
