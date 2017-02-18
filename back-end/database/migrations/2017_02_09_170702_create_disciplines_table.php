<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('active');
            $table->dateTime('registration_date');
            $table->integer('module_id');

            $table->foreign('module_id')->references('id')->on('modules');
            $table->timestamps();
        });
    }
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplines');
    }
}
