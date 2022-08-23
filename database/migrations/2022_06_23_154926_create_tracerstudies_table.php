<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracerstudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracerstudies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->unique();
            $table->string('kegiatan_stlh_lulus');
            #jika bekerja
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('alamat_kantor');
            $table->string('tahun_bekerja');
            #jika melanjutkan pendidikan
            $table->string('nama_pt');
            $table->string('jenjang');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
            #jika berwirausaha
            $table->string('nama_usaha');
            $table->string('bidang_usaha');
            $table->string('alamat_usaha');
            $table->string('tahun_usaha');
            #lainnya
            $table->string('relevansi');
            $table->string('saran_masukan');
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
        Schema::dropIfExists('tracerstudies');
    }
}
