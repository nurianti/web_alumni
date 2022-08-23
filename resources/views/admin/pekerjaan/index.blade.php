@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pekerjaan Alumni</h4>
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
                        <a href="/admin/pekerjaan/create" class="btn btn-primary">New Data</a>
                            <div class="table-responsive">
                                <table class="table text-nowrap text_center">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Memiliki Pekerjaan</th>
                                            <th class="border-top-0">Nama Instansi</th>
                                            <th class="border-top-0">Bulan</th>
                                            <th class="border-top-0">Tahun</th>
                                            <th class="border-top-0">Gaji</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pekerjaan as $p)
                                    <tr justify-content->
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>
                                            <img src="{{ asset('storage/' . $p->alumni->foto) }}" width="80" height="80" alt="{{ $p->alumni->foto }}">
                                        </td>
                                        <td>{{ $p->alumni->nama }}</td>
                                        <td>{{ $p->memiliki_pekerjaan }}</td>
                                        <td>{{ $p->nama_instansi }}</td>
                                        <td>{{ $p->bulan_bekerja }}</td>
                                        <td>{{ $p->tahun_bekerja }}</td>
                                        <td>{{ $p->gaji }}</td>
                                        <td>
                                            <a href="/admin/pekerjaan/{{ $p->id }}" class="btn btn-info">Detail</a>
                                            <a href="/admin/pekerjaan/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="/admin/pekerjaan/{{ $p->id }}" method="post" class="d-inline"> 
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
@endsection
