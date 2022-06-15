<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $b) {
            $b->id();
            $b->string('email',80)->unique();
            $b->string('first_name',50);
            $b->string('last_name',50)->nullable();
            $b->string('city', 150)->nullable();
            $b->string('address', 150)->nullable();
            $b->string('password', 200);
            $b->string('token', 630)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}