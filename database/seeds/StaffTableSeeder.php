<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_staff')->insert([
        	'nip' => '12345',
        	'email' => 'admin@gmail.com',
        	'password' => Hash::make('staff555'),
        	'role_id' => 1
        ]);
    }
}
