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
            $table->bigInteger('lfs')->unsigned()->nullable();
            $table->bigInteger('g4s')->unsigned()->nullable();
            $table->bigInteger('o4s')->unsigned()->nullable();
            $table->bigInteger('pps')->unsigned()->nullable();
            $table->bigInteger('bl_1')->unsigned()->nullable();
            $table->bigInteger('b_13')->unsigned()->nullable();
            $table->bigInteger('b_35')->unsigned()->nullable();
            $table->bigInteger('b_510')->unsigned()->nullable();
            $table->bigInteger('b_1020')->unsigned()->nullable();
            $table->bigInteger('b_m20')->unsigned()->nullable();
            $table->integer('b_enf')->unsigned()->nullable();
            $table->integer('b_s_g')->unsigned()->nullable();
            $table->integer('t_in')->unsigned()->nullable();
            $table->integer('t_out')->unsigned()->nullable();
            $table->integer('edu')->unsigned()->nullable();
            $table->integer('sakhtm_15')->unsigned()->nullable();
            $table->integer('sakhtm_20')->unsigned()->nullable();
	        $table->bigInteger('tr_7')->unsigned()->nullable();
	        $table->bigInteger('tr_9')->unsigned()->nullable();
	        $table->bigInteger('tr_10')->unsigned()->nullable();
	        $table->integer('off_1')->unsigned()->nullable();
	        $table->integer('off_2')->unsigned()->nullable();
	        $table->integer('off_3')->unsigned()->nullable();
	        $table->integer('off_4')->unsigned()->nullable();
	        $table->integer('off_5')->unsigned()->nullable();
	        $table->integer('off_6')->unsigned()->nullable();
	        $table->integer('off_7')->unsigned()->nullable();
	        $table->integer('off_8')->unsigned()->nullable();
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
