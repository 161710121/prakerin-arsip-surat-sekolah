<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_masuk extends Model
{
    protected $table = 'surat_masuk';
    protected $fillable = ['no_surat', 'tgl_surat', 'pengirim', 'perihal', 'id_disposisi', 'ket_disposisi', 'file' ];
    
    public $timestamps = true;
}
