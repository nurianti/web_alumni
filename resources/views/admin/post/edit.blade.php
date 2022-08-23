@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Update Postingan</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data" class="form-horizontal form-material">
                                @method('put') 
                                @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Title</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('title'))
                                            <div class="text-danger">
                                                {{ $errors->first('title')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Slug</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                                                class="form-control p-0 border-0"> </div>
                                            @if($errors->has('slug'))
                                            <div class="text-danger">
                                                {{ $errors->first('slug')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                        @if($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                                        @else
                                            <img class="img-preview img-fluid mb-3 col-sm-3">
                                        @endif
                                            <input name="image" class="form-control @error('foto') is-invalid @enderror" type="file" id="image" onchange="previewImage()">
                                            @if($errors->has('image'))
                                            <div class="text-danger">
                                                {{ $errors->first('image')}}
                                            </div>
                                            @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Body</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <textarea name="body" id="body" rows="5" class="form-control p-0 border-0">{{ old('body', $post->body) }}</textarea>
                                        <!-- <input id="body" type="hidden" name="body" value="{{ old('body') }}"> -->
                                            @if($errors->has('body'))
                                            <div class="text-danger">
                                                {{ $errors->first('body')}}
                                            </div>
                                            @endif
                                            <trix-editor input="body"></trix-editor>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
        <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/admin/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault()
        });

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
