@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Data Tracer Study</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>

      <div class="table-responsive">
      <div style="background-color: white" class="container p-3 my-3 border">
        <table class="table table-striped table-sm-8">
          <thead>
            <tr>
                <div class="alert alert-secondary">
                    <strong><h3 class="text-center">{{ $tracerstudy->alumni->nama }}</h3></strong>
                </div>           
            </tr>
            <tr>
                <td rowspan="5"><img src="{{ asset('storage/' . $tracerstudy->alumni->foto) }}" width="120" height="150" alt="{{ $tracerstudy->alumni->foto }}"></td>
                
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $tracerstudy->alumni->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $tracerstudy->alumni->nim }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $tracerstudy->alumni->gender }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{ $tracerstudy->alumni->agama }}</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir</th>
                <td colspan="2">{{ $tracerstudy->alumni->tempat_lahir }}, {{ $tracerstudy->alumni->tgl_lahir }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td colspan="2">{{ $tracerstudy->alumni->alamat }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td colspan="2">{{ $tracerstudy->alumni->no_hp }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td colspan="2">{{ $tracerstudy->alumni->fakultas->nama_fakultas }}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td colspan="2">{{ $tracerstudy->alumni->prodi->nama_prodi }}</td>
            </tr>
            <tr>
                <th>Tahun Masuk</th>
                <td colspan="2">{{ $tracerstudy->alumni->tahun_masuk }}</td>
            </tr>
            <tr>
                <th>Tahun Lulus</th>
                <td colspan="2">{{ $tracerstudy->alumni->tahun_lulus }}</td>
            </tr>
            <tr>
                <th>kegiatan Setelah Lulus</th>
                <td colspan="2">{{ $tracerstudy->kegiatan_stlh_lulus }}</td>
            </tr>
            <tr>
                <td colspan="3" class="table-secondary"><h6>DATA PEKERJAAN</h6></td>
            </tr>
            <tr>
                <th>Nama Perusahaan</th>
                <td colspan="2">{{ $tracerstudy->nama_perusahaan }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td colspan="2">{{ $tracerstudy->jabatan }}</td>
            </tr>
            <tr>
                <th>Alamat Kantor</th>
                <td colspan="2">{{ $tracerstudy->alamat_kantor }}</td>
            </tr>
            <tr>
                <th>Tahun Mulai Bekerja</th>
                <td colspan="2">{{ $tracerstudy->tahun_bekerja }}</td>
            </tr>
            <tr>
                <td colspan="3" class="table-secondary"><h6>DATA PENDIDIKAN</h6></td>
            </tr>
            <tr>
                <th>nama_pt</th>
                <td colspan="2">{{ $tracerstudy->nama_pt }}</td>
            </tr>
            <tr>
                <th>jenjang</th>
                <td colspan="2">{{ $tracerstudy->jenjang }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td colspan="2">{{ $tracerstudy->fakultas }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td colspan="2">{{ $tracerstudy->prodi }}</td>
            </tr>
            <tr>
                <th>Tahun Masuk</th>
                <td>{{ $tracerstudy->tahun_masuk }}</td>
            </tr>
            <tr>
                <th>Tahun Lulus</th>
                <td>{{ $tracerstudy->tahun_lulus }}</td>
            </tr>
            <tr>
                <td colspan="3" class="table-secondary"><h6>DATA WIRAUSAHA</h6></td>
            </tr>
            <tr>
                <th>Nama Usaha</th>
                <td>{{ $tracerstudy->nama_usaha }}</td>
            </tr>
            <tr>
                <th>Bidang Usaha</th>
                <td>{{ $tracerstudy->bidang_usaha }}</td>
            </tr>
            <tr>
                <th>Alamat Usaha</th>
                <td>{{ $tracerstudy->alamat_usaha }}</td>
            </tr>
            <tr>
                <th>Tahun Mulai Usaha</th>
                <td>{{ $tracerstudy->tahun_usaha }}</td>
            </tr>
            <tr>
                <th>Relevansi pekerjaan dengan bidang ilmu pada saat kuliah</th>
                <td>{{ $tracerstudy->relevansi }}</td>
            </tr>
            <tr>
                <th>Saran & Masukan Untuk UMBandung</th>
                <td>{{ $tracerstudy->saran_masukan }}</td>
            </tr>
            
          </thead>
          <tbody>
            
          </tbody>
        </table>
        </div>
      </div>
@endsection