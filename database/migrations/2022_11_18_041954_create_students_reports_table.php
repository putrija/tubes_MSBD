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
            $table->integer('students_nis')->unsigned();
           // $table->foreign('students_nis')->references('nis')->on('students')->onDelete('restrict');
            //$table->integer('subjects_id')->unsigned();
            //$table->foreign('subjects_id')->references('subjects_id')->on('subjects')->onDelete('restrict');
            $table->integer('knowledge_score');
            $table->integer('skill_score');
            $desc_type=[
                'A','B+','B','C+','C','D','E'
            ];
            $table->enum('description', array ($desc_type));
            $table->char('school_year');
            $desc_semester=['ganjil','genap'];
            $table->enum('semester', array($desc_semester));
            $table->string('homeroom_teacher');
            
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

