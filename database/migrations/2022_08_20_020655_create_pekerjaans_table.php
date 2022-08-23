<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->unique();
            $table->string('memiliki_pekerjaan');
            $table->string('nama_instansi');
            $table->string('bulan_bekerja');
            $table->string('tahun_bekerja');
            $table->string('jenis_instansi');
            $table->string('info_pekerjaan');
            $table->string('gaji');
            $table->string('nama_perusahaan_sebelumnya');
            $table->string('mulai_kerja');
            $table->string('alasan_keluar');
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
        Schema::dropIfExists('pekerjaans');
    }
}
