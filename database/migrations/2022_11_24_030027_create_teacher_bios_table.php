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
        Schema::create('teacher_bios', function (Blueprint $table) {
            $table->increments('id_bio_guru')->primary();
            $table->string('nip', 20);
            $table->text('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('nama_dusun');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('tugas_tambahan');
            $table->string('sk_cpns');
            $table->string('tanggal_cpns');
            $table->string('sk_pengangkatan');
            $table->string('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan');
            $table->string('pangkat_golongan');
            $table->string('nama_ibu_kandung');
            $table->enum('status_perkawinan', ['Kawin', 'Belum Kawin']);
            $table->string('nama_suami_istri');
            $table->string('nip_suami_istri');
            $table->string('pekerjaan_suami_istri');
            $table->string('tmt_pns');
            $table->enum('sudah_lisensi_kepsek', ['Ya', 'Tidak']);
            $table->enum('diklat_kepengawasan', ['Ya', 'Tidak']);
            $table->enum('keahlian_braile', ['Ya', 'Tidak']);
            $table->enum('keahlian_isyarat', ['Ya', 'Tidak']);
            $table->string('npwp');
            $table->string('nama_wajib_pajak');
            $table->string('kewarganegaraan');
            $table->string('bank');
            $table->string('nomor_rekening_bank');
            $table->string('rekening_atas_nama');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('karpeg');
            $table->string('lintang');
            $table->string('bujur');
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
        Schema::dropIfExists('teacher_bios');
    }
};
