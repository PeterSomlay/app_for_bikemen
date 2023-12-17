<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year', function (Blueprint $table) {
            $table->id('year_id');
            $table->integer('year');
            $table->date('year_date');
            $table->string('year_day');
            $table->bigInteger('year_all');
            $table->bigInteger('year_card');
            $table->bigInteger('year_clear_cash');
            $table->bigInteger('year_other');
            $table->bigInteger('year_workprice');
            $table->bigInteger('year_workparts');
            $table->bigInteger('year_parts');
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
        Schema::dropIfExists('year');
    }
}
