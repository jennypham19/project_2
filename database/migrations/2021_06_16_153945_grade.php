<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->increments('numberClass');
            $table->string('classCode',20);
            $table->string('nameClass',150);
            $table->unsignedInteger('numberCourse');
            $table->foreign('numberCourse')->references('numberCourse')->on('course');
            $table->unsignedInteger('numberMajor');
            $table->foreign('numberMajor')->references('numberMajor')->on('major');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade');
    }
}
