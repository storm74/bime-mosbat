<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdPartyInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_party_insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('lfs')->unsigned();
            $table->bigInteger('g4s')->unsigned();
            $table->bigInteger('o4s')->unsigned();
            $table->bigInteger('pps')->unsigned();
            $table->bigInteger('bl_1')->unsigned();
            $table->bigInteger('b_13')->unsigned();
            $table->bigInteger('b_510')->unsigned();
            $table->bigInteger('b_1020')->unsigned();
            $table->bigInteger('b_m20')->unsigned();
            $table->integer('b_enf')->unsigned();
            $table->integer('b_s_g')->unsigned();
            $table->integer('t_in')->unsigned();
            $table->integer('t_out')->unsigned();
            $table->integer('edu')->unsigned();
            $table->integer('sakhtm_15')->unsigned();
            $table->integer('sakhtm_20')->unsigned();
	        $table->bigInteger('tr_7')->unsigned();
	        $table->bigInteger('tr_9')->unsigned();
	        $table->bigInteger('tr_10')->unsigned();
	        $table->integer('off_1')->unsigned();
	        $table->integer('off_2')->unsigned();
	        $table->integer('off_3')->unsigned();
	        $table->integer('off_4')->unsigned();
	        $table->integer('off_5')->unsigned();
	        $table->integer('off_6')->unsigned();
	        $table->integer('off_7')->unsigned();
	        $table->integer('off_8')->unsigned();
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
        Schema::dropIfExists('third_party_insurances');
    }
}
