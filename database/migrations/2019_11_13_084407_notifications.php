<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentNotifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('studentID')->unsigned();
            $table->string('body');
            $table->string('type');
            $table->timestamps();
            $table->foreign('studentID')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentNotifications');
    }
}
