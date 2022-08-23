@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile</h4>
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
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">User Name</h4>
                                        <h5 class="text-white mt-2">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>556</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="/admin/alumni" enctype="multipart/form-data" class="form-horizontal form-material">
                                {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">NIM</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nim" id="nim" value="{{ old('nim') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('nim'))
                                            <div class="text-danger">
                                                {{ $errors->first('nim')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4"> 
                                        <label class="col-sm-14">id user</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="id_user" class="form-select shadow-none p-0 border-0 form-control-line">
                                            @foreach ($user as $user)
                                                @if(old('id_user') == $user->id)
                                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</opton>
                                                @else
                                                    <option value="{{ $user->id }}">{{ $user->name }}</opton>
                                                @endif
                                            @endforeach    
                                            </select>
                                            @if($errors->has('id_user'))
                                            <div class="text-danger">
                                                {{ $errors->first('id_user')}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nama Lengkap</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Jenis Kelamin</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki - laki">
                                            <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                        </div>
                                            @if($errors->has('gender'))
                                            <div class="text-danger">
                                                {{ $errors->first('gender')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Tempat Lahir</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('tempat_lahir'))
                                            <div class="text-danger">
                                                {{ $errors->first('tempat_lahir')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Tanggal Lahir</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('tgl_lahir'))
                                            <div class="text-danger">
                                                {{ $errors->first('tgl_lahir')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">No HP</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('no_hp'))
                                            <div class="text-danger">
                                                {{ $errors->first('no_hp')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Alamat</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="alamat" id="alamat" rows="5" class="form-control p-0 border-0">{{ old('alamat') }}</textarea>
                                            @if($errors->has('alamat'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Fakultas</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="fakultas_id" class="form-select shadow-none p-0 border-0 form-control-line">
                                            @foreach ($fakultas as $fakultas)
                                                @if(old('fakultas_id') == $fakultas->id)
                                                    <option value="{{ $fakultas->id }}" selected>{{ $fakultas->nama_fakultas }}</opton>
                                                @else
                                                    <option value="{{ $fakultas->id }}">{{ $fakultas->nama_fakultas }}</opton>
                                                @endif
                                            @endforeach    
                                            </select>
                                            @if($errors->has('fakultas_id'))
                                            <div class="text-danger">
                                                {{ $errors->first('fakultas_id')}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Program Studi</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="prodi_id" class="form-select shadow-none p-0 border-0 form-control-line">
                                            @foreach ($prodis as $prodi)
                                                @if(old('prodi_id') == $prodi->id)
                                                    <option value="{{ $prodi->id }}" selected>{{ $prodi->nama_prodi }}</opton>
                                                @else
                                                    <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</opton>
                                                @endif
                                            @endforeach    
                                            </select>
                                            @if($errors->has('prodi_id'))
                                            <div class="text-danger">
                                                {{ $errors->first('prodi_id')}}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Jenjang</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="jenjang" id="jenjang" value="{{ old('jenjang') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('jenjang'))
                                            <div class="text-danger">
                                                {{ $errors->first('jenjang')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Tahun Masuk</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="tahun_masuk" id="tahun_masuk" value="{{ old('tahun_masuk') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('tahun_masuk'))
                                            <div class="text-danger">
                                                {{ $errors->first('tahun_masuk')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Tahun Lulus</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="tahun_lulus" id="tahun_lulus" value="{{ old('tahun_lulus') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('tahun_lulus'))
                                            <div class="text-danger">
                                                {{ $errors->first('tahun_lulus')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">IPK</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ipk" id="ipk" value="{{ old('ipk') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('ipk'))
                                            <div class="text-danger">
                                                {{ $errors->first('ipk')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pengalaman Organisasi</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="organisasi" id="organisasi" value="{{ old('organisasi') }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('organisasi'))
                                            <div class="text-danger">
                                                {{ $errors->first('organisasi')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Foto</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <img class="img-preview img-fluid mb-3 col-sm-2">
                                            <input name="foto" class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" onchange="previewImage()">
                                            @if($errors->has('foto'))
                                            <div class="text-danger">
                                                {{ $errors->first('foto')}}
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