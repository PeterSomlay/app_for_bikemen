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
            $table->biginteger('accountant_day_number');
            $table->date('accountant_date');
            $table->biginteger('accountant_voucher_number');
            $table->string('accountant_name');
            $table->biginteger('accountant_income');
            $table->biginteger('accountant_expense');
            $table->biginteger('accountant_balance');
            $table->biginteger('accountant_card');
            $table->biginteger('accountant_all');
            $table->biginteger('accountant_traffic');
            $table->biginteger('accountant_open_cassa');
            $table->biginteger('accountant_closed_cassa');
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
