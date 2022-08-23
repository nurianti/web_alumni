@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Data Alumni</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
        @method('put') 
        @csrf
          <thead>
            <tr>
                <td rowspan="4"><img src="{{ asset('storage/' . $alumni->foto) }}" alt="{{ $alumni->foto }}"></td>
                <th>NIM</th>
                <td>{{ $alumni->nim }}</td>
            </tr>
            <tr>
                <th>NAMA</th>
                <td>{{ $alumni->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $alumni->gender }}</td>
            </tr>
            <tr>
                <th>AGAMA</th>
                <td>{{ $alumni->agama }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td colspan="2">Bandung, 29 November 1998</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td colspan="2">Bandung, 29 November 1998</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td colspan="2">Bandung, 29 November 1998</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td colspan="2">Bandung, 29 November 1998</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td colspan="2">Bandung, 29 November 1998</td>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
@endsection