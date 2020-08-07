<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('country');
            $table->string('language');
            $table->string('director');
            $table->string('producer');
            $table->string('runtime');
            $table->string('quality');
            $table->string('cover');
            $table->string('trailer');
            $table->string('type');
            $table->string('tags');
            $table->date('release_date');
            $table->integer('year');
            $table->string('rates_id');

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
        Schema::drop('movies');
    }
}
