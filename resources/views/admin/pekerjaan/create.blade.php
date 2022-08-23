@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pekerjaan</h4>
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
                    <!-- Column -->
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-10 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="/admin/pekerjaan" enctype="multipart/form-data" class="form-horizontal form-material">
                                {{ csrf_field() }}
                                    <div class="form-group mb-4"> 
                                        <label class="col-sm-14">Nama Alumni</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="alumni_id" class="form-select shadow-none p-0 border-0 form-control-line">
                                            @foreach ($alumni as $alumni)
                                                @if(old('alumni_id') == $alumni->id)
                                                    <option value="{{ $alumni->id }}" selected>{{ $alumni->nama }}</opton>
                                                @else
                                                    <option value="{{ $alumni->id }}">{{ $alumni->nama }}</opton>
                                                @endif
                                            @endforeach    
                                            </select>
                                            @if($errors->has('alumni_id'))
                                            <div class="text-danger">
                                                {{ $errors->first('alumni_id')}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah saudara memiliki pekerjaan setelah lulus dari UMBandung ?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="memiliki_pekerjaan" id="memiliki_pekerjaan" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="memiliki_pekerjaan" id="memiliki_pekerjaan" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                            @if($errors->has('memiliki_pekerjaan'))
                                            <div class="text-danger">
                                                {{ $errors->first('memiliki_pekerjaan')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nama Instansi / Perusahaan sekarang</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nama_instansi" id="nama_instansi" value="{{ old('nama_instansi') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('nama_instansi'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama_instansi')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bulan Bekerja</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="bulan_bekerja" id="bulan_bekerja" value="{{ old('bulan_bekerja') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('bulan_bekerja'))
                                            <div class="text-danger">
                                                {{ $errors->first('bulan_bekerja')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Tahun Bekerja</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="tahun_bekerja" id="tahun_bekerja" value="{{ old('tahun_bekerja') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('tahun_bekerja'))
                                            <div class="text-danger">
                                                {{ $errors->first('tahun_bekerja')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Jenis Instansi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="Wirausaha">
                                            <label class="form-check-label" for="inlineRadio1">Wirausaha</label><br>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="Pemerintah (Pusat/bagian)">
                                            <label class="form-check-label" for="inlineRadio2">Pemerintah (Pusat/Bagian)</label><br>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="Pemerintah (Daerah)">
                                            <label class="form-check-label" for="inlineRadio2">Pemerintah (Daerah))</label><br>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="BUMN">
                                            <label class="form-check-label" for="inlineRadio2">BUMN</label><br>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="Swasta (Jasa)">
                                            <label class="form-check-label" for="inlineRadio2">Swasta (Jasa)</label><br>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_instansi" id="jenis_instansi" value="Lainnya...">
                                            <label class="form-check-label" for="inlineRadio2">Lainnya...</label>
                                        </div>
                                            @if($errors->has('jenis_instansi'))
                                            <div class="text-danger">
                                                {{ $errors->first('jenis_instansi')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Dari manakah Saudara mendapatkan informasi pekerjaan ini?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="info_pekerjaan" id="info_pekerjaan" value="Kampus">
                                            <label class="form-check-label" for="inlineRadio1">Kampus</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="info_pekerjaan" id="info_pekerjaan" value="Keluarga / Saudara">
                                            <label class="form-check-label" for="inlineRadio2">Keluarga / Saudara</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="info_pekerjaan" id="info_pekerjaan" value="Teman / rekan Sejawat">
                                            <label class="form-check-label" for="inlineRadio2">Teman / rekan Sejawat</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="info_pekerjaan" id="info_pekerjaan" value="Media Sosial / Media Kabar">
                                            <label class="form-check-label" for="inlineRadio2">Media Sosial / Media Kabar</label>
                                        </div>
                                            @if($errors->has('info_pekerjaan'))
                                            <div class="text-danger">
                                                {{ $errors->first('info_pekerjaan')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Kisaran Pendapatan perbulan termasuk insentif, tunjangan, bonus, dll </label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gaji" id="gaji" value="< Rp 1.000.000,00">
                                            <label class="form-check-label" for="inlineRadio1">< Rp 1.000.000,00</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gaji" id="gaji" value="Rp 1.000.000,00 - Rp 2.500.000,00">
                                            <label class="form-check-label" for="inlineRadio2">Rp 1.000.000,00 - Rp 2.500.000,00</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gaji" id="gaji" value="Rp 2.600.000,00 – Rp 3.700.000,00">
                                            <label class="form-check-label" for="inlineRadio2">Rp 2.600.000,00 – Rp 3.700.000,00</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gaji" id="gaji" value="Rp 3.700.000,00 – Rp 5.000.000,00">
                                            <label class="form-check-label" for="inlineRadio2">Rp 3.700.000,00 – Rp 5.000.000,00</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gaji" id="gaji" value="> Rp 5.000.000,000">
                                            <label class="form-check-label" for="inlineRadio2">> Rp 5.000.000,00</label>
                                        </div>
                                            @if($errors->has('gaji'))
                                            <div class="text-danger">
                                                {{ $errors->first('gaji')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nama Perusahaan Sebelumnya</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nama_perusahaan_sebelumnya" id="nama_perusahaan_sebelumnya" value="{{ old('nama_perusahaan_sebelumnya') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('nama_perusahaan_sebelumnya'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama_perusahaan_sebelumnya')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bulan dan Tahun mulai bekerja</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="mulai_kerja" id="mulai_kerja" value="{{ old('mulai_kerja') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('mulai_kerja'))
                                            <div class="text-danger">
                                                {{ $errors->first('mulai_kerja')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Alasan Keluar Dari Pekerjaan Sebelumnya</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="alasan_keluar" id="alasan_keluar" value="{{ old('alasan_keluar') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('alasan_keluar'))
                                            <div class="text-danger">
                                                {{ $errors->first('alasan_keluar')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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