<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insurance_id')->index();
            $table->float('base',10,6)->nullable();
            $table->float('eb',10,6)->nullable();
            $table->float('ef',10,6)->nullable();
            $table->float('tl',10,6)->nullable();
            $table->float('nz',10,6)->nullable();
            $table->float('shm5',10,6)->nullable();
            $table->float('shl5',10,6)->nullable();
            $table->float('storm',10,6)->nullable();
            $table->float('flood',10,6)->nullable();
            $table->float('s_va_sh',10,6)->nullable();
            $table->float('rain',10,6)->nullable();
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
        Schema::dropIfExists('fires');
    }
}
