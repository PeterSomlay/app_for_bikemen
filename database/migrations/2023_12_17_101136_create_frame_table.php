<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frame', function (Blueprint $table) {
            $table->id('frame_id');
            $table->string('frame_name');
            $table->string('frame_color');
            $table->string('frame_number');
            $table->string('frame_seatpost_size');
            $table->string('frame_bottom_bracket');
            $table->string('frame_front_tube');
            $table->string('frame_bearings_1');
            $table->string('frame_bearings_2');
            $table->string('frame_bearings_3');
            $table->string('frame_bearings_4');
            $table->string('frame_bearings_5');
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
        Schema::dropIfExists('frame');
    }
}
