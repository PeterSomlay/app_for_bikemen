<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscbrakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discbrake', function (Blueprint $table) {
            $table->id('discbrake_id');
            $table->string('discbrake_name');
            $table->string('discbrake_oil');
            $table->string('discbrake_number');
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
        Schema::dropIfExists('discbrake');
    }
}
