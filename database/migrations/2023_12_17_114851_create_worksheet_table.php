<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksheet', function (Blueprint $table) {
            $table->id('work_id');
            $table->unsignedBigInteger('worksheet_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('mechanic_id');
            $table->unsignedBigInteger('customer_parts_id');
            $table->date('bring_date');
            $table->date('promise_date');
            $table->text('errors_description');
            $table->unsignedBigInteger('repair_id');
            $table->unsignedBigInteger('expert_report_id');
            $table->unsignedBigInteger('fork_id');
            $table->unsignedBigInteger('rear_shock_id');
            $table->unsignedBigInteger('frame_id');
            $table->unsignedBigInteger('wheel_id');
            $table->string('status_w');
            $table->integer('general');
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
        Schema::dropIfExists('worksheet');
    }
}
