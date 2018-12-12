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
            $table->string('email');
            $table->string('fullname')->nullable();
            $table->string('taxcode')->nullable();
            $table->enum('kiwisaver',['Yes','No'])->default('No');
            $table->enum('studentloan',['Yes','No'])->default('No');

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
