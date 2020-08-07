<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_name1');
            $table->string('en_link1');
            $table->string('en_name2');
            $table->string('en_link2');
            $table->string('en_name3');
            $table->string('en_link3');
            $table->string('en_name4');
            $table->string('en_link4');
            $table->string('en_name5');
            $table->string('en_link5');
            $table->string('en_name6');
            $table->string('en_link6');
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
        Schema::drop('en_servers');
    }
}
