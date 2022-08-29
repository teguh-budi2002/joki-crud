<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('anak1');
            $table->string('anak2');
            $table->string('anak3');
            $table->string('anak4');
            $table->string('anak5');
            $table->string('anak6');
            $table->string('anak7');
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
        Schema::dropIfExists('second_posts');
    }
}
