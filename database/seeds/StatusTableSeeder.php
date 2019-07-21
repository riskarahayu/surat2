<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
        	'id_status' => 1,
        	'nama_status' => 'Proses'
        ]);

        DB::table('status')->insert([
        	'id_status' => 2,
        	'nama_status' => 'Selesai'
        ]);
    }
}
