<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('studentCode');
            $table->string('email',255);
            $table->string('passWord',100);
            $table->string('firstName',255);
            $table->string('lastName',255);
            $table->date('dateOfBirth');
            $table->boolean('genDer');
            $table->string('phone',11);
            $table->string('address',255);
            $table->boolean('status');
            $table->date('dateEnrollment');
            $table->unsignedInteger('classCode');
            $table->foreign('classCode')->references('classCode')->on('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
