@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">RELEVANSI KEILMUAN, KOMPETENSI, DAN PENGALAMAN</h4>
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
                                <form method="post" action="/admin/kuesioner" enctype="multipart/form-data" class="form-horizontal form-material">
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
                                        <label class="col-md-12 p-0">Apakah pekerjaan Saudara yang terakhir/sekarang sesuai dengan bidang ilmu yang telah ditempuh di UM Bandung?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_satu" id="pertanyaan_satu" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_satu" id="pertanyaan_satu" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                            @if($errors->has('pertanyaan_satu'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_satu')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Seberapa besarkah pengaruh pembelajaran di UM Bandung yang telah Saudara tempuh</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_dua" id="pertanyaan_dua" value="Sangat Berpengaruh">
                                            <label class="form-check-label" for="inlineRadio1">Sangat Berpengaruh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_dua" id="pertanyaan_dua" value="Cukup Berpengaruh">
                                            <label class="form-check-label" for="inlineRadio2">Cukup Berpengaruh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_dua" id="pertanyaan_dua" value="Tidak Berpengaruh">
                                            <label class="form-check-label" for="inlineRadio2">Tidak Berpengaruh</label>
                                        </div>
                                            @if($errors->has('pertanyaan_dua'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_dua')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah Saudara merasa dapat bersaing dengan kompetitor atau lulusan perguruan tinggi lain di tempat Saudara bekerja?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_tiga" id="pertanyaan_tiga" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_tiga" id="pertanyaan_tiga" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                            @if($errors->has('pertanyaan_tiga'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_tiga')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah Saudara mengalami kesulitan menyesuaikan diri di tempat kerja dengan latar belakang ilmu yang Saudara miliki?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_empat" id="pertanyaan_empat" value="Sangat Sulit">
                                            <label class="form-check-label" for="inlineRadio1">Sangat Sulit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_empat" id="pertanyaan_empat" value="Cukup Sulit">
                                            <label class="form-check-label" for="inlineRadio2">Cukup Sulit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pertanyaan_empat" id="pertanyaan_empat" value="Tidak Sulit">
                                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                                        </div>
                                            @if($errors->has('pertanyaan_empat'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_empat')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Menurut penilaian Saudara, sejauh manakah Saudara menguasai kemampuan berikut setelah lulus kuliah?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <table>
                                                <tr>
                                                    <td>Integritas (Etika & Moral)</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="integritas" id="integritas" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="integritas" id="integritas" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="integritas" id="integritas" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="integritas" id="integritas" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('integritas'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('integritas')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Keahlian Berdasarkan Bidang Ilmu</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keahlian" id="keahlian" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keahlian" id="keahlian" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keahlian" id="keahlian" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keahlian" id="keahlian" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('keahlian'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('keahlian')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bahasa Inggris</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('bahasa'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('bahasa')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="teknologi" id="teknologi" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="teknologi" id="teknologi" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="teknologi" id="teknologi" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="teknologi" id="teknologi" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('teknologi'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('teknologi')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Komunikasi</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="komunikasi" id="komunikasi" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="komunikasi" id="komunikasi" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="komunikasi" id="komunikasi" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="komunikasi" id="komunikasi" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('komunikasi'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('komunikasi')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kerjasama Tim</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kerjasama" id="kerjasama" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kerjasama" id="kerjasama" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kerjasama" id="kerjasama" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kerjasama" id="kerjasama" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('kerjasama'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('kerjasama')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengembangan Diri</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pengembangan_diri" id="pengembangan_diri" value="Kurang">
                                                            <label class="form-check-label" for="inlineRadio1">Kurang</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pengembangan_diri" id="pengembangan_diri" value="Cukup">
                                                            <label class="form-check-label" for="inlineRadio1">Cukup</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pengembangan_diri" id="pengembangan_diri" value="Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Baik</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pengembangan_diri" id="pengembangan_diri" value="Sangat Baik">
                                                            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                                                        </div>
                                                        @if($errors->has('pengembangan_diri'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('pengembangan_diri')}}
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Menurut Saudara, kemampuan apakah yang sangat dibutuhkan di tempat bekerja Saudara terakhir/sekarang, selain yang telah disebutkan pada pertanyaan sebelumnya?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="pertanyaan_enam" id="pertanyaan_enam" value="{{ old('pertanyaan_enam') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('pertanyaan_enam'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_enam')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah Saudara puas dengan pekerjaan yang terakhir/sekarang?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_lima" id="pertanyaan_lima" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label><br>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_lima" id="pertanyaan_lima" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label><br>
                                            </div>
                                            @if($errors->has('pertanyaan_lima'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_lima')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah Saudara berminat untuk melanjutkan studi pada jenjang yang lebih tinggi?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_tujuh" id="pertanyaan_tujuh" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label><br>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_tujuh" id="pertanyaan_tujuh" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label><br>
                                            </div>
                                            @if($errors->has('pertanyaan_tujuh'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_tujuh')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah Saudara berencana melanjutkan studi pada jenjang yang lebih tinggi?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_delapan" id="pertanyaan_delapan" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label><br>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_delapan" id="pertanyaan_delapan" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label><br>
                                            </div>
                                            @if($errors->has('pertanyaan_delapan'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_delapan')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Khusus lulusan Farmasi: Apakah Saudara berencana untuk mengikuti program apoteker?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_sembilan" id="pertanyaan_sembilan" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label><br>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pertanyaan_sembilan" id="pertanyaan_sembilan" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label><br>
                                            </div>
                                            @if($errors->has('pertanyaan_sembilan'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_sembilan')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Apakah saran yang Saudara dapat berikan untuk Universitas Muhammadiyah Bandung sehingga alumni dapat mudah memperoleh dan menjalani pekerjaan?</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="pertanyaan_sepuluh" id="pertanyaan_sepuluh" value="{{ old('pertanyaan_sepuluh') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('pertanyaan_sepuluh'))
                                            <div class="text-danger">
                                                {{ $errors->first('pertanyaan_sepuluh')}}
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