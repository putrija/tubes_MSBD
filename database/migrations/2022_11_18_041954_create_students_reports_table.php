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
        Schema::create('students_reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->foreign('nis')->references('nis')->on('students')->onDelete('restrict');
            $table->foreign('subjects_id')->references('subjects_id')->on('subjects')->onDelete('restrict');
            $table->integer('knowladge_score');
            $table->integer('skill_score');
            $desc_type=[
                'A','B+','B','C+','C','D','E'
            ];
            $table->enum('description', array ($desc_type));
            $table->char('school_year');
            $desc_semester=['ganjil','genap'];
            $table->enum('semester', array($desc_semester));
            $table->varchar('homeroom_teacher');
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
        Schema::dropIfExists('students_reports');
    }
};
