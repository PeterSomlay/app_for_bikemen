<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBicycleIdToWorksheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('worksheet', function (Blueprint $table) {
            $table->unsignedBigInteger('bicycle_id')->nulllable()->after('frame_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worksheet', function (Blueprint $table) {
            $table->dropColumn('bicycle_id');
        });
    }
}
