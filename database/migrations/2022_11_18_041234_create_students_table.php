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
        Schema::create('students', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('nis')->primary();
            $table->string('nama');
            $table->enum('jenis_kelamin', array('m','w'));
            $table->enum('kelas', array('10','11','12'));
            $table->enum('tempat_lahir', array('Diambil dari API'));
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon');
            $table->enum('agama', array('Christian', 'Chatolic', 'Muslim', 'Hindu', 'Buddha', 'Konghucu'));
            $table->text('alamat');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
