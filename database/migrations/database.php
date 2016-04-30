<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->date('birthdate');
            $table->boolean('gender');
            $table->longint('phone');
            $table->date('reg_date');
            $table->date('confirm_date');
            $table->text('about');
            $table->boolean('private_email');
            $table->integer('point');
            $table->boolean('carta_conducao');

            $table->foreign('country')->references('id')->on('country');
            $table->foreign('course')->references('id')->on('course');
            $table->foreign('postal_code')->references('id')->on('postal_code');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('country', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::table('faculty', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('designation');
        });

        Schema::table('course', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::table('postal_code', function ($table) {
            $table->increments('id');
            $table->integer('prefix');
            $table->integer('sufix');
            $table->string('designation');
        });

        Schema::create('organization', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
          
            $table->longint('phone');
            $table->date('reg_date');
            $table->date('confirm_date');
            $table->text('description');
            $table->boolean('private_email');
            $table->foreign('postal_code')->references('id')->on('postal_code');

            $table->rememberToken();
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
        Schema::drop('users');
        Schema::drop('country');
        Schema::drop('faculty');
        Schema::drop('course');
        Schema::drop('postal_code');
        Schema::drop('organization');
    }
}
