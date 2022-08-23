@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Tracer Study</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>

      @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
      @endif

      <div class="table-responsive">
      <a href="/admin/tracerstudy/create" class="btn btn-primary">Input Data Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Nama</th>
              <th scope="col">Kegiatan Setelah Lulus</th>
              <th scope="col">Nama Perusahaan</th>
              <th scope="col">Nama Perguruan Tinggi</th>
              <th scope="col">Nama Usaha</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tracerstudy as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                         <img src="{{ asset('storage/' . $p->alumni->foto) }}" width="80" height="80" alt="{{ $p->alumni->foto }}">
                    </td>
                    <td>{{ $p->alumni->nama }}</td>
                    <td>{{ $p->kegiatan_stlh_lulus }}</td>
                    <td>{{ $p->nama_perusahaan }}</td>
                    <td>{{ $p->nama_pt }}</td>
                    <td>{{ $p->nama_usaha }}</td>
                    <td>
                        <a href="/admin/tracerstudy/{{ $p->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/admin/tracerstudy/{{ $p->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/admin/tracerstudy/{{ $p->id }}" method="post" class="d-inline"> 
                          @csrf
                          @method('DELETE')
                          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="trash-2"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection