<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Alumni - <strong>EDIT DATA</strong> - UNIVERSITAS MUHAMMADIYAH BANDUNG
                </div>
                <div class="card-body">
                    <a href="/alumni" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/alumni/update/{{ $alumni->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="NIM" value=" {{ $alumni->nim }}">

                            @if($errors->has('nim'))
                                <div class="text-danger">
                                    {{ $errors->first('nim')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="nama Alumni .." value=" {{ $alumni->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" name="gender" class="form-control" placeholder="gender" value=" {{ $alumni->gender }}">
 
                            @if($errors->has('gender'))
                                <div class="text-danger">
                                    {{ $errors->first('gender')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" name="agama" class="form-control" placeholder="agama" value=" {{ $alumni->agama }}">
 
                            @if($errors->has('agama'))
                                <div class="text-danger">
                                    {{ $errors->first('agama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="tanggal lahir" value=" {{ $alumni->tgl_lahir }}">
 
                            @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat">{{ $alumni->alamat }}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="nomor hp" value=" {{ $alumni->no_hp }}">
 
                             @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Fakultas</label>
                            <select class="form-control" name="fakultas_id">
                                @foreach ($fakultas as $fakultas)
                                    @if(old('fakultas_id') == $fakultas->id)
                                    <option value="{{ $fakultas->id }}" selected>{{ $fakultas->nama_fakultas }}</opton>
                                    @else
                                    <option value="{{ $fakultas->id }}">{{ $fakultas->nama_fakultas }}</opton>
                                    @endif
                                @endforeach
                            </select> 
                             @if($errors->has('fakultas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('fakultas_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi_id">
                                @foreach ($prodis as $prodi)
                                    @if(old('prodi_id') == $prodi->id)
                                    <option value="{{ $prodi->id }}" selected>{{ $prodi->nama_prodi }}</opton>
                                    @else
                                    <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</opton>
                                    @endif
                                @endforeach
                            </select>
                             @if($errors->has('prodi_id'))
                                <div class="text-danger">
                                    {{ $errors->first('prodi_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <input type="text" name="tahun_lulus" class="form-control" placeholder="tahun lulus" value=" {{ $alumni->tahun_lulus }}">
 
                             @if($errors->has('tahun_lulus'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_lulus')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="browse" name="foto" class="form-control" placeholder="foto" value=" {{ $alumni->foto }}">
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>