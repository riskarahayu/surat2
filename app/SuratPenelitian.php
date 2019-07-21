<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPenelitian extends Model
{
    protected $table = 'surat_penelitian';
    protected $primaryKey = 'id_surat_penelitian';
    protected $fillable = [ 'tujuan_surat', 'nama_perusahaan', 'alamat_perusahaan', 'id_surat'];

    public $timestamps = false;

    public function data() {
    	return $this->hasMany('App\SuratPenelitianData', 'id_surat_penelitian', 'id_surat_penelitian');
    }
}
