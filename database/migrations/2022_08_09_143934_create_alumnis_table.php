<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->unique();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('gender');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->text('alamat');
            $table->foreignId('fakultas_id');
            $table->foreignId('prodi_id');
            $table->string('jenjang');
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus');
            $table->string('ipk');
            $table->string('organisasi');
            $table->string('foto');
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
        Schema::dropIfExists('alumnis');
    }
}
