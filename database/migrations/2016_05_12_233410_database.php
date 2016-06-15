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
        //IMAGES
        
        Schema::create('image', function ($table) {
            $table->increments('id');
            $table->string('alt')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->string('location')->unique();
            $table->integer('size')->nullable();
        });

        Schema::create('organization', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->integer('phone')->nullable();
            $table->string('website')->nullable();
            $table->integer('facebook')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('confirm_date');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
            $table->timestamps();
            
            $table->index('name');
        });

        //PERSONAL INFO
        
        Schema::create('course', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::create('country', function ($table) {
            $table->string('code')->unique();
            $table->string('country');
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

        Schema::create('users', function ($table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->date('birthdate')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('phone')->nullable();
            $table->dateTime('confirm_date')->nullable();
            $table->text('about')->nullable();
            $table->boolean('private_email')->default(false);
            $table->integer('points')->default(0);
            $table->boolean('carta_conducao')->nullable();
            $table->string('nif',9)->unique();
            $table->string('localidade')->nullable();

            $table->text('token');
            
            $table->integer('image')->unsigned()->default(2);
            $table->foreign('image')->references('id')->on('image');


            $table->string('country');
            $table->integer('course')->unsigned()->nullable();
            $table->integer('postal_code')->unsigned()->nullable();
            $table->integer('organization')->unsigned()->nullable(); //null if volunteer, not null if organization with its id
            $table->foreign('country')->references('code')->on('country');
            $table->foreign('course')->references('id')->on('course');
            $table->foreign('postal_code')->references('id')->on('postal_code');
            $table->foreign('organization')->references('id')->on('organization');
            
            $table->boolean('available')->default(true);
            $table->boolean('admin')->default(false);
            $table->timestamps();
            $table->index(['email','password']);
        });

        Schema::create('volunteerinterest', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('interest')->references('id')->on('interest');

            $table->primary(['volunteer', 'interest']);
        });

        Schema::create('organizationinterest', function ($table) {
            $table->integer('organization')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->foreign('interest')->references('id')->on('interest');
            
            $table->primary(['organization', 'interest']);
        });

        Schema::create('organization_page', function($table) {
            $table->increments('id');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->text('mission');
            $table->text('vision');
            $table->text('values');
        });

       Schema::create('user_organization', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('reg_date');
            $table->timestamp('leave_date')->nullable();
            $table->boolean('banned')->default(false);
            $table->boolean('active')->default(true);
            $table->boolean('admin')->default(false);

            $table->primary(['volunteer', 'organization', 'reg_date']);
            
            $table->index('organization');
        });


        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
            $table->text('description')->nullable();
            $table->boolean('public')->default(true);;
            $table->boolean('open')->default(false);;
            $table->boolean('active')->default(true);;
            $table->timestamp('created_date');

            $table->index('organization');
        });
        
        Schema::create('volunteergroup', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('group')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group')->references('id')->on('groups');
            $table->boolean('admin');

            $table->primary(['volunteer', 'group']);
            
            $table->index('group');
        });
        
        Schema::create('activity', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('group')->unsigned()->nullable();
            $table->foreign('group')->references('id')->on('groups');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
            $table->text('location')->nullable();
            $table->text('description')->nullable();
            $table->boolean('public')->default(true);;
            $table->boolean('open')->default(false);;
            $table->boolean('active')->default(true);;
            $table->timestamp('created_date');
            $table->timestamp('init_date');
            $table->timestamp('end_date');
            $table->index('group');
        });

        Schema::create('volunteeractivity', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('activity')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('activity')->references('id')->on('activity');
            $table->boolean('admin')->default(false);
            $table->integer('hours')->default(0);

            $table->primary(['volunteer', 'activity']);
            
            $table->index('activity');
        });

        Schema::create('news', function ($table) {
            $table->increments('id');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
            $table->text('title');
            $table->text('description');
            $table->timestamp('date');
            $table->timestamps();
        });


        // GAMIFICATION TABLES

        Schema::create('medal', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
        });

    
        Schema::create('trophy', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->integer('image')->unsigned()->default(1);
            $table->foreign('image')->references('id')->on('image');
        });
        
        Schema::create('medalattribution', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('medal')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('medal')->references('id')->on('medal');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('date');

            $table->primary(['volunteer', 'medal', 'organization']);
            
            $table->index('volunteer');
        });

        Schema::create('trophyvolunteer', function ($table) {
            $table->integer('trophy')->unsigned();
            $table->integer('volunteer')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('trophy')->references('id')->on('trophy');
            $table->timestamp('date');

            $table->primary(['volunteer', 'trophy']);
            
            $table->index('volunteer');
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trophyvolunteer');
        Schema::drop('medalattribution');
        Schema::drop('trophy');
        Schema::drop('medal');
        Schema::drop('news');
        Schema::drop('volunteergroup');
        Schema::drop('group');
        Schema::drop('user_organization');
        Schema::drop('organizationinterest');
        Schema::drop('organization');
        Schema::drop('volunteerinterest');
        Schema::drop('interest');
        Schema::drop('postal_code');
        Schema::drop('faculty');
        Schema::drop('country');
        Schema::drop('course');
        Schema::drop('image');
        Schema::drop('activity');
        Schema::drop('volunteeractivity');
    }
}
