<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            'id_guru' => '2',
            'nip' => '198304112010012026',
            'nuptk' => '3433761662300242',
            'nama' => 'Ade Irma Suryani',
            'tempat_lahir' => 'MEDAN',
            'tanggal_lahir' => '1983-04-11',
            'jenis_kelamin' => 'Perempuan',
            'jenis_ptk' => 'Guru TIK',
            'agama' => 'Islam',
            'nama_ibu_kandung' => 'TUMINI',
            'no_tlp' => '0617345465',
            'no_hp' => '085297801239',
            'email' => 'deyadeirma@gmail.com',
            'tugas_tambahan' => '',
            'sudah_lesensi_kepsek' => 'Tidak',
            'pernah_diklat_pengawasan' => 'Tidak',
            'keahlian_braile' => 'Tidak',
            'keahlian_bahasa_isyarat' => 'Tidak',
            'kewarganegaraan' => 'ID',
            'nik' => '1271065104830005',
            'no_kk' => '',
            'nuks' => '',
        ];
        \DB::table('teachers')->insert($teachers);
    }
}
