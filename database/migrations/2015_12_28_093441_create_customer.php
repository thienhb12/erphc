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
            $table->bigIncrements('id');
            $table->string('name')->length(80);
            $table->string('address');
            $table->string('phone')->length(100);
            $table->string('zalo')->length(80);
            $table->string('viber')->length(80);
            $table->string('skyper')->length(80);
            $table->string('email');
            $table->string('company');
            $table->string('code');
            $table->integer('create_by')->length(10);
            $table->string('create_by_name')->length(80);
            $table->boolean('gender')->default(false);
            $table->boolean('enabled')->default(true);
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
