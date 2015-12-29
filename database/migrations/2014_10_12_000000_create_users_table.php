<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // Create table for storing department
        Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('department_created_by');
            $table->timestamps();
        });

        // Create table for storing regency
        Schema::create('regency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name'); 
            $table->string('last_name');
            $table->string('avatar');
            $table->integer('payroll');
            $table->integer('profits');
            $table->integer('phone');
            $table->boolean('gender')->default(false);
            $table->integer('regency_id')->unsigned();
            $table->foreign('regency_id')->references('id')->on('regency')->onDelete('cascade');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('last_login');
            $table->string('password', 60); 
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
        Schema::drop('department');
        Schema::drop('regency');
        Schema::drop('users');
    }
}
