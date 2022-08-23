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
                    CRUD Data Tracer Study - <strong>TAMBAH DATA</strong> - UNIVERSITAS MUHAMMADIYAH BANDUNG
                </div>
                <div class="card-body">
                    <a href="/admin/tracerstudy" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/tracerstudy/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="alumni_id" class="form-control" placeholder="alumni_id">
 
                            @if($errors->has('alumni_id'))
                                <div class="text-danger">
                                    {{ $errors->first('alumni_id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kegiatan Setelah Lulus</label>
                            <select name="kegiatan_stlh_lulus" class="form-control" placeholder="nama Alumni ..">
                                <option value="Bekerja">Bekerja</option>
                                <option value="Melanjutkan S2">Melanjutkan S2</option>
                            </select>
                            @if($errors->has('kegiatan_stlh_lulus'))
                                <div class="text-danger">
                                    {{ $errors->first('kegiatan_stlh_lulus')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nama Perguruan Tinggi (Jika Melanjutkan S2)</label>
                            <input type="text" name="nama_pt" class="form-control" placeholder="nama_pt">
 
                            @if($errors->has('nama_pt'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_pt')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nama Tempat Bekerja</label>
                            <input type="text" name="nama_tmpt_kerja" class="form-control" placeholder="nama_tmpt_kerja">
 
                            @if($errors->has('nama_tmpt_kerja'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_tmpt_kerja')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="jabatan">
 
                            @if($errors->has('jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>Alamat Bekerja</label>
                            <textarea name="alamat_bekerja" class="form-control" placeholder="Alamat Bekerja"></textarea>
 
                             @if($errors->has('alamat_bekerja'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat_bekerja')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Saran & Masukan (Untuk UMBandung)</label>
                            <textarea name="saran_masukan" class="form-control" placeholder="saran_masukan"></textarea>
 
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
        </div>
    </body>
</html>