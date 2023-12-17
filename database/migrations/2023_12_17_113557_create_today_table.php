<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('today', function (Blueprint $table) {
            $table->id('today_id');
            $table->date('today_date');
            $table->string('today_comment');
            $table->biginteger('today_work');
            $table->biginteger('today_parts');
            $table->biginteger('today_parts_price');
            $table->biginteger('today_parts_piece');
            $table->biginteger('today_all_price');
            $table->string('today_card');
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
        Schema::dropIfExists('today');
    }
}
