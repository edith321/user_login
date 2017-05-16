<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToTableMyUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('myUsers', function (Blueprint $table) {
            $table->string('surname');
            $table->string('number', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('myUsers', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('number');
        });
    }
}

