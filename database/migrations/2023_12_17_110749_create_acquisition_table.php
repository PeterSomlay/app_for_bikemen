<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcquisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquisition', function (Blueprint $table) {
            $table->id('acquisition_id');
            $table->date('acquisition_date');
            $table->text('acquisition_comment');
            $table->string('acquisition_parts');
            $table->integer('acquisition_piece');
            $table->string('acquisition_username');
            $table->string('acquisition_mobil');
            $table->string('wholesale_id');
            $table->string('acquisition');
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
        Schema::dropIfExists('acquisition');
    }
}
