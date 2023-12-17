<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_years', function (Blueprint $table) {
            $table->id('last_year_id');
            $table->bigInteger('year');
            $table->bigInteger('january');
            $table->bigInteger('february');
            $table->bigInteger('march');
            $table->bigInteger('april');
            $table->bigInteger('may');
            $table->bigInteger('june');
            $table->bigInteger('july');
            $table->bigInteger('august');
            $table->bigInteger('september');
            $table->bigInteger('october');
            $table->bigInteger('november');
            $table->bigInteger('december');
            $table->bigInteger('last_year_all');
            $table->bigInteger('last_year_avarange');
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
        Schema::dropIfExists('last_years');
    }
}
