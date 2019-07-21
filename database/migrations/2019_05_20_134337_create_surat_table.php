<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->bigIncrements('id_surat');
            $table->string('no_surat', 20);
            $table->string('perihal', 100);
            $table->text('lampiran');
            $table->char('nim', 8);
            $table->tinyInteger('id_jenis_surat')->unsigned();

            $table->foreign('nim')->references('nim')->on('user_mahasiswa');
            $table->foreign('id_jenis_surat')->references('id_jenis_surat')->on('jenis_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
