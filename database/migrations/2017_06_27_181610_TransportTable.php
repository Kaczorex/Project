<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('address');
            $table->string('car');
            $table->integer('priority');
            $table->integer('time_of_day');
            $table->string('comments');
            $table->integer('driver');
            $table->date('delivry_date');
            $table->string('magazine');
            $table->string('DD');
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
                 Schema::dropIfExists('Transports');
    }
}
