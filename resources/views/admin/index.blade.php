@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
      <div class="alert alert-success text-center" role="alert">
        <h5>Selamat Datang <b>{{ auth()->user()->name }}</b> 
          <!-- {{ date('Y-m-d H:i:s') }} -->
        </h5>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card text-bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">JUMLAH ALUMNI</div>
              <div class="card-body">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/image1.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h1 class="card-title text-center">{{ $alumni->count() }}</h1>
                    <!-- <p class="card-text">This is a wider card with supporting</p> -->
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        <div class="col-sm-4">
            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">JUMLAH ALUMNI YANG BEKERJA</div>
                <div class="card-body">
                <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/image1.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h1 class="card-title text-center">{{ $tracerstudy->count() }}</h1>
                    <!-- <p class="card-text">This is a wider card with supporting</p> -->
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">JUMLAH ALUMNI YANG BELUM BEKERJA</div>
              <div class="card-body">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/image1.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h1 class="card-title text-center">{{ $tracerstudy->count('pivot.id') }}</h1>
                    <!-- <p class="card-text">This is a wider card with supporting</p> -->
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
@endsection