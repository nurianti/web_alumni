<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('kontak_instansi');
            $table->string('email_instansi');
            $table->string('sektor_instansi');
            $table->foreignId('alumni_id')->unique();
            $table->string('bidang_kerja_alumni');
            $table->string('jabatan_alumni');
            $table->string('nama_responden');
            $table->string('kontak_responden');
            $table->string('email_responden');
            $table->string('jabatan_responden');
            $table->string('lama_kerjasama');
            $table->string('integritas');
            $table->string('keahlian');
            $table->string('bahasa');
            $table->string('teknologi');
            $table->string('komunikasi');
            $table->string('kerjasama');
            $table->string('pengembangan_diri');
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
        Schema::dropIfExists('perusahaans');
    }
}
