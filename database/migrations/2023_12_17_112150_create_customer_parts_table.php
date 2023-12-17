<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_parts', function (Blueprint $table) {
            $table->id('customer_parts_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('frame_id');
            $table->unsignedBigInteger('fork_id');
            $table->unsignedBigInteger('rear_shock_id');
            $table->unsignedBigInteger('wheel_id');
            $table->unsignedBigInteger('e_report_id');
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
        Schema::dropIfExists('customer_parts');
    }
}
