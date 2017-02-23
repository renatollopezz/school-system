<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupStudentsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->integer('registration_id');

            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('registration_id')->references('id')->on('registrations');
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
        Schema::dropIfExists('group_students');
    }
}
