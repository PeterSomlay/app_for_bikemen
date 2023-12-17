<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlueCassaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blue_cassa', function (Blueprint $table) {
            $table->id('blue_cassa_id');
            $table->date('blue_cassa_date');
            $table->string('blue_cassa_comment');
            $table->biginteger('blue_cassa_price');
            $table->string('blue_cassa_exp_rev');
            $table->biginteger('blue_cassa_in');
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
        Schema::dropIfExists('blue_cassa');
    }
}
