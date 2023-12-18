<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEShifterIdToWorksheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('worksheet', function (Blueprint $table) {
            $table->unsignedBigInteger('e_shifter_id')->nulllable()->after('fork_id');
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
            $table->dropColumn('e_shifter_id');
        });
    }
}
