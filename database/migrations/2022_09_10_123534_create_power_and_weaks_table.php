<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerAndWeaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_and_weaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->longText('answer1');
            $table->longText('answer2');
            $table->longText('answer3');
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
        Schema::dropIfExists('power_and_weaks');
    }
}
