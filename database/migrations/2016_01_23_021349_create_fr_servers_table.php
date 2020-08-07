<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fr_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fr_name1');
            $table->string('fr_link1');
            $table->string('fr_name2');
            $table->string('fr_link2');
            $table->string('fr_name3');
            $table->string('fr_link3');
            $table->string('fr_name4');
            $table->string('fr_link4');
            $table->string('fr_name5');
            $table->string('fr_link5');
            $table->string('fr_name6');
            $table->string('fr_link6');
            $table->integer('movies_id');
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
        Schema::drop('fr_servers');
    }
}
