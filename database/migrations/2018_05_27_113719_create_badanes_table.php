<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badanes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insurance_id')->index();
            // four silandr
            $table->float('lfsl_20')->unsigned()->nullable();
            $table->float('lfsm_20')->unsigned()->nullable();
            $table->float('lfsm_50')->unsigned()->nullable();
            $table->float('lfsm_100')->unsigned()->nullable();
            //greater than four silandr
            $table->float('gfsl_20')->unsigned()->nullable();
            $table->float('gfsm_20')->unsigned()->nullable();
            $table->float('gfsm_50')->unsigned()->nullable();
            $table->float('gfsm_100')->unsigned()->nullable();
            //taxi and edu purposes
            $table->float('taxi_keraye')->unsigned()->nullable();
            $table->float('edu_azhans_khaty')->unsigned()->nullable();
            // off year
            $table->float('off_1')->unsigned()->nullable();
            $table->float('off_2')->unsigned()->nullable();
            $table->float('off_3')->unsigned()->nullable();
            $table->float('off_4')->unsigned()->nullable();
            $table->float('off_5')->unsigned()->nullable();
            $table->float('off_6')->unsigned()->nullable();
            $table->float('off_7')->unsigned()->nullable();
            $table->float('off_m_7')->unsigned()->nullable();
            //production year
            $table->float('yearl_5')->unsigned()->nullable(); //production year nerkh lowe than 5 year
            $table->float('year_510')->unsigned()->nullable(); //production year nerkh between 5 and 10 year
            $table->float('yearm_10')->unsigned()->nullable();//production year nerkh after 10 year
            //pusheshe takmily
            $table->float('asid')->unsigned()->nullable();
            $table->float('shishe')->unsigned()->nullable();
            $table->float('seil_va_zelzele')->unsigned()->nullable();
            $table->float('serghat_dar_ja')->unsigned()->nullable();
            $table->float('p_navasanat')->unsigned()->nullable();
            $table->float('ayyab_zahab')->unsigned()->nullable();
            //sayer
            $table->float('varedat')->unsigned()->nullable();
            $table->float('hesab_boland_moddat')->unsigned()->nullable();
            $table->float('life_insurance')->unsigned()->nullable();
            $table->float('new')->unsigned()->nullable();
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
        Schema::dropIfExists('badanes');
    }
}
