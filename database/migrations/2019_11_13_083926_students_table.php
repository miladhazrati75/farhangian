<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('family');
            $table->string('password');
            $table->string('National_Code')->unique();
            $table->string('mobileNumber');
            $table->string('reshteh');
            $table->string('term');
            $table->string('address');
            $table->string('student_code', 20)->unique();
            $table->bigInteger('professorID')->unsigned()->nullable();
            $table->bigInteger('schoolID')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('schoolID')->references('id')->on('schools');
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
        Schema::dropIfExists('students');
    }
}
