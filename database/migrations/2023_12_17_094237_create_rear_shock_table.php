<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRearShockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rear_shock', function (Blueprint $table) {
            $table->id('rear_shock_id');
            $table->string('rear_shock_name');
            $table->string('rear_shock_number');
            $table->integer('rear_shock_positive_pressure');
            $table->integer('rear_shock_negative_pressure');
            $table->integer('rear_shock_low_compression');
            $table->integer('rear_shock_high_compression');
            $table->integer('rear_shock_low_rebound');
            $table->integer('rear_shock_high_rebound');
            $table->integer('rear_shock_eyelet');
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
        Schema::dropIfExists('rear_shock');
    }
}
