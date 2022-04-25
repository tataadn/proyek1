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
            $table->string('id_kelas',10);
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
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
