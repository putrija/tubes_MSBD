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
        Schema::create('student_bios', function (Blueprint $table) {
            $table->increments('id_bio_siswa');//->primary();
            $table->integer('nis');
            $table->string('anak_ke');
            $table->enum('status_keluarga', ['Anak Kandung', 'Anak Angkat']);
            $table->string('diterima_dikelas');
            $table->string('diterima_pada_tanggal');
            $table->string('diterima_di_semester');
            $table->string('nama_sekolah_asal');
            $table->text('alamat_sekolah_asal');
            $table->string('tahun_ijazah');
            $table->string('nomor_ijazah');
            $table->string('tahun_skhun');
            $table->string('nomor_skhun');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat_ortu');
            $table->string('no_telp_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('no_telp_wali');
            $table->string('pekerjaan_wali');
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
        Schema::dropIfExists('student_bios');
    }
};
