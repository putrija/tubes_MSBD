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
            $table->integer('nis')->unsigned()->autoIncrement();
            $table->string('name');
            $table->enum('gender', array('m','w'));
            $table->enum('class', array('10','11','12'));
            $table->enum('place_of_birth', array('Diambil dari API'));
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->enum('religion', array('Christian', 'Chatolic', 'Muslim', 'Hindu', 'Buddha', 'Konghucu'));
            $table->text('address');
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
