<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('pzs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producer');
            $table->string('invoice');
            $table->date('start_date');
            $table->integer('user_id');
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
            Schema::dropIfExists('pzs');
    }
}
