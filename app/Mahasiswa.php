<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
}
