<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_report', function (Blueprint $table) {
            $table->id('expert_report_id');
            $table->unsignedBigInteger('bicycle_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('mechanic_id');
            $table->string('expert_report_damage');
            $table->biginteger('expert_report_fixed_price');
            $table->biginteger('expert_report_fixed_parts_price');
            $table->text('expert_report_comment');
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
        Schema::dropIfExists('expert_report');
    }
}
