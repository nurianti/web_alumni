@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Alumni</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>
    
      <form method="post" action="/admin/alumni/{{ $alumni->id }}" enctype="multipart/form-data">

        <!--{{ csrf_field() }} 
        {{ method_field('PUT') }}-->
        @method('put') 
        @csrf

        <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" value="{{ old('nim', $alumni->nim) }}">
                    
                    @if($errors->has('nim'))
                    <div class="text-danger">
                        {{ $errors->first('nim')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $alumni->nama) }}">
                    
                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki - laki" >
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

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" name="agama" class="form-control" id="agama" value="{{ old('agama', $alumni->agama) }}">
                    
                    @if($errors->has('agama'))
                    <div class="text-danger">
                        {{ $errors->first('agama')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ old('tempat_lahir', $alumni->tempat_lahir) }}">
                    
                    @if($errors->has('tempat_lahir'))
                    <div class="text-danger">
                        {{ $errors->first('tempat_lahir')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ old('tgl_lahir', $alumni->tgl_lahir) }}">
                    
                    @if($errors->has('tgl_lahir'))
                    <div class="text-danger">
                        {{ $errors->first('tgl_lahir')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat">{{ old('alamat', $alumni->alamat) }}</textarea>
                    
                    @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp', $alumni->no_hp) }}">
                    
                    @if($errors->has('no_hp'))
                    <div class="text-danger">
                        {{ $errors->first('no_hp')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="fakultas_id" class="form-label">Fakultas</label>
                    <select name="fakultas_id" class="form-select" aria-label="Default select example">
                    @foreach ($fakultas as $fakultas)
                        @if(old('fakultas_id', $alumni->fakultas_id) == $fakultas->id)
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

                <div class="mb-3">
                    <label for="prodi_id" class="form-label">Program Studi</label>
                    <select name="prodi_id" class="form-select" aria-label="Default select example">
                    @foreach ($prodis as $prodi)
                        @if(old('prodi_id', $alumni->prodi_id) == $prodi->id)
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

                <div class="mb-3">
                    <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                    <input type="text" name="tahun_masuk" class="form-control" id="tahun_masuk" value="{{ old('tahun_masuk', $alumni->tahun_masuk) }}">
                    
                    @if($errors->has('tahun_masuk'))
                    <div class="text-danger">
                        {{ $errors->first('tahun_masuk')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" value="{{ old('tahun_lulus', $alumni->tahun_lulus) }}">
                    
                    @if($errors->has('tahun_lulus'))
                    <div class="text-danger">
                        {{ $errors->first('tahun_lulus')}}
                    </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input type="hidden" name="oldImage" value="{{ $alumni->foto }}">
                    @if($alumni->foto)
                        <img src="{{ asset('storage/' . $alumni->foto) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-2">
                    @endif
                    <input name="foto" class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" onchange="previewImage()">
                    
                    @if($errors->has('foto'))
                    <div class="text-danger">
                        {{ $errors->first('foto')}}
                    </div>
                    @endif
                </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Edit">
        </div>

        </form>
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