<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AverageMark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('average_mark', function (Blueprint $table) {
            $table->increments('number');
            $table->unsignedInteger('numberStudent');
            $table->foreign('numberStudent')->references('numberStudent')->on('student');
            $table->float('averageMark');
            $table->unsignedInteger('numberSemester');
            $table->foreign('numberSemester')->references('numberSemester')->on('semester');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
