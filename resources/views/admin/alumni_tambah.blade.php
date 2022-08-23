@extends('admin.layout2.main')

@section('container')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile Alumni</h4>
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
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="img/foto.jpeg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">{{ auth()->user()->name }}</h4>
                                        <h5 class="text-white mt-2">{{ auth()->user()->email }}</h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Nama</th>
                                            <td>:</td>
                                            <td class="txt-oflo">{{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">NIM</th>
                                            <td>:</td>
                                            <td class="txt-oflo">180102021</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Gender</th>
                                            <td>:</td>
                                            <td class="txt-oflo">Perempuan</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Tempat &Tanggal lahir</th>
                                            <td>:</td>
                                            <td class="txt-oflo">bandung, 29 November 1998</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Alamat</th>
                                            <td>:</td>
                                            <td class="txt-oflo">Sumedang</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">No HP</th>
                                            <td>:</td>
                                            <td class="txt-oflo">081224027615</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Fakultas</th>
                                            <td>:</td>
                                            <td class="txt-oflo">Sains dan Teknologi</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Program Studi</th>
                                            <td>:</td>
                                            <td class="txt-oflo">Teknik Informatika</td>
                                        </tr>
                                    </thead>
                                </table>
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
@endsection