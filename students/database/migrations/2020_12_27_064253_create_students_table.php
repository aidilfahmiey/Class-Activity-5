<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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
        $table->integer('matricnum');
        $table->string('name');
        $table->string('gender');
        $table->date('dob');
        $table->string('citizenship');
        $table->string('status');
        $table->string('religion');
        $table->string('active');
        $table->string('years');
        $table->string('ic');
        $table->string('email');
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
        Schema::dropIfExists('students');
    }
}
