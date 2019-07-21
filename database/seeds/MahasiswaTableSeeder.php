<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_mahasiswa')->insert([
        	'nim' => '16615019',
        	'email' => 'mahasiswa@gmail.com',
        	'password' => Hash::make('mahasiswa555')
        ]);
    }
}
