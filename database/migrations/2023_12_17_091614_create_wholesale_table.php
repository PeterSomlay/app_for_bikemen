<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWholesaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesale', function (Blueprint $table) {
            $table->id('wholesale_id');
            $table->string('wholesale_company');
            $table->string('wholesale_contact_1');
            $table->string('wholesale_contact_2');
            $table->string('wholesale_contact_3');
            $table->string('wholesale_website');
            $table->string('wholesale_username');
            $table->string('wholesale_password');
            $table->string('wholesale_mobile');
            $table->string('wholesale_email');
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
        Schema::dropIfExists('wholesale');
    }
}
