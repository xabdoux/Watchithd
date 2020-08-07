<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorylinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storylines', function (Blueprint $table) {
            $table->increments('id');
            $table->text('en',255);
             $table->text('fr',255);
              $table->text('es',255);
               $table->text('ar',255);
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
        Schema::drop('storylines');
    }
}
