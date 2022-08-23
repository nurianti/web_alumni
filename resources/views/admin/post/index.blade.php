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
                        <a href="/admin/posts/create" class="btn btn-primary">New Post</a>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">Excerpt</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $p)
                                    <tr justify-content->
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->title }}</td>
                                        <td>@if($p->image)
                                            <img src="{{ asset('storage/' . $p->image) }}" width="80" height="80" alt="{{ $p->image }}">
                                            @else
                                            <img src="https://source.unsplash.com/80x80?{{ $p->image }}" alt="{{ $p->image }}">
                                            @endif
                                          </td>
                                        <td>{{ $p->excerpt }}</td>
                                        <td>
                                            <a href="/admin/posts/{{ $p->id }}" class="btn btn-info">detail</a>
                                            <a href="/admin/posts/{{ $p->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="/admin/posts/{{ $p->id }}" method="post" class="d-inline"> 
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