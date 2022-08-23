@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Fakultas dan Prodi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="fakultas/create" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span>Add Fakultas</a>
            <a href="prodi/create" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus" class="align-text-bottom"></span>Add Prodi</a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Prodi</th>
              <th scope="col">Jenjang</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($prodis as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_prodi }}</td>
                    <td>{{ $p->jenjang }}</td>
                    <td>{{ $p->fakultas->nama_fakultas }}</td>
                    <td>
                        <a href="/admin/alumni/{{ $p->nim }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/admin/prodi/{{ $p->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection