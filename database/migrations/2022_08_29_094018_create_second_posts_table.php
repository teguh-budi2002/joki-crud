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
            $table->string('tempat');
            $table->string('tgl_lahir');
            $table->string('gender');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('ibu');
            $table->string('tempat_ibu');
            $table->string('tgl_lahir_ibu');
            $table->string('gender_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('anak1')->nullable();
            $table->string('gender_anak1')->nullable();
            $table->string('tempat_anak1')->nullable();
            $table->string('tgl_lahir_anak1')->nullable();
            $table->string('pendidikan_anak1')->nullable();
            $table->string('pekerjaan_anak1')->nullable();
            $table->string('anak2')->nullable();
            $table->string('gender_anak2')->nullable();
            $table->string('tempat_anak2')->nullable();
            $table->string('tgl_lahir_anak2')->nullable();
            $table->string('pendidikan_anak2')->nullable();
            $table->string('pekerjaan_anak2')->nullable();
            $table->string('anak3')->nullable();
            $table->string('gender_anak3')->nullable();
            $table->string('tempat_anak3')->nullable();
            $table->string('tgl_lahir_anak3')->nullable();
            $table->string('pendidikan_anak3')->nullable();
            $table->string('pekerjaan_anak3')->nullable();
            $table->string('anak4')->nullable();
            $table->string('gender_anak4')->nullable();
            $table->string('tempat_anak4')->nullable();
            $table->string('tgl_lahir_anak4')->nullable();
            $table->string('pendidikan_anak4')->nullable();
            $table->string('pekerjaan_anak4')->nullable();
            $table->string('anak5')->nullable();
            $table->string('gender_anak5')->nullable();
            $table->string('tempat_anak5')->nullable();
            $table->string('tgl_lahir_anak5')->nullable();
            $table->string('pendidikan_anak5')->nullable();
            $table->string('pekerjaan_anak5')->nullable();
            $table->string('anak6')->nullable();
            $table->string('gender_anak6')->nullable();
            $table->string('tempat_anak6')->nullable();
            $table->string('tgl_lahir_anak6')->nullable();
            $table->string('pendidikan_anak6')->nullable();
            $table->string('pekerjaan_anak6')->nullable();
            $table->string('anak7')->nullable();
            $table->string('gender_anak7')->nullable();
            $table->string('tempat_anak7')->nullable();
            $table->string('tgl_lahir_anak7')->nullable();
            $table->string('pendidikan_anak7')->nullable();
            $table->string('pekerjaan_anak7')->nullable();
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
