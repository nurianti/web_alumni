@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Detail Pekerjaan Alumni</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr class="text-center">
                                        <td colspan="3"><h4><b>DATA DIRI</b></h4></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4"><img src="{{ asset('storage/' . $pekerjaan->alumni->foto) }}" width="120" height="150" alt="{{ $pekerjaan->alumni->foto }}"></td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Nama</th>
                                        <td>{{ $pekerjaan->alumni->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">NIM</th>
                                        <td>{{ $pekerjaan->alumni->nim }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Jenis Kelamin</th>
                                        <td>{{ $pekerjaan->alumni->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat & Tanggal Lahir</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->tempat_lahir }}, {{ $pekerjaan->alumni->tgl_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">No Handphone</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alamat</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Fakultas</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->fakultas->nama_fakultas }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Program Studi</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->prodi->nama_prodi }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Jenjang</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->jenjang }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Jenjang</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->jenjang }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Tahun Masuk</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->tahun_masuk }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Tahun Lulus</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->tahun_lulus }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">IPK</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->ipk }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Organisasi</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->organisasi }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="3"><h4><b>RIWAYAT PEKERJAAN</b></h4></td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Apakah memiliki pekerjaan setelah Lulus</th>
                                        <td colspan="2">{{ $pekerjaan->memiliki_pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Nama instansi pekerjaan sekarang</th>
                                        <td colspan="2">{{ $pekerjaan->nama_instansi }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Bulan & Tahun Mulai Bekerja</th>
                                        <td colspan="2">{{ $pekerjaan->bulan_bekerja }}, {{ $pekerjaan->tahun_bekerja }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Jenis Instansi / Bidang Industri</th>
                                        <td colspan="2">{{ $pekerjaan->jenis_instansi }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Info mendapatkan pekerjaan </th>
                                        <td colspan="2">{{ $pekerjaan->info_pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Kisaran pendapatan per bulan</th>
                                        <td colspan="2">{{ $pekerjaan->gaji }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Nama instansi tempat bekerja sebelumnya</th>
                                        <td colspan="2">{{ $pekerjaan->nama_perusahaan_sebelumnya }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Bulan & Tahun Mulai Bekerja</th>
                                        <td colspan="2">{{ $pekerjaan->mulai_kerja }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="3"><h4><b>RELEVANSI KEILMUAN, KOMPETENSI, DAN PENGALAMAN</b></h4></td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Apakah pekerjaan Saudara yang terakhir/sekarang sesuai dengan bidang ilmu yang telah ditempuh di UM Bandung?</th>
                                        <td colspan="2">{{ $pekerjaan->alumni->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alasan Keluar Pekerjaan</th>
                                        <td colspan="2">{{ $pekerjaan->alasan_keluar }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>


        </div>
    <script>
        function previewImage(){
            const foto = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(foto.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection