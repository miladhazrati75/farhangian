<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsInUni extends Migration
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
            $table->string('password')->nullable();
            $table->string('National_Code')->unique();
            $table->string('mobileNumber');
            $table->string('reshte');
            $table->string('term');
            $table->string('student_code', 20)->unique();
            $table->string('professor_name')->nullable();
            $table->date('start_of_internship')->nullable();
            $table->date('end_of_internship')->nullable();
            $table->text('school_address_of_internship')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
