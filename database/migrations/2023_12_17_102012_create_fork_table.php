<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fork', function (Blueprint $table) {
            $table->id('fork_id');
            $table->string('fork_name');
            $table->string('fork_color');
            $table->string('fork_number');
            $table->string('fork_positive_pressure');
            $table->string('fork_negative_pressure');
            $table->string('fork_extra_pressure');
            $table->string('fork_low_compression');
            $table->string('fork_high_compression');
            $table->string('fork_low_rebound');
            $table->string('fork_high_rebound');
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
        Schema::dropIfExists('fork');
    }
}
