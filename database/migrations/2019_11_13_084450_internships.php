<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Internships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('studentID')->unsigned();
            $table->bigInteger('professorID')->unsigned();
            $table->bigInteger('schoolID')->unsigned();
            $table->string('startDate');
            $table->string('status');
            $table->timestamps();
            $table->foreign('studentID')->references('id')->on('students');
            $table->foreign('professorID')->references('id')->on('professors');
            $table->foreign('schoolID')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internships');
    }
}
