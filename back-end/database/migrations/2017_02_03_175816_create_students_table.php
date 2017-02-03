<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('street_address');
            $table->char('number_address',5);
            $table->string('neighborhood_address');
            $table->char('post_code_address',8);
            $table->date('birthday');
            $table->enum('gender',['M','F']);
            $table->char('phone',10);
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            //add foreign keys
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');

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
