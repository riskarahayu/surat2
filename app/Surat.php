<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
	protected $table = 'surat';
	protected $primaryKey = 'id_surat';
    protected $fillable = ['no_surat', 'perihal', 'lampiran', 'id_jenis_surat', 'tanggal_pengajuan', 'nim' , 'id_status'];

    public function jenis_surat() {
    	return $this->belongsTo('App\JenisSurat', 'id_jenis_surat', 'id_jenis_surat');
    }

    public function surat_penelitian() {
    	return $this->hasOne('App\SuratPenelitian', 'id_surat', 'id_surat');
    }

    public function status() {
    	return $this->belongsTo('App\Status', 'id_status', 'id_status');
    }

    public function user_mahasiswa() {
        return $this->belongsTo('App\UserMahasiswa', 'nim', 'nim');
    }
}
