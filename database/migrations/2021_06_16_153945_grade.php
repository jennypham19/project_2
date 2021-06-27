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
            $table->increments('classCode');
            $table->string('nameClass',150);
            $table->unsignedInteger('courseCode');
            $table->foreign('courseCode')->references('courseCode')->on('course');
            $table->unsignedInteger('majorCode');
            $table->foreign('majorCode')->references('majorCode')->on('major');

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
