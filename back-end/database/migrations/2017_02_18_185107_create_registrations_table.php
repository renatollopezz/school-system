<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('registration_date');
            $table->integer('school_year_id');
            $table->integer('student_id');
            $table->integer('module_id');
            $table->enum('situation', array('O','I','C'));
            // O- Open . I- Inactive . C- Canceled

            $table->foreign('school_year_id')->references('id')->on('school_years');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('module_id')->references('id')->on('modules');
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
        Schema::dropIfExists('registrations');
    }
}
