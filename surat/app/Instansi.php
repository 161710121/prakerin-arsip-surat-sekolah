<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instansi extends Model
{
    protected $table = 'instansis';
    protected $fillable = ['nama_instansi', 'kab_kota', 'telp', 'email', 'alamat', 'kepala', 'nip_kepala'];

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
