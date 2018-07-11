<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'disposisi';
    protected $fillable = ['disposisi'];

    public function Surat_Masuk()
    {
        return $this->hasMany('App\Surat_masuk','id_disposisi');
    }

    public function Surat_Keluar()
    {
        return $this->hasMany('App\Surat_Keluar','id_instansi');
    }
    
    public $timestamps = true;
}
