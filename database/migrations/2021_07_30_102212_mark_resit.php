<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarkResit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_resit', function (Blueprint $table) {
            $table->increments('numberMark');
            $table->unsignedInteger('numberStudent');
            $table->unsignedInteger('numberSubject');
            $table->foreign('numberStudent')->references('numberStudent')->on('student');
            $table->foreign('numberSubject')->references('numberSubject')->on('subject');
            $table->string('mark_resit_final');
            $table->string('mark_resit_skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mark_resit');
    }
}
