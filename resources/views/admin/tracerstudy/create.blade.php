@extends('admin.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Tracer Study</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar" class="align-text-bottom"></span>Export</button>
          </div>
        </div>
      </div>
    <div style="background-color: white" class="container p-3 my-3 border">
      <div class="card-body">
        <form method="post" action="/admin/tracerstudy">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <select name="alumni_id" class="form-select" aria-label="Default select example">
                @foreach ($alumni as $p)
                    @if(old('alumni_id') == $p->id)
                        <option value="{{ $p->id }}" selected>{{ $p->nama }}</opton>
                    @else
                        <option value="{{ $p->id }}">{{ $p->nama }}</opton>
                    @endif
                @endforeach
            </select> 

            @if($errors->has('alumni_id'))
            <div class="text-danger">
                {{ $errors->first('alumni_id')}}
            </div>
             @endif
        </div>

        <div class="mb-3">
            <label for="kegiatan_stlh_lulus" class="form-label">Kegiatan Setelah Lulus</label>
            <select name="kegiatan_stlh_lulus" class="form-select" aria-label="Default select example">
                <option value="Bekerja">Bekerja</option>
                <option value="Melanjutkan Pendidikan">Melanjutkan Pendidikan</option>
                <option value="Kuliah Sambil Bekerja">Kuliah Sambil Bekerja</option>
                <option value="Berwirausaha">Berwirausaha</option>
                <option value="Belum Bekerja">Belum Bekerja</option>
            </select> 

            @if($errors->has('kegiatan_stlh_lulus'))
                <div class="text-danger">
                    {{ $errors->first('kegiatan_stlh_lulus')}}
                </div>
            @endif
        </div>
        <div style="background-color: white" class="container p-3 my-3 border">
        <div class="alert alert-secondary">
            <strong>DATA PEKERJAAN</strong>
        </div>
        <div class="mb-3">
            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="{{ old('nama_perusahaan') }}">
                    
            @if($errors->has('nama_perusahaan'))
            <div class="text-danger">
                {{ $errors->first('nama_perusahaan')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ old('jabatan') }}">
                    
            @if($errors->has('jabatan'))
            <div class="text-danger">
                {{ $errors->first('jabatan')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="alamat_kantor" class="form-label">Alamat Kantor</label>
            <textarea name="alamat_kantor" class="form-control" id="alamat_kantor">{{ old('alamat_kantor') }}</textarea>
                    
            @if($errors->has('alamat_kantor'))
            <div class="text-danger">
                {{ $errors->first('alamat_kantor')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tahun_bekerja" class="form-label">Tahun Masuk Bekerja</label>
            <input type="text" name="tahun_bekerja" class="form-control" id="tahun_bekerja" value="{{ old('tahun_bekerja') }}">
                    
            @if($errors->has('tahun_bekerja'))
            <div class="text-danger">
                {{ $errors->first('tahun_bekerja')}}
            </div>
            @endif
        </div>
        </div>
        <div style="background-color: white" class="container p-3 my-3 border">
        <div class="alert alert-secondary">
            <strong>DATA PENDIDIKAN</strong>
        </div>
        <div class="mb-3">
            <label for="nama_pt" class="form-label">Nama Perguruan Tinggi</label>
            <input type="text" name="nama_pt" class="form-control" id="nama_pt" value="{{ old('nama_pt') }}">
                    
            @if($errors->has('nama_pt'))
            <div class="text-danger">
                {{ $errors->first('nama_pt')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="jenjang" class="form-label">Jenjang</label>
            <input type="text" name="jenjang" class="form-control" id="jenjang" value="{{ old('jenjang') }}">
                    
            @if($errors->has('jenjang'))
            <div class="text-danger">
                {{ $errors->first('jenjang')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" id="fakultas" value="{{ old('fakultas') }}">
                    
            @if($errors->has('fakultas'))
            <div class="text-danger">
                {{ $errors->first('fakultas')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" name="prodi" class="form-control" id="prodi" value="{{ old('prodi') }}">
                    
            @if($errors->has('prodi'))
            <div class="text-danger">
                {{ $errors->first('prodi')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
            <input type="text" name="tahun_masuk" class="form-control" id="tahun_masuk" value="{{ old('tahun_masuk') }}">
                    
            @if($errors->has('tahun_masuk'))
            <div class="text-danger">
                {{ $errors->first('tahun_masuk')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
            <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" value="{{ old('tahun_lulus') }}">
                    
            @if($errors->has('tahun_lulus'))
            <div class="text-danger">
                {{ $errors->first('tahun_lulus')}}
            </div>
            @endif
        </div>
        </div>
        <div style="background-color: white" class="container p-3 my-3 border">
        <div class="alert alert-secondary">
            <strong>DATA WIRAUSAHA</strong>
        </div>
        <div class="mb-3">
            <label for="nama_usaha" class="form-label">Nama Usaha</label>
            <input type="text" name="nama_usaha" class="form-control" id="nama_usaha" value="{{ old('nama_usaha') }}">
                    
            @if($errors->has('nama_usaha'))
            <div class="text-danger">
                {{ $errors->first('nama_usaha')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="bidang_usaha" class="form-label">Bidang Usaha</label>
            <input type="text" name="bidang_usaha" class="form-control" id="bidang_usaha" value="{{ old('bidang_usaha') }}">
                    
            @if($errors->has('bidang_usaha'))
            <div class="text-danger">
                {{ $errors->first('bidang_usaha')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
            <textarea name="alamat_usaha" class="form-control" id="alamat_usaha">{{ old('alamat_usaha') }}</textarea>
                    
            @if($errors->has('alamat_usaha'))
            <div class="text-danger">
                {{ $errors->first('alamat_usaha')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tahun_usaha" class="form-label">Tahun Usaha</label>
            <input type="text" name="tahun_usaha" class="form-control" id="tahun_usaha" value="{{ old('tahun_usaha') }}">
                    
            @if($errors->has('tahun_usaha'))
            <div class="text-danger">
                {{ $errors->first('tahun_usaha')}}
            </div>
            @endif
        </div>
        </div>

        <div class="mb-3">
            <label for="relevansi" class="form-label">Menurut anda, Bagaimana relevansi pekerjaan anda dengan bidang ilmu yang ditempuh pada saat kuliah ?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relevansi" id="gender" value="Relevan">
                <label class="form-check-label" for="inlineRadio1">Relevan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="relevansi" id="gender" value="Tidak Relevan">
                <label class="form-check-label" for="inlineRadio2">Tidak Relevan</label>
            </div>

            @if($errors->has('relevansi'))
            <div class="text-danger">
                {{ $errors->first('relevansi')}}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="saran_masukan" class="form-label">Saran & Masukan Untuk UMBandung Kedepannya</label>
            <textarea type="text" name="saran_masukan" class="form-control" id="saran_masukan">{{ old('saran_masukan') }}</textarea>
                    
            @if($errors->has('saran_masukan'))
            <div class="text-danger">
                {{ $errors->first('saran_masukan')}}
            </div>
            @endif
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
        </form>
        </div>
    </div>
@endsection