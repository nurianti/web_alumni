<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->unique();
            $table->string('pertanyaan_satu');
            $table->string('pertanyaan_dua');
            $table->string('pertanyaan_tiga');
            $table->string('pertanyaan_empat');
            $table->string('integritas');
            $table->string('keahlian');
            $table->string('bahasa');
            $table->string('teknologi');
            $table->string('komunikasi');
            $table->string('kerjasama');
            $table->string('pengembangan_diri');
            $table->string('pertanyaan_lima');
            $table->string('pertanyaan_enam');
            $table->string('pertanyaan_tujuh');
            $table->string('pertanyaan_delapan');
            $table->string('pertanyaan_sembilan');
            $table->string('pertanyaan_sepuluh');
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
        Schema::dropIfExists('kuesioners');
    }
}
