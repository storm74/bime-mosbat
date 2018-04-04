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
            $table->float('base',10,6);
            $table->float('eb',10,6);
            $table->float('ef',10,6);
            $table->float('tl',10,6);
            $table->float('nz',10,6);
            $table->float('shm5',10,6);
            $table->float('shl5',10,6);
            $table->float('storm',10,6);
            $table->float('flood',10,6);
            $table->float('s_va_sh',10,6);
            $table->float('rain',10,6);
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
