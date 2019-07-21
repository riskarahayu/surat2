<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JenisSurat::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StatusTableSeeder::class);
    }
}
