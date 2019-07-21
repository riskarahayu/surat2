<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratPenelitian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_penelitian', function (Blueprint $table) {
            $table->bigIncrements('id_surat_penelitian');
            $table->string('tujuan_surat', 100);
            $table->string('nama_perusahaan', 100);          
            $table->text('alamat_perusahaan');
            $table->bigInteger('id_surat')->unsigned();

            $table->foreign('id_surat')->references('id_surat')->on('surat');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_penelitian');
    }
}
