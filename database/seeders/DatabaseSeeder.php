<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumni;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Post;
use App\Models\User;
use App\Models\Pekerjaan;
use App\Models\Tracerstudy;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Alumni::create([
            'id' => '1',
            'id_user' => '1',
            'nim' => '180102019',
            'nama' => 'Nuri Nurianti',
            'gender' => 'Perempuan',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '1998-11-29',
            'no_hp' => '081224027615',
            'alamat' => 'Majalaya, Kab.Bandung',
            'fakultas_id' => '1',
            'prodi_id' => '1',
            'jenjang' => 'S1',
            'tahun_masuk' => '2018',
            'tahun_lulus' => '2022',
            'ipk' => '3.50',
            'organisasi' => 'HIMA dan UKM',
            'foto' => 'foto.jpeg'
        ]);

        Tracerstudy::create([
            'alumni_id' => '1',
            'kegiatan_stlh_lulus' => 'Bekerja',
            'nama_perusahaan' => 'PT. Teknologi Indonesia',
            'jabatan' => 'Programmer',
            'alamat_kantor' => 'jl. Soekarno-Hatta No.04',
            'tahun_bekerja' => '2022',
            'nama_pt' => 'Universitas Muhammadiyah Bandung',
            'jenjang' => 'S2',
            'fakultas' => 'Sains Dan Teknologi',
            'prodi' => 'Teknik Informatika',
            'tahun_masuk' => '2022',
            'tahun_lulus' => '-',
            'nama_usaha' => 'Sigmawi',
            'bidang_usaha' => 'fashion',
            'alamat_usaha' => 'Majalaya Kab.bandung',
            'tahun_usaha' => '2021',
            'jabatan' => 'Web Programmer',
            'relevansi' => 'sesuai',
            'saran_masukan' => 'semoga lebih baik'
        ]);

        Fakultas::create([
            'kode_fakultas' => 'FST01',
            'nama_fakultas' => 'Fakultas Sains dan Teknologi'
        ]);

        Fakultas::create([
            'kode_fakultas' => 'FSH02',
            'nama_fakultas' => 'Fakultas Sosial Humaniora'
        ]);

        Fakultas::create([
            'kode_fakultas' => 'FEB03',
            'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'
        ]);

        Fakultas::create([
            'kode_fakultas' => 'FAI04',
            'nama_fakultas' => 'Fakultas Agama Islam'
        ]);

        Prodi::create([
            'kode_prodi' => 'TE01',
            'fakultas_id' => '1',
            'nama_prodi' => 'Teknik Elektro',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'IF02',
            'fakultas_id' => '1',
            'nama_prodi' => 'Teknik Informatika',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'TI03',
            'fakultas_id' => '1',
            'nama_prodi' => 'Teknik Industri',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'TPH04',
            'fakultas_id' => '1',
            'nama_prodi' => 'Teknik Pangan Halal',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'BIO05',
            'fakultas_id' => '1',
            'nama_prodi' => 'Bioteknologi',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'FAR06',
            'fakultas_id' => '1',
            'nama_prodi' => 'Farmasi',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'AGR07',
            'fakultas_id' => '1',
            'nama_prodi' => 'Agribisnis',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'AP08',
            'fakultas_id' => '2',
            'nama_prodi' => 'Administrasi Publik',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'ILKOM09',
            'fakultas_id' => '2',
            'nama_prodi' => 'Ilmu Komunikasi',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'KTF10',
            'fakultas_id' => '2',
            'nama_prodi' => 'Kriya Tekstil dan Fashion',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'PSI11',
            'fakultas_id' => '2',
            'nama_prodi' => 'Psikologi',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'AKT12',
            'fakultas_id' => '3',
            'nama_prodi' => 'Akuntansi',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'MAN13',
            'fakultas_id' => '3',
            'nama_prodi' => 'Manajemen',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'PAI14',
            'fakultas_id' => '4',
            'nama_prodi' => 'Pendidikan Agama Islam',
            'jenjang' => 'S1'
        ]);

        Prodi::create([
            'kode_prodi' => 'EKSYAR15',
            'fakultas_id' => '4',
            'nama_prodi' => 'Ekonomi Syariah',
            'jenjang' => 'S1'
        ]);

        Post::create([
            'title' => 'Judul ke satu',
            'slug' => 'judul-ke-satu',
            'excerpt' => 'ini isi dari postingan ke satu bla bla bla bla',
            'body' => 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ]);

        User::create([
            'id' => '1',
            'name' => 'Nuri Nurianti',
            'username' => '180102019',
            'email' => 'nurinurianti@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
        ]);

        Pekerjaan::create([
            'id' => '1',
            'alumni_id' => '1',
            'memiliki_pekerjaan' => 'Ya',
            'nama_instansi' => 'PT. Teknologi',
            'bulan_bekerja' => 'juni',
            'tahun_bekerja' => '2021',
            'jenis_instansi' => 'BUMN',
            'info_pekerjaan' => 'teman',
            'gaji' => '1.000.000,00 - Rp 2.500.000,00',
            'nama_perusahaan_sebelumnya' => 'PT. Cyberlab',
            'mulai_kerja' => 'Mei, 2019',
            'alasan_keluar' => 'Lokasi juah dari rumah'
        ]);

    }
}
