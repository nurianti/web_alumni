@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Alumni</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <a href="/admin/alumni/create" class="btn btn-primary">New Data</a>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">NIM</th>
                                            <th class="border-top-0">L/P</th>
                                            <th class="border-top-0">Tempat, Tgl Lahir</th>
                                            <th class="border-top-0">Fakultas</th>
                                            <th class="border-top-0">Prodi</th>
                                            <th class="border-top-0">Tahun Lulus</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alumni as $p)
                                    <tr justify-content->
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $p->foto) }}" width="80" height="80" alt="{{ $p->foto }}">
                                        </td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->nim }}</td>
                                        <td>{{ $p->gender }}</td>
                                        <!-- <td>{{ $p->agama }}</td> -->
                                        <td>{{ $p->tempat_lahir}}, {{ $p->tgl_lahir }}</td>
                                        <!-- <td>{{ $p->alamat }}</td> -->
                                        <td>{{ $p->fakultas->nama_fakultas }}</td>
                                        <td>{{ $p->prodi->nama_prodi }}</td>
                                        <td>{{ $p->tahun_lulus }}</td>
                                        <!-- <td>{{ $p->foto }}</td> -->
                                        
                                        <td>
                                            <a href="/admin/tracerstudy/create" class="btn btn-info">Lengkapi</a>
                                            <a href="/admin/alumni/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="/admin/alumni/{{ $p->id }}" method="post" class="d-inline"> 
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn btn-danger border-0" onclick="return confirm('Are you sure ?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection