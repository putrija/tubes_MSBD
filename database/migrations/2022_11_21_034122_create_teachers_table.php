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
            $table->integer('id_guru', 11)->primary();
            $table->char('nip', 18)->unique();
            $table->char('nip', 16)->unique();
            $table->string('nama', 255);
            $table->string('tempat_lahir', 100);
            $table->dateTime('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('jenis_ptk', ['Guru TIK', 'Guru Mapel', 'Guru BK', 'Guru Kelas']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('nama_ibu_kandung', 255);
            $table->string('no_tlp', 20);
            $table->string('no_hp', 20);
            $table->string('email', 255)->unique();
            $table->text('tugas_tambahan');
            $table->enum('sudah_lesensi_kepsek', ['Ya', 'Tidak']);
            $table->enum('pernah_diklat_pengawasan', ['Ya', 'Tidak']);
            $table->enum('keahlian_braile', ['Ya', 'Tidak']);
            $table->enum('keahlian_bahasa_isyarat', ['Ya', 'Tidak']);
            $table->string('kewarganegaraan', 255);
            $table->char('nik', 16);
            $table->char('no_kk', 16);
            $table->string('nuks', 255);
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
