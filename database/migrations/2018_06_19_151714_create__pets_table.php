<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('IDower')->unsigned();
            $table->string('name');
            $table->char('sex', 10);
            $table->date('birthdate');
            $table->integer('animaltype_id')->unsigned();
            $table->string('avatar')->default('nopic.jpg');

          //  $table->foreign('animaltype_id')->references('id')->on('animaltypes')->onDelete('cascade');
          
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
        Schema::dropIfExists('pets');
    }
}
