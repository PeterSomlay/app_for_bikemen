<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountant', function (Blueprint $table) {
            $table->id('accountant_id');
            $table->integer('accountant_year');
            $table->string('accountant_period');
            $table->string('accountant_mounth_number');
            $table->bigInteger('accountant_day_number');
            $table->date('accountant_date');
            $table->bigInteger('accountant_voucher_number');
            $table->string('accountant_name');
            $table->bigInteger('accountant_income');
            $table->bigInteger('accountant_expense');
            $table->bigInteger('accountant_balance');
            $table->bigInteger('accountant_card');
            $table->bigInteger('accountant_all');
            $table->bigInteger('accountant_traffic');
            $table->bigInteger('accountant_open_cassa');
            $table->bigInteger('accountant_closed_cassa');
            $table->string('accountant_firm');
            $table->string('accountant_sign');
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
        Schema::dropIfExists('accountant');
    }
}
