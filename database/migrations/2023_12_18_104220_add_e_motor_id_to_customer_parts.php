<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEMotorIdToCustomerParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_parts', function (Blueprint $table) {
            $table->unsignedBigInteger('e_motor_id')->nulllable()->after('rear_shock_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_parts', function (Blueprint $table) {
            $table->dropColumn('e_motor_id');
        });
    }
}
