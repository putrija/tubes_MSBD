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
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->string('nama', 255);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->dateTime('tanggal_lahir');
            $table->enum('status_kepegawaian', ['PNS', 'PPPK', 'GTY/PTY', 'Guru Honor Sekolah']);
            $table->string('jenis_ptk');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Budhha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('no_tlp', 15);
            $table->string('email')->unique();
            $table->enum('status_pernikahan', ['Menikah', 'Belum Menikah']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
