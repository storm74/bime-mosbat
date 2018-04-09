<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalCarListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_car_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('car_category_id')->index();
            $table->integer('pps');
            $table->integer('lfs');
            $table->integer('gfs');
            $table->integer('ofs');
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
        Schema::dropIfExists('personal_car_lists');
    }
}
