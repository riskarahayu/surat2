<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_mahasiswa', function (Blueprint $table) {
            $table->char('nim', 8);
            $table->string('email', 100);
            $table->string('password', 255);
            $table->string('ktm', 255)->nullable();
            $table->string('slip_spp', 255)->nullable();

            $table->primary('nim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_mahasiswa');
    }
}
