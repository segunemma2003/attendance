<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFellowsToFellows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::table('fellows', function (Blueprint $table) {
           $table->string('dob');
           $table->string('soo');
           $table->string('lga');
           $table->string('address');
           $table->string('pics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('fellows', function (Blueprint $table) {
           $table->dropColumn('dob');
           $table->dropColumn('soo');
           $table->dropColumn('lga');
           $table->dropColumn('address');
           $table->dropColumn('pics');
        });
    }
}
