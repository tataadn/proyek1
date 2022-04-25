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
        Schema::create('guru', function (Blueprint $table) {
            $table->integer('nip')->primary();
            // $table->string('password',100);
            // $table->string('nama_guru',50);
            // $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            // $table->foreign('id_mapel')->references('id_mapel')->on('kelas');
            // $table->string('jenkel',20);
            // $table->string('alamat',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
};
