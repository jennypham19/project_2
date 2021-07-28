<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function (Blueprint $table) {
            $table->increments('numberMark');
            $table->unsignedInteger('numberStudent');
            $table->unsignedInteger('numberSubject');
            $table->foreign('numberStudent')->references('numberStudent')->on('student');
            $table->foreign('numberSubject')->references('numberSubject')->on('subject');
            $table->float('final1st');
            $table->float('final2nd');
            $table->float('skill1st');
            $table->float('skill2nd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mark');
    }
}
