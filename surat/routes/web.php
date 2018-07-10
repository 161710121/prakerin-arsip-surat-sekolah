<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>['auth', 'role:admin']],

function(){

Route::resource('instansi', 'InstansiController');
Route::resource('disposisi', 'DisposisiController');
Route::resource('surat_masuk', 'SuratMasukController');
Route::resource('surat_keluar', 'SuratKeluarController');

});
