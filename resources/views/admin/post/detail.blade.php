@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Detail Post</h4>
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
                          <a href="/admin/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
                          <a href="/admin/posts/{{ $posts->id }}/edit" class="btn btn-warning"><span data-feather="Edit"></span>Edit</a>
                          <form action="/admin/posts/{{ $posts->id }}" method="post" class="d-inline"> 
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="trash-2"></span>Delete</button>
                          </form>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center"><h3><b>{{ $posts->title }}</b></h3></th>
                                        </tr>
                                        <tr>
                                           <td class="text-center">
                                              @if($posts->image)
                                              <img src="{{ asset('storage/' . $posts->image) }}" width="500" height="250" alt="{{ $posts->image }}">
                                              @else
                                              <img src="https://source.unsplash.com/80x80?{{ $posts->image }}" width="500" height="250" alt="{{ $posts->image }}">
                                              @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ $posts->body }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection