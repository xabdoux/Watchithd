<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ar_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ar_name1');
            $table->string('ar_link1');
            $table->string('ar_name2');
            $table->string('ar_link2');
            $table->string('ar_name3');
            $table->string('ar_link3');
            $table->string('ar_name4');
            $table->string('ar_link4');
            $table->string('ar_name5');
            $table->string('ar_link5');
            $table->string('ar_name6');
            $table->string('ar_link6');
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
        Schema::drop('ar_servers');
    }
}
