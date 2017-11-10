<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('method', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->timestamps();
        });

        Schema::table('concentration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('classification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short');
            $table->timestamps();
        });

        Schema::table('manufacturer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
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
        Schema::dropIfExists('method');
        Schema::dropIfExists('concentration');
        Schema::dropIfExists('classification');
        Schema::dropIfExists('manufacturer');
    }
}
