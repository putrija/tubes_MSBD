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
            $table->string ('nip',20) -> primary();
            $table->string ('jenis_ptk');
            $table->string ('Gol_PNS');
            $table->string ('nama',255);
            $table->char ('nuptk', 16);
            $table->enum ('Jenis_Kelamin',['Laki-laki','Perempuan']);
            $table->string ('Tempat_lahir');
            $table->dateTime ('Tanggal_lahir');
            $table->enum ('Agama',['Islam', 'Kristen', 'Katolik', 'Budhha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string ('No_tlp',15);
            $table->string ('email') -> unique();
            $table->enum ('status_pernikahan',['Menikah','Belum Menikah']);
            
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
