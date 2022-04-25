<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->increments('id_absen');
            $table->date('tanggal');
            $table->string('id_jadwal',10);
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal');
            $table->integer('nis');
            $table->foreign('nis')->references('nis')->on('siswa');
            $table->string('lokasi',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
    }
};
