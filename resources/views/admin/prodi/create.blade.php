@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Fakultas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>

      <div class="card-body">
             
        <form method="post" action="/admin/fakultas">
        {{ csrf_field() }}
            <div class="mb-3">
                <label for="kode_fakultas" class="form-label">Kode Fakultas</label>
                <input type="text" name="kode_fakultas" class="form-control" id="kode_fakultas" value="{{ old('kode_fakultas') }}">
                @if($errors->has('kode_fakultas'))
                <div class="text-danger">
                    {{ $errors->first('kode_fakultas')}}
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
                <input type="text" name="nama_fakultas" class="form-control" id="nama_fakultas" value="{{ old('nama_fakultas') }}">
                @if($errors->has('nama_fakultas'))
                <div class="text-danger">
                    {{ $errors->first('nama_fakultas')}}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection