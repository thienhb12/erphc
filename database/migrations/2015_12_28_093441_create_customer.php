<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->length(80);
            $table->string('address');
            $table->integer('phone');
            $table->string('zalo')->length(80);
            $table->string('viber')->length(80);
            $table->string('skyper')->length(80);
            $table->string('email');
            $table->string('company');
            $table->tinyInteger('gender');
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
        Schema::drop('customer');
    }
}
