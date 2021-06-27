<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->increments('subjectCode');
            $table->string('nameSubject',150);
            $table->integer('totalClassHour');
            $table->date('startDate');
            $table->boolean('isFinal');
            $table->boolean('isSkill');
            $table->unsignedInteger('semesterCode');
            $table->foreign('semesterCode')->references('semesterCode')->on('semester');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
}
