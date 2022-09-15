<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_families', function (Blueprint $table) {
            $table->id();
            $table->string('couple');
            $table->string('jns_klmn');
            $table->string('tmpt_lhr');
            $table->string('tgl_lhr');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('anak1')->nullable();
            $table->string('jns_klmn_anak1')->nullable();
            $table->string('tmpt_lhr_anak1')->nullable();
            $table->string('tgl_lhr_anak1')->nullable();
            $table->string('pendidikan_anak1')->nullable();
            $table->string('pekerjaan_anak1')->nullable();
            $table->string('anak2')->nullable();
            $table->string('jns_klmn_anak2')->nullable();
            $table->string('tmpt_lhr_anak2')->nullable();
            $table->string('tgl_lhr_anak2')->nullable();
            $table->string('pendidikan_anak2')->nullable();
            $table->string('pekerjaan_anak2')->nullable();
            $table->string('anak3')->nullable();
            $table->string('jns_klmn_anak3')->nullable();
            $table->string('tmpt_lhr_anak3')->nullable();
            $table->string('tgl_lhr_anak3')->nullable();
            $table->string('pendidikan_anak3')->nullable();
            $table->string('pekerjaan_anak3')->nullable();
            $table->string('anak4')->nullable();
            $table->string('jns_klmn_anak4')->nullable();
            $table->string('tmpt_lhr_anak4')->nullable();
            $table->string('tgl_lhr_anak4')->nullable();
            $table->string('pendidikan_anak4')->nullable();
            $table->string('pekerjaan_anak4')->nullable();
            $table->string('anak5')->nullable();
            $table->string('jns_klmn_anak5')->nullable();
            $table->string('tmpt_lhr_anak5')->nullable();
            $table->string('tgl_lhr_anak5')->nullable();
            $table->string('pendidikan_anak5')->nullable();
            $table->string('pekerjaan_anak5')->nullable();
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
        Schema::dropIfExists('core_families');
    }
}
