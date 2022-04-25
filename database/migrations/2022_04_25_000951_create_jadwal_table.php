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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('id_jadwal',10)->primary();
            $table->string('hari',10);
            $table->string('id_kelas',10);
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->bigInteger('nip');
            $table->foreign('nip')->references('nip')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
