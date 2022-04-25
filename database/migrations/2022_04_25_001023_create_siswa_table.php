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
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('nis')->primary();
            $table->string('password',100);
            $table->string('nama_siswa',100);
            $table->string('id_kelas',10);
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->string('jenis_kelamin',20);
            $table->string('alamat',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
