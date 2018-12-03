<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nickname')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('fullname')->nullable();
            $table->string('taxcode')->nullable();
            $table->string('kiwisaver')->nullable();
            $table->string('studentloan')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff');
    }
}
