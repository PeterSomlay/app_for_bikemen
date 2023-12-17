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
            $table->biginteger('year');
            $table->biginteger('january');
            $table->biginteger('february');
            $table->biginteger('march');
            $table->biginteger('april');
            $table->biginteger('may');
            $table->biginteger('june');
            $table->biginteger('july');
            $table->biginteger('august');
            $table->biginteger('september');
            $table->biginteger('october');
            $table->biginteger('november');
            $table->biginteger('december');
            $table->biginteger('last_year_all');
            $table->biginteger('last_year_avarange');
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
