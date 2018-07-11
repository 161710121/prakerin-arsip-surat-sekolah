<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_masuk extends Model
{
    protected $table = 'surat_masuk';
    protected $fillable = ['no_surat', 'tgl_surat', 'pengirim', 'perihal', 'id_instansis', 'id_disposisi', 'ket_disposisi', 'file' ];

    public function SMDisposisi()
    {
        return $this->belongsTo('App\Disposisi','id_disposisi');
    }

    public function SMInstansi()
    {
        return $this->belongsTo('App\Instansi','id_instansis');
    }
    
    public $timestamps = true;
}
