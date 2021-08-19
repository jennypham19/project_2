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
            $table->string('studentCode');
            $table->foreign('studentCode')->references('studentCode')->on('student');
            $table->float('averageMark');
            $table->string('semesterCode');
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
        //
    }
}
