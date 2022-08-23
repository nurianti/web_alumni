<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_tbls', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('gender');
            $table->string('agama');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_hp');
            $table->foreignId('fakultas_id');
            $table->foreignId('prodi_id');
            $table->integer('tahun_lulus');
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
        Schema::dropIfExists('alumni_tbls');
    }
}
