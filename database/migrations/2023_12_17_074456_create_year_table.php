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
            $table->biginteger('year_all');
            $table->biginteger('year_card');
            $table->biginteger('year_clear_cash');
            $table->biginteger('year_other');
            $table->biginteger('year_workprice');
            $table->biginteger('year_workparts');
            $table->biginteger('year_parts');
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
