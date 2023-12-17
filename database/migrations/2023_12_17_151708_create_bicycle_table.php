<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBicycleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicycle', function (Blueprint $table) {
            $table->id('bicycle_id');
            $table->unsignedBigInteger('frame_id');
            $table->unsignedBigInteger('fork_id');
            $table->unsignedBigInteger('discbrake_id');
            $table->unsignedBigInteger('wheel_id');
            $table->unsignedBigInteger('rear_shock_id');
            $table->unsignedBigInteger('e_motor_id');
            $table->unsignedBigInteger('e_shifter_id');
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
        Schema::dropIfExists('bicycle');
    }
}
