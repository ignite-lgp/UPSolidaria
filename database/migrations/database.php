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

        Schema::create('course', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::create('country', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::create('faculty', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('designation');
        });

        Schema::create('postal_code', function ($table) {
            $table->increments('id');
            $table->integer('prefix');
            $table->integer('sufix');
            $table->string('designation');
        });

        Schema::create('interest', function ($table) {
            $table->increments('id');
            $table->string('interest')->unique();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->date('birthdate');
            $table->boolean('gender');
            $table->integer('phone');
            $table->date('reg_date');
            $table->date('confirm_date');
            $table->text('about');
            $table->boolean('private_email');
            $table->integer('point');
            $table->boolean('carta_conducao');

            $table->integer('country')->unsigned();
            $table->integer('course')->unsigned();
            $table->integer('postal_code')->unsigned();
            $table->foreign('country')->references('id')->on('country');
            $table->foreign('course')->references('id')->on('course');
            $table->foreign('postal_code')->references('id')->on('postal_code');

            $table->rememberToken();
            $table->timestamps();
        });

        /*Schema::create('volunteerinterest', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('volunteer')->references('id')->on('volunteer');
            $table->foreign('interest')->references('id')->on('interest');
            $table->primary(['volunteer', 'interest']);
        });*/

        Schema::create('organization', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('phone');
            $table->string('website');
            $table->integer('facebook');
            $table->text('about');
            $table->timestamp('confirm_date');
            $table->timestamp('created_date');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('organizationinterest', function ($table) {
            $table->integer('organization')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->foreign('interest')->references('id')->on('interest');
            $table->unique(['organization', 'interest'],'composite_index');
        });

       /* Schema::create('registration', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('volunteer');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('reg_date');
            $table->boolean('banned');
            $table->boolean('active');
            $table->unique(['volunteer', 'organization'],'composite_index');
        });*/

        Schema::create('group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->text('description');
            $table->boolean('public');
            $table->boolean('open');
            $table->boolean('active');
            $table->timestamp('created_date');
            $table->rememberToken();
            $table->timestamps();
        });

        /*
        Schema::create('volunteergroup', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('group')->unsigned();
            $table->foreign('volunteer')->references('id')->on('volunteer');
            $table->foreign('group')->references('id')->on('group');
            $table->unique(['volunteer', 'group'],'composite_index');
        });
        */

        Schema::create('new', function ($table) {
            $table->increments('id');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->text('title');
            $table->text('description');
            $table->timestamp('date');
        });


        // GAMIFICATION TABLES

        Schema::create('medal', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
        });

        Schema::create('trophy', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
        });

        /*
        Schema::create('medalattribution', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('medal')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('volunteer');
            $table->foreign('medal')->references('id')->on('medal');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('date');
            $table->unique(['volunteer', 'medal', 'organization'],'composite_index');
        });

        Schema::create('trophyvolunteer', function ($table) {
            $table->integer('trophy')->unsigned();
            $table->integer('volunteer')->unsigned();
            $table->foreign('volunteer')->references('id')->on('volunteer');
            $table->foreign('trophy')->references('id')->on('trophy');
            $table->timestamp('date');
            $table->unique(['volunteer', 'trophy'],'composite_index');
        });
        */

        // ADMIN TABLE
        
        Schema::create('adminstrator', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('phone');
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
    }
}
