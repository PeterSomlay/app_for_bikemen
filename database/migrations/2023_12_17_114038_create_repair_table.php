<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair', function (Blueprint $table) {
            $table->id('repair_id');
            $table->string('worksheet_number');
            $table->string('user_name');
            $table->string('user_mobile');
            $table->string('user_email');
            $table->string('repair_parts');
            $table->unsignedBigInteger('mechanic_id');
            $table->string('work_status');
            $table->string('call_status');
            $table->date('finish_date');
            $table->bigInteger('all_parts');
            $table->bigInteger('all_work');
            $table->bigInteger('all_price');
            $table->longText('repair_document');
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
        Schema::dropIfExists('repair');
    }
}
