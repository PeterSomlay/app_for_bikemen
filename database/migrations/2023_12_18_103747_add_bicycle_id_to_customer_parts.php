<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBicycleIdToCustomerParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_parts', function (Blueprint $table) {
            $table->unsignedBigInteger('bicycle_id')->nulllable()->after('customer_id');
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
            $table->dropColumn('bicycle_id');
        });
    }
}
