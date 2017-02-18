<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_id');
            $table->integer('class_id');
            $table->integer('discipline_id');
            $table->float('note1', 1, 2)->default(0.00);
            $table->float('note2', 1, 2)->default(0.00);
            $table->float('note3', 1, 2)->default(0.00);
            $table->float('note4', 1, 2)->default(0.00);

            $table->foreign('registration_id')->references('id')->on('registrations');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('discipline_id')->references('id')->on('disciplines');

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
        Schema::dropIfExists('release_notes');
    }
}
