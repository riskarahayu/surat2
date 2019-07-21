<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserMahasiswa extends Authenticatable
{
	protected $guard = 'nahasiswa';
    protected $table = 'user_mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'email', 'password', 'ktm', 'slip_spp'];
    public $incrementing = false;
    public $timestamps = false;

    public function mahasiswa() {
    	return $this->belongsTo('App\Mahasiswa', 'nim', 'nim');
    }
}
