<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HelpprofessorInUni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpprofessors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('famillyname');
            $table->string('password')->nullable();
            $table->string('personalCode');
            $table->string('NationalCode');
            $table->string('gerayesh');
            $table->string('tahsilat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('helpprofessors');
    }
}
