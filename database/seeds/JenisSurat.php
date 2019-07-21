<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JenisSurat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	DB::table('jenis_surat')->insert([
     		'nama_jenis_surat' => 'Surat Aktif Kuliah'
     	]);   
    }
}
