<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfessorNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professorNotifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('professorID')->unsigned();
            $table->string('body');
            $table->string('type');
            $table->timestamps();
            $table->foreign('professorID')->references('id')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professorNotifications');
    }
}
