<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('es_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('es_name1');
            $table->string('es_link1');
            $table->string('es_name2');
            $table->string('es_link2');
            $table->string('es_name3');
            $table->string('es_link3');
            $table->string('es_name4');
            $table->string('es_link4');
            $table->string('es_name5');
            $table->string('es_link5');
            $table->string('es_name6');
            $table->string('es_link6');
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
        Schema::drop('es_servers');
    }
}
