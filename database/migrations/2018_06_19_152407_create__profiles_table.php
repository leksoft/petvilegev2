<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->char('sex', 10);
            $table->date('birthdate');
            $table->text('address');
            $table->text('mailaddress');
            $table->char('phone',13);
            $table->string('avatar')->default('nopic.jpg');
            $table->double('wallet', 8, 2);
            $table->double('point',8,2);
            $table->string('referral');


           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('profiles');
    }
}
