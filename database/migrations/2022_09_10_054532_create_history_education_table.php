<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('kota')->nullable();
            $table->string('tahun_mulai')->nullable();
            $table->string('tahun_akhir')->nullable();
            $table->string('sekolah_smp')->nullable();
            $table->string('jurusan_smp')->nullable();
            $table->string('kota_smp')->nullable();
            $table->string('tahun_mulai_smp')->nullable();
            $table->string('tahun_akhir_smp')->nullable();
            $table->string('sekolah_slta')->nullable();
            $table->string('jurusan_slta')->nullable();
            $table->string('kota_slta')->nullable();
            $table->string('tahun_mulai_slta')->nullable();
            $table->string('tahun_akhir_slta')->nullable();
            $table->string('sekolah_d3')->nullable();
            $table->string('jurusan_d3')->nullable();
            $table->string('kota_d3')->nullable();
            $table->string('tahun_mulai_d3')->nullable();
            $table->string('tahun_akhir_d3')->nullable();
            $table->string('sekolah_s1')->nullable();
            $table->string('jurusan_s1')->nullable();
            $table->string('kota_s1')->nullable();
            $table->string('tahun_mulai_s1')->nullable();
            $table->string('tahun_akhir_s1')->nullable();
            $table->string('sekolah_s2')->nullable();
            $table->string('jurusan_s2')->nullable();
            $table->string('kota_s2')->nullable();
            $table->string('tahun_mulai_s2')->nullable();
            $table->string('tahun_akhir_s2')->nullable();
            $table->string('sekolah_s3')->nullable();
            $table->string('jurusan_s3')->nullable();
            $table->string('kota_s3')->nullable();
            $table->string('tahun_mulai_s3')->nullable();
            $table->string('tahun_akhir_s3')->nullable();
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
        Schema::dropIfExists('history_education');
    }
}
