<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToTableAttends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attends', function (Blueprint $table) {
            $table->time('timeout')->nullable();
            $table->date('dateout')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attends', function (Blueprint $table) {
            $table->dropColumn('timeout');
            $table->dropColumn('dateout');
        });
    }
}
