<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_keluar extends Model
{
    protected $table = 'surat_keluar';
    protected $fillable = ['no_surat', 'tgl_surat', 'pengirim', 'perihal', 'tertuju', 'id_instansis', 'alamat', 'id_disposisi', 'ket_disposisi', 'file' ];
    
    public $timestamps = true;
}
