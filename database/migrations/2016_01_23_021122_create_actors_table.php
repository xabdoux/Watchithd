<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actor_name1');
            $table->string('dist_name1');
            $table->string('actor_name2');
            $table->string('dist_name2');
            $table->string('actor_name3');
            $table->string('dist_name3');
            $table->string('actor_name4');
            $table->string('dist_name4');
            $table->string('actor_name5');
            $table->string('dist_name5');
            $table->string('movies_id');
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
        Schema::drop('actors');
    }
}
