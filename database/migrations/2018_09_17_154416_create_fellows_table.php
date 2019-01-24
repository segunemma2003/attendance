<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFellowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fellows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('dob');
            $table->string('soo');
            $table->string('lga');
            $table->string('address');
            $table->string('pics');
            $table->string('qualification')->nullable();
            $table->string('choice');
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
        Schema::dropIfExists('fellows');
    }
}
