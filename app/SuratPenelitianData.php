<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPenelitianData extends Model
{
    protected $table = 'surat_penelitian_data';
    protected $fillable = ['id_surat_penelitian', 'nama'];

    public $timestamps = false;	
}
