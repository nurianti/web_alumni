@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Prodi</h1>
      </div>

      <div class="card-body">
             
        <form method="post" action="/admin/prodi/{{ $prodi->id }}">
        @method('put') 
        @csrf
            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Program Studi</label>
                <input type="text" name="kode_prodi" class="form-control" id="kode_prodi" value="{{ old('kode_prodi', $prodi->kode_prodi) }}">
                @if($errors->has('kode_prodi'))
                <div class="text-danger">
                    {{ $errors->first('kode_prodi')}}
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
                <label for="nama_prodi" class="form-label">Nama Program Studi</label>
                <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" value="{{ old('nama_prodi', $prodi->nama_prodi) }}">
                @if($errors->has('nama_prodi'))
                <div class="text-danger">
                    {{ $errors->first('nama_prodi')}}
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                <input type="text" name="jenjang" class="form-control" id="jenjang" value="{{ old('jenjang', $prodi->jenjang) }}">
                @if($errors->has('jenjang'))
                <div class="text-danger">
                    {{ $errors->first('jenjang')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection